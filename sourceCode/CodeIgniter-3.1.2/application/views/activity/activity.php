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

            <ul class="nav nav-sidebar">
                <li><a href="/ActivityController" class="white-color">全部活动</a></li>
                <li><a href="/ActivityController/release_activity" class="white-color">发布活动</a></li>
                <li><a href="/ActivityController/my_activity" class="white-color">我的活动</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right">
            <div class="input-group activity-search-part">
                <input type="text" class="form-control activity-search-text" placeholder="搜索活动类型或活动名">
                <span class="input-group-addon btn-activity-search"><i class="icon-search icon-large"></i></span>
            </div>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join">加入&nbsp<i class="icon-plus"></i></a>
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
                        <a type="button" class="btn btn-default btn-join"><span class="join-text">加入</span>&nbsp<i class="icon-plus"></i></a>
                    </div>
                </div>


            </div>

            <div class="page-jump float-right">
                <a type="button" class="btn btn-default btn-page">上一页</a>
                &nbsp<span>1</span>&nbsp
                <a type="button" class="btn btn-default btn-page">下一页</a>
            </div>

            <div class="clearfix"></div>
            <div class="foot-part">
<!--                <span>没找到喜欢的活动？</span>-->
<!--                <a href="releaseActivity.html" class="release-text">去发布！</a>-->
            </div>
        </div>
    </div>


</div>





<!--js-->
<?php $this->load->view('templates/plugin') ?>
<script src=<?php echo base_url("public/js/activity.js") ?>></script>


</body>
</html>