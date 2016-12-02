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
            <span id="login-user-name" style="display: none"><?php echo $user_info['username']; ?></span>

            <ul class="nav nav-sidebar">
                <li><a href="/ActivityController" class="white-color">全部活动</a></li>
                <li><a href="/ActivityController/release_activity" class="white-color">发布活动</a></li>
                <li><a href="/ActivityController/my_activity" class="white-color">我的活动</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right my-padding-bottom">
            <h3 class="grey-color">活动详情</h3>
            <hr class="bar-hr">
            <div class="activity-basic-info">
                <div class="detail-title-part">
<!--                 为js获取aid-->
                    <span id="aid" style="display: none"><?php echo $activity_info['aid'] ?></span>
                    <span class="detail-activity-name"><?php echo $activity_info['activity_name'] ?></span>
                    <span class="start-time time-style"><?php echo $activity_info['start'] ?></span><span class="activity-tag time-style">~</span>
                    <span class="end-time time-style"><?php echo $activity_info['end'] ?></span>
                </div>
<!--                <div class="time-part line-part">-->
<!--                    <i class="icon-bell-alt icon-2x icon-style"></i><span class="detail-title">距离活动开始还有：</span>-->
<!--                    <span class="day time-data">1</span><span class="time-dis">天</span>-->
<!--                    <span class="hour time-data">5</span><span class="time-dis">小时</span>-->
<!--                    <span class="minute time-data">29</span><span class="time-dis">分</span>-->
<!--                </div>-->
                <div class="detail-releaser-part line-part">
                    <i class="icon-user icon-2x icon-style"></i>
                    <span class="detail-title">发起人：</span>
                    <a class="detail-releaser" href=<?php echo "/userController/".$activity_info['releaser_name']; ?> > <?php echo $activity_info['releaser_name']; ?></a>
                </div>
                <div class="detail-gift-part line-part">
                    <i class="icon-gift icon-2x icon-style"></i>
                    <span class="detail-title">勋章值：</span>
                    <span class="time-data honor-mark" title="勋章值可助您升级以获得更大权限"><?php echo $activity_info['mark'] ; ?></span>
                </div>
                <div class="detail-join-num line-part-special">
                    <i class="icon-hand-up icon-2x icon-style"></i>
                    <span class="detail-title">人数上限：</span><span class="time-data join-num" ><?php echo $activity_info['limit_num'] ; ?></span>
                </div>
                <div class="detail-join-require line-part">
                    <i class="icon-hand-right icon-2x icon-style"></i>
                    <span class="detail-title">活动描述：</span><span class="join-require"><?php echo $activity_info['description'] ; ?></span>
                </div>

            </div>
            <hr class="bar-hr">

            <div class="clearfix"></div>
            <div class="detail-joint-part">
                <h3 class="grey-color joint-title">已参加人员</h3>
                <span class="time-data joint-user" id="join-num"><?php echo $activity_info['joined_num'] ; ?></span>
                <div class="float-right">
                    <a type="button" class="btn btn-default detail-btn-join" id="join">报名</a>
                    <a type="button" class="btn btn-default detail-btn-join" style="display: none" id="cancel">退出</a>
                </div>
                <hr class="bar-hr">

                <div class="friend-list-part my-margin-bottom" id="joined-list">
                    <div class="one-friend float-left one-joined-user">
                        <div class="float-left">
                            <a href="personalPage.html" class="homepage"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
                            <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            <div class="honor-part">
                                <span class="honor-title">勋章值：</span>
                                <div class="honor-data">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="float-right btn-add-part">
                            <a type="button" class="btn btn-default btn-add detail-user">查看详情</a>
                        </div>
                    </div>

                    <!--repeat-->
                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
                            <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            <div class="honor-part">
                                <span class="honor-title">勋章值：</span>
                                <div class="honor-data">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="float-right btn-add-part">
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
                            <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            <div class="honor-part">
                                <span class="honor-title">勋章值：</span>
                                <div class="honor-data">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="float-right btn-add-part">
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
                            <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            <div class="honor-part">
                                <span class="honor-title">勋章值：</span>
                                <div class="honor-data">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="float-right btn-add-part">
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
                            <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            <div class="honor-part">
                                <span class="honor-title">勋章值：</span>
                                <div class="honor-data">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="float-right btn-add-part">
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
                            <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            <div class="honor-part">
                                <span class="honor-title">勋章值：</span>
                                <div class="honor-data">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="float-right btn-add-part">
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>


</div>





<!--js-->
<?php $this->load->view('templates/plugin') ?>
<script src=<?php echo base_url("public/js/detailActivity.js") ?>></script>
</body>
</html>