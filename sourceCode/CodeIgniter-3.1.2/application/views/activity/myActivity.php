<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="the sport page of RunStyle, to analysis sport and sleep data, to show friends' and personal information">
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
<?php $this->load->view('templates/navbar',$user_info); ?>

<!--main content-->
<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <?php $this->load->view('templates/side-navbar',$user_info) ?>
            <span id="login-user-name" style="display:none"><?php echo $user_info['username'] ?></span>

            <ul class="nav nav-sidebar">
                <li><a href="/ActivityController" class="white-color">全部活动</a></li>
                <li><a href="/ActivityController/release_activity" class="white-color">发布活动</a></li>
                <li><a href="/ActivityController/my_activity" class="white-color">我的活动</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right">
            <h3 class="grey-color">进行中</h3>
            <hr class="bar-hr">
            <h4 class="grey-color">我发布的</h4>
            <div class="my-release-list" id="release-list">
                <div class="one-activity one-activity-release float-left">
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
                            <span class="classify-tag">发起人：</span>
                            <a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                        </div>
                        <div class="joined">
                            <span class="classify-tag">已加入：</span><span class="grey-color join-num">10</span>/<span class="limit-num">20</span>
                        </div>

                    </div>
                    <div class="float-right btn-join-part">
                        <a type="button" class="btn btn-default btn-join detail-info">查看详情&nbsp</a>
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

<!--                <div class="page-jump float-right">-->
<!--                    <a type="button" class="btn btn-default btn-page">上一页</a>-->
<!--                    &nbsp<span>1</span>&nbsp-->
<!--                    <a type="button" class="btn btn-default btn-page">下一页</a>-->
<!--                </div>-->
            </div>

            <div class="clearfix"></div>
            <hr class="bar-hr">
            <h4 class="grey-color">我参与的</h4>
            <div class="my-joint-list" id="join-list">
                <div class="one-activity one-activity-join float-left">
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
                            <span class="classify-tag">发起人：</span>
                            <a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                        </div>
                        <div class="joined">
                            <span class="classify-tag">已加入：</span><span class="grey-color join-num">10</span>/<span class="limit-num">20</span>
                        </div>

                    </div>
                    <div class="float-right btn-join-part">
                        <a type="button" class="btn btn-default btn-join detail-info">查看详情&nbsp</a>
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
                        <a type="button" class="btn btn-default btn-join">退出&nbsp</a>
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
                        <a type="button" class="btn btn-default btn-join">退出&nbsp</a>
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
                        <a type="button" class="btn btn-default btn-join">退出&nbsp</a>
                    </div>
                </div>
<!--                <div class="page-jump float-right">-->
<!--                    <a type="button" class="btn btn-default btn-page">上一页</a>-->
<!--                    &nbsp<span>1</span>&nbsp-->
<!--                    <a type="button" class="btn btn-default btn-page">下一页</a>-->
<!--                </div>-->
            </div>

            <div class="clearfix"></div>
            <hr class="bar-hr">
            <h3 class="grey-color">已完成</h3>
            <div class="my-finish-list" id="finish-list">
                <div class="one-activity one-activity-finish float-left">
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
                            <span class="classify-tag">发起人：</span>
                            <a href="personalPage.html" class="activity-releaser grey-color">小易</a>
                        </div>
                        <div class="joined">
                            <span class="classify-tag">已加入：</span><span class="grey-color join-num">10</span>/<span class="limit-num">20</span>
                        </div>

                    </div>
                    <div class="float-right btn-join-part">
                        <a type="button" class="btn btn-default btn-join detail-info">查看详情&nbsp</a>
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
                <a type="button" class="btn btn-default btn-page">上一页</a>
                &nbsp<span>1</span>&nbsp
                <a type="button" class="btn btn-default btn-page">下一页</a>
            </div>






        </div>
    </div>


</div>





<!--js-->
<?php $this->load->view('templates/plugin') ?>

<script src=<?php echo base_url("public/js/myActivity.js") ?>></script>
</body>
</html>