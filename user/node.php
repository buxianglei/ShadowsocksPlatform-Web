<?php
require_once '_main.php';
$node = new Ss\Node\Node();
?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            节点列表
            <small>Node List</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- START PROGRESS BARS -->
        <div class="row">
            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-th-list"></i>

                        <h3 class="box-title">免费节点</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="callout callout-warning">
                            <h4>注意!</h4>

                            <p>请勿在任何地方公开节点地址！<font color="red">双边加速使用：finalspeed客户端，锐速加速不需要使用</font></p>
                        </div><?php
                        $node0 = $node->NodesArray(0);
                        foreach ($node0 as $row) {
                            ?>
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs pull-right">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            操作 <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1"
                                                                       href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a>
                                            </li>
                                            <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1"
                                                                       href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pull-left header"><i
                                            class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1-1">
                                        <p><a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a>
                                            <code><?php echo $row['node_server']; ?></code>
                                            <a class="btn btn-xs bg-orange btn-flat margin"
                                               href="#"><?php echo $row['node_status']; ?></a>
                                            <a class="btn btn-xs bg-green btn-flat margin"
                                               href="#"><?php echo $row['node_method']; ?></a>
                                        </p>

                                        <p> <?php echo $row['node_info']; ?></p>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        <?php }?>
                    </div>
                    <!-- /.box-body -->


                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (left) -->

            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-code"></i>

                        <h3 class="box-title">Pro节点</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="callout callout-warning">
                            <h4>注意!</h4>

                            <p>只有高级用户才可以连接这些节点</p>
                            <?php if ($oo->get_plan() != 'pro') { ?> <p><a href="buy.php">购买套餐</a>从而升级为高级用户来使用这些节点</p>

                            <?php } ?>
                            <?php if ($oo->get_plan() == 'pro') { ?> <p>已经是Pro用户可以正常使用这些节点</p>

                            <?php } ?>
                        </div><?php
                        //							if($oo -> get_plan() == 'pro'){
                        $node1 = $node->NodesArray(1);
                        foreach ($node1 as $row) {
                            ?>
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs pull-right">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            操作 <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1"
                                                                       href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a>
                                            </li>
                                            <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1"
                                                                       href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pull-left header"><i
                                            class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1-1">
                                        <p><a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a>
                                            <code><?php echo $row['node_server']; ?></code>
                                            <a class="btn btn-xs bg-orange btn-flat margin"
                                               href="#"><?php echo $row['node_status']; ?></a>
                                            <a class="btn btn-xs bg-green btn-flat margin"
                                               href="#"><?php echo $row['node_method']; ?></a>
                                        </p>

                                        <p> <?php echo $row['node_info']; ?></p>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                            <?php
                        }
                        //}else{}
                        ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -->

        </div>
        <!-- /.row -->
        <!-- END PROGRESS BARS -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
