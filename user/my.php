<?php
require_once '_main.php'; ?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户中心
            <small>User Center</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-body">
                        <p>用户名：<?php echo $U->GetUserName(); ?></p>

                        <p>邮箱：<?php echo $user_email; ?></p>

                        <p> 到期时间：<span
                                class="label label-info">
<?php
                                if ($oo->get_last_get_gift_time() > time()) {
                                    echo date('Y-m-d H:i:s', $oo->get_last_get_gift_time());
                                } else {
                                    echo '已到期，请及时续费';
                                }

                                ?>


                            </span>
                        </p>

                        <p> 套餐：<span class="label label-info"> <?php echo $oo->get_plan();?> </span></p>


                        <!--                        <p><a class="btn btn-danger btn-sm" href="kill.php">删除我的账户</a></p>-->
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
