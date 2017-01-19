<?php
include_once 'lib/config.php';
include_once 'header.php';
?>


    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>

            <h1 class="header center orange-text"><?php echo $site_name; ?></h1>

            <div class="row center">
                <h5 class="header col s12 light">轻松科学上网 保护个人隐私</h5>
            </div>
            <div class="row center">
                <a href="user/register.php" id="download-button"
                   class="btn-large waves-effect waves-light orange">立即注册</a>
            </div>
            <br><br>
        </div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">免费提供</h5>

                        <p class="light">
                            免费的Shadowsocks，目前<font color="red">11个</font> 节点，后续可能会新增。
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">简单注册</h5>

                        <p class="light">
                            注册简单方便，每日新增用户50左右。
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">平台支持</h5>

                        <p class="light">
                            无论你是Pc用户还是手机用户都完美支持。
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br><br>

        <div class="section">

        </div>
    </div>
<?php include_once 'ana.php';
include_once 'footer.php'; ?>