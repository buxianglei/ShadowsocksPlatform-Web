<?php
require_once '_main.php';
$ssmin = new \Ss\Etc\Ana();
?>

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
                    <div class="box-header">
                        <h3 class="box-title"><?php echo $site_name; ?> 统计信息</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="callout callout-warning">
                            <h4>注意！</h4>

                            <p>流量统计仅供参考，在线人数有一小会儿的延迟。</p>
                        </div>
                        <p><?php echo $site_name;  ?>本月已经产生流量<code><?php echo $ssmin->getTrafficGB(); ?></code>GB。</p>
                        <p>付费总用户数：<code><?php echo $ssmin->ProUserCount(); ?></code></p>
                        <p>注册总用户数：<code><?php echo $ssmin->allUserCount(); ?></code></p>


                        <p>过去24小时在线人数：<code><?php echo $ssmin->onlineUserCount(3600 * 24);?></code>。</p>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
