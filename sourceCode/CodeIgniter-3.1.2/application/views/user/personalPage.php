<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="the sport page of RunStyle, to analysis sport and sleep data, to show friends' and personal information">
    <meta name="author" content="yyy">
    <title>RunStyle</title>
    <!--css-->
    <link href=<?php echo base_url("public/plugin/bootstrap/css/bootstrap.min.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/plugin/Font-Awesome-3.2.1/css/font-awesome.min.css")?> rel="stylesheet">
    <!--<link href="../plugin/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href=<?php echo base_url("public/css/main.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/navigation.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/sport.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/friend.css")?> rel="stylesheet" >
</head>
<body>
<!--fixed navbar-->
<?php $this->load->view('templates/navbar',$user_info); ?>
<span id="login-user-name" style="display: none"><?php echo $user_info['username'] ?></span>

<!--main content-->
<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <div class="header-part">
                <img id="header-url" class="img-rounded" style="width:150px" src=<?php echo $user['header_url'] ?> >
                <h5 id="username" class="white-color"><?php echo $user['username'] ?></h5>
                <hr class="bar-hr">
            </div>
            <a type="button" class="btn btn-default btn-add btn-add-header" id="add" style="margin-left:20%"><span id="add">关注</span><span>&nbsp&nbsp</span><i class="icon-plus"></i></a>
            <a type="button" class="btn btn-default btn-add btn-add-header" id="cancel" style="margin-left:20%;display:none"><span id="add">取消关注</span><span>&nbsp&nbsp</span></a>
            <br>
        </div>

        <div class="col-sm-9 col-md-10 main-content float-right">
            <h2 class="grey-color">TA的运动</h2>
            <hr class="bar-hr">
            <div class="text-center">
                累计运动&nbsp<span class="steps"><?php echo $sport_info['total_distance'] ?></span><span>公里</span>
            </div>
            <div class="detail-data text-center">
                <span class="step-next-title">运动时间：</span><span class="sport-data"><?php echo $sport_info['total_time'] ?></span><span class="common">小时</span>
                <span class="step-next-title">消耗热量：</span><span class="sport-data"><?php echo $sport_info['total_caloris'] ?></span><span class="common">千卡</span>
            </div>
            <hr class="bar-hr">

            <h2 class="grey-color">TA的关注</h2>
            <hr class="bar-hr">
            <div class="friend-list-part" id="following-list">
                <div class="one-friend one-friend-following float-left">
                    <div class="float-left">
                        <a href="personalPage.html" class="homepage"><img src=<?php echo base_url("public/image/user-header.jpg")?> class="img-circle user-header-related"></a>
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
                        <a href="personalPage.html"><img src="../image/user-header.JPG" class="img-circle user-header-related"></a>
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
                        <a href="personalPage.html"><img src="../image/user-header.JPG" class="img-circle user-header-related"></a>
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
                        <a href="personalPage.html"><img src="../image/user-header.JPG" class="img-circle user-header-related"></a>
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
                        <a href="personalPage.html"><img src="../image/user-header.JPG" class="img-circle user-header-related"></a>
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
                        <a href="personalPage.html"><img src="../image/user-header.JPG" class="img-circle user-header-related"></a>
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

            <div class="clearfix"></div>
            <hr class="bar-hr">


            <h2 class="grey-color">TA的动态</h2>
            <hr class="bar-hr">
            <div id = "mood-list">
                <div class="friend-mood-bar">
                    <div class="mood-header">
                        <div class="float-left user-header-name">
                            <a class="homepage"><img src="../image/user-header.JPG" class="img-circle user-header mood-user-header"></a>
                            <span class="user-name mood-user-name">小易</span>
                        </div>
                        <div class="release-time float-right ">
                            <span class="mood-release-time">2016/10/19 14:39</span>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="mood-content">
                        <p class="mood-text">今天跑了8万米，吼开心啊，大家跟我一起来用RunStyle呀，虽然还没做好，
                            但是我还是要支持的~手比爱心！（微笑脸）（微笑脸）（微笑脸）</p>
                    </div>

                    <div class="mood-foot">
                        <div class="icon-part">
                            <hr class="bar-hr">
                            <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                            <span class="item-line white-grey-color"></span>
                            <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        </div>
                        <div class="input-group comment-part">
                            <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                            <span class="input-group-addon btn-release">发表</span>
                        </div>
                        <br>
                    </div>
                </div>
                <br>
                <div class="friend-mood-bar">
                    <div class="mood-header">
                        <div class="float-left user-header-name">
                            <img src="../image/user-header.JPG" class="img-circle user-header">
                            <span class="user-name">小易</span>
                        </div>
                        <div class="release-time float-right">
                            <span>2016/10/19 14:39</span>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="mood-content">
                        <p class="mood-text">今天跑了8万米，吼开心啊，大家跟我一起来用RunStyle呀，虽然还没做好，
                            但是我还是要支持的~手比爱心！（微笑脸）（微笑脸）（微笑脸）</p>
                    </div>

                    <div class="mood-foot">
                        <div class="icon-part">
                            <hr class="bar-hr">
                            <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                            <span class="item-line white-grey-color"></span>
                            <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        </div>
                        <div class="input-group comment-part">
                            <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                            <span class="input-group-addon btn-release">发表</span>
                        </div>
                        <br>
                    </div>
                </div>
                <br>
                <div class="friend-mood-bar">
                    <div class="mood-header">
                        <div class="float-left user-header-name">
                            <img src="../image/user-header.JPG" class="img-circle user-header">
                            <span class="user-name">小易</span>
                        </div>
                        <div class="release-time float-right">
                            <span>2016/10/19 14:39</span>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="mood-content">
                        <p class="mood-text">今天跑了8万米，吼开心啊，大家跟我一起来用RunStyle呀，虽然还没做好，
                            但是我还是要支持的~手比爱心！（微笑脸）（微笑脸）（微笑脸）</p>
                    </div>

                    <div class="mood-foot">
                        <div class="icon-part">
                            <hr class="bar-hr">
                            <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                            <span class="item-line white-grey-color"></span>
                            <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        </div>
                        <div class="input-group comment-part">
                            <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                            <span class="input-group-addon btn-release">发表</span>
                        </div>
                        <br>
                    </div>
                </div>
                <br>
            </div>
            <hr class="bar-hr">


        </div>
    </div>


</div>





<!--js-->

<!--<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>-->
<!--<script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>-->
<?php $this->load->view('templates/plugin') ?>
<script src=<?php echo base_url("public/js/homepage.js") ?>></script>
</body>
</html>