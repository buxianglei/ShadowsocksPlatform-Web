<?php
require_once '../lib/config.php';
require_once '_check.php';
if (isset($_POST['cardnum'])) {
    $cn = $_POST['cardnum'];
    $cardinfo = $db->select("card", "*", [
        "AND" => [
            "cardno" => $cn,
            "useuid" => 0
        ]
    ]);

    //月付费需求更改
    if ($cardinfo) {
        $uid = $U->uid;
        $num = $cardinfo[0]['transfer'] * 3600 * 24 * 31;
        $uinfo = $db->select('user', "*", [
            "uid" => $uid
        ])[0];
        if ($uinfo['plan'] == 'pro') {
            $db->update('user', [
                "last_get_gift_time[+]" => $num
            ], [
                "uid" => $uid
            ]);
        } else {
            $num = $num + time();
            $db->update('user', [
                "u" => 0,
                "d" => 0,
                "plan" => 'pro',
                "last_get_gift_time" => $num,
                "transfer_enable" => 100 * 1024 * 1024 * 1024
            ], [
                "uid" => $uid
            ]);
        }
        $db->update('card', [
            "useuid" => $uid
        ], [
            "cardno" => $cn
        ]);

        echo '充值成功,您充值了 ' . $cardinfo[0]['transfer'] . '月~';
        die;
    }

//    if ($cardinfo) {
//        $uid = $U->uid;
//        $num = $cardinfo[0]['transfer'] * 1024 * 1024 * 1024;
//        $uinfo = $db->select('user', "*", [
//            "uid" => $uid
//        ])[0];
//        if ($uinfo['plan'] == 'pro') {
//            $db->update('user', [
//                "transfer_enable[+]" => $num
//            ], [
//                "uid" => $uid
//            ]);
//        } else {
//            $db->update('user', [
//                "u" => 0,
//                "d" => 0,
//                "plan" => 'pro',
//                "transfer_enable" => $num
//            ], [
//                "uid" => $uid
//            ]);
//        }
//        $db->update('card', [
//            "useuid" => $uid
//        ], [
//            "cardno" => $cn
//        ]);
//
//        echo '充值成功,您充值了 ' . $cardinfo[0]['transfer'] . 'GB 流量~';
//        die;
//    }
    else {
        echo '充值卡不存在或已被使用';
        die;
    }
} else {
    die;
}