<?php
require_once '_main.php'; ?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            购买套餐
            <small>Buy transfer</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <div class="callout callout-warning">
                    <h4>注意！</h4>

                    <p>购买之后将清空您目前拥有的所有免费流量,如您已经是高级账户,则流量保持不变。</p>

                    <p>当购买的流量用尽之后,系统将自动补偿您50G免费节点流量。</p>

                    <p>购买之后连接免费节点与收费节点均可使用,请知悉。</p>

                    <p>套餐每月限制用户流量为100GB，每月中旬清空使用流量,请知悉。</p>

                </div>
                <div class="callout callout-warning">
                    <h5>充值卡购买连接</h5>

                    <p><a href="http://svip.tzyee.net/list/8hpns  "><font color="red">活动卡密购买（特价月卡）</font></a></p>

                    <p><a href="http://svip.tzyee.net/list/8dDfs "><font color="red">月卡点击购买</font></a></p>

                    <p><a href="http://svip.tzyee.net/list/8dDps "><font color="red">季卡点击购买</font></a></p>

                    <p><a href="http://svip.tzyee.net/list/8dEGs  "><font color="red">年卡点击购买</font></a></p>
                </div>

                <div class="box box-primary">
                    <div class="box-body">
                        <p>充值卡充值-<font color="red">请使用购买到的卡密充值</font></p>

                        <p><input type="text" class="form-control" placeholder="充值卡号" id="cardnum"></p>

                        <p><a class="btn btn-success btn-sm" onclick="submitcard(); return false;"
                              id="submitbutton">确定</a></p>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
<script>
    function buy() {
        if ($("#num").val() < 1 || $("#num").val() > 1000) {
            showbox('提示', '您输入的流量数量不合法');
            return false;
        }
        $("#buybutton").html('提交中...');
        $.post("neworder.php", {
            "num": $("#num").val()
        }, function (data, status) {
            if (status == 'success') {
                showbox('交易信息', data);
            } else {
                showbox('错误', '通信错误');
            }
        });
    }

    function submitcard() {
        $("#submitbutton").html('提交中...');
        $.post("submitcard.php", {
            "cardnum": $("#cardnum").val()
        }, function (data, status) {
            if (status == 'success') {
                showbox('交易信息', data);
            } else {
                showbox('错误', '通信错误');
            }
        });
    }
    function showbox(title, content) {
        $("#skin-blue").append('<div class="modal fade in" id="tradebox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="closebox(); return false;">×</button><h4 class="modal-title" id="myModalLabel" contenteditable="false">' + title + '</h4></div><div class="modal-body" contenteditable="false">' + content + '</div><div class="modal-footer"></div></div></div></div>');
    }
    function closebox() {
        $("#tradebox").remove();
        $("#submitbutton").html('提交');
    }
</script>
