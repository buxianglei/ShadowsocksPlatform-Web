<?php
require_once '../lib/config.php';
require_once '_check.php';
//权限检查
if (!$oo->is_able_to_check_in()) {
    $a['msg'] = '您无法签到,可能是因为您是高级账户或者您24小时内已经签过到了';
} else {
    if ($oo->unused_transfer() < 2048 * $tomb) {
        $transfer_to_add = rand(1024, 2048);
    } else {
        $transfer_to_add = rand($check_min, $check_max);
    }
    $oo->add_transfer($transfer_to_add * $tomb);
    $oo->update_last_check_in_time();
    $a['msg'] = "获得了" . $transfer_to_add . "MB流量";
}

echo json_encode($a);