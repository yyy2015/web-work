<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="the friend page of RunStyle, to look for friends and watch what friends are doing, as well as showing their own mood">
    <meta name="author" content="yyy">
    <title>RunStyle</title>
    <!--css-->
    <link href=<?php echo base_url("public/plugin/bootstrap/css/bootstrap.min.css"); ?> rel="stylesheet">
    <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">-->
    <link href=<?php echo base_url("public/plugin/Font-Awesome-3.2.1/css/font-awesome.min.css")?> rel="stylesheet">
    <!--<link href="../plugin/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href=<?php echo base_url("public/css/main.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/navigation.css");?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/friend.css")?> rel="stylesheet" >
    <link href=<?php echo base_url("public/css/activity.css")?> rel="stylesheet">

</head>
<body>
<!--fixed navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top my-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand my-title" >RunStyle</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a >管理模块</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url("LoginController/logout"); ?>">注销</a></li>
            </ul>
        </div>
    </div>

</nav>



<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <div class="header-part">
                <img src=<?php echo base_url("public/image/header.jpg");?>>
                <h5 class="white-color">administrator</h5>
                <hr class="bar-hr">
            </div>

            <ul class="nav nav-sidebar">
                <li><a href=<?php echo base_url("/userController");?> class="white-color">用户管理</a></li>
                <li><a href=<?php echo base_url("/userController/activityManage");?> class="white-color">活动管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 release-mood float-right">
            <h3 class="grey-color">全部活动</h3>
            <hr class="bar-hr">
            <div class="add-part">
                <br>
                <div class="activity-list-part" id="list-start">
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag start-time">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag end-time">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag ">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color join-num">10</span>/<span class="limit-num">100</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join list-btn-join detail-info" >查看详情</a>
                            <!--                        <a type="button" class="btn btn-default btn-join list-btn-quit" style="display: none" >退出</a>-->
                        </div>
                    </div>

                    <!--repeat-->
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>
                    <div class="one-activity float-left">
                        <div class="float-left">
                            <a class="activity-name" href="detailActivity.html">栖霞行</a>
                            <div class="classify-tag-part">
                                <span class="classify-tag">开始：</span>
                                <span class="activity-tag">2016/10/24 00:00:00</span>
                            </div>
                            <div class="classify-tag-part">
                                <span class="classify-tag">结束：</span>
                                <span class="activity-tag">2016/10/27 00:00:00</span>
                            </div>
                            <div class="releaser-part">
                                <span class="classify-tag">发起人：</span><a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                            </div>
                            <div class="joined">
                                <span class="classify-tag">已加入：</span><span class="grey-color">10</span>
                            </div>

                        </div>
                        <div class="float-right btn-join-part">
                            <a type="button" class="btn btn-default btn-join">删除&nbsp</a>
                        </div>
                    </div>


                </div>

                <div class="page-jump float-right">
                    <a type="button" class="btn btn-default btn-page">上一页</a>&nbsp&nbsp
                    &nbsp<span>1</span>&nbsp&nbsp
                    <a type="button" class="btn btn-default btn-page">下一页</a>
                </div>
            </div>

            <div class="clearfix"></div>


        </div>


    </div>


</div>


<!--js-->
<?php $this->load->view('templates/plugin') ?>
<script src=<?php echo base_url("public/js/activityManage.js") ?>></script>
</body>
</html>