<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="the sport page of RunStyle, to analysis sport and sleep data, to show friends' and personal information">
    <meta name="author" content="yyy">
    <title>RunStyle</title>
    <!--css-->
    <link href=<?php echo base_url("public/plugin/bootstrap/css/bootstrap.min.css")?> rel="stylesheet">
    <!--<link href="../plugin/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href=<?php echo base_url("public/css/main.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/navigation.css")?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/sport.css")?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/friend.css")?> rel="stylesheet" >
</head>
<body>
<!--fixed navbar-->
<?php $this->load->view('templates/navbar'); ?>

<!--main content-->
<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <?php $this->load->view('templates/side-navbar',$user_info) ?>

            <ul class="nav nav-sidebar">
                <li><a href=<?php echo base_url("sportController/index");?> class="white-color">运动分析</a></li>
                <li><a href=<?php echo base_url("sleepController/index");?> class="white-color">睡眠分析</a></li>
                <li><a href=<?php echo base_url("healthController/index")?> class="white-color">身体管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right">
            <h2 class="grey-color">昨日睡眠</h2>
            <hr class="bar-hr">
            <div class="text-center">
                <span class="steps"><?php echo $night_sleep['hour'] ?></span><span>小时</span><span class="steps"><?php echo $night_sleep['minute'] ?></span><span>分钟</span>
                <span class="sort-title">夜排名</span><a href="#sleep-sort-part" class="sort-data" title="点击查看排行榜"><?php echo $night_sleep['night_rank'] ?></a>
            </div>
            <div class="detail-data text-center">
                <span class="step-next-title">深度睡眠：</span><span class="sport-data"><?php echo $night_sleep['deep_hour'] ?></span><span >小时</span><span class="sport-data"><?php echo $night_sleep['deep_minute'] ?></span><span class="common">分钟</span>
                <span class="step-next-title">浅度睡眠：</span><span class="sport-data"><?php echo $night_sleep['loose_hour'] ?></span><span >小时</span><span class="sport-data"><?php echo $night_sleep['loose_minute'] ?></span><span class="common">分钟</span>
                <span class="step-next-title">能量补充：</span><span class="sport-data"><?php echo $night_sleep['supple_caloris'] ?></span><span class="common">千卡</span>
                <span class="step-next-title">睡眠质量：</span><span class="sport-data"><?php echo $night_sleep['level'] ?></span>
            </div>
            <hr class="bar-hr">
<!--            <h3 class="grey-color">睡眠曲线</h3>-->
<!--            <div id="to-night-line" class="sport-line"></div>-->
<!--            <hr class="bar-hr">-->

            <h2 class="grey-color">周睡眠</h2>
            <div id="week-night-line" class="sport-line"></div>
            <hr class="bar-hr">

            <h2 class="grey-color">总睡眠</h2>
            <div class="total-data text-center">
                <span class="step-next-title">深度睡眠：</span><span class="sport-data"><?php echo $total_sleep['deep_day'] ?></span><span >天</span><span class="sport-data"><?php echo $total_sleep['deep_hour'] ?></span><span class="common">小时</span>
                <span class="step-next-title">浅度睡眠：</span><span class="sport-data"><?php echo $total_sleep['loose_day'] ?></span><span >天</span><span class="sport-data"><?php echo $total_sleep['loose_hour'] ?></span><span class="common">小时</span>
                <span class="step-next-title">能量补充：</span><span class="sport-data"><?php echo $total_sleep['supple_caloris'] ?>万</span><span class="common">千卡</span>
                <span class="step-next-title">质量排名：</span><span class="sport-data"><?php echo $total_sleep['total_rank'] ?></span>
            </div>
            <hr class="bar-hr">

            <h2 id="sleep-sort-part" class="grey-color">排行榜</h2>

            <div class="col-sm-6 float-left" >
                <h3 id="day-sort" class="grey-color">当夜睡眠排名</h3>
                <!--<hr class="bar-hr">-->
                <br>
                <div class="friend-list-part" >
                    <div id="night_sleep_rank">
                        <div class="one-user float-left">
                            <div class="float-left">
                                <span class="rank-num">1</span>&nbsp&nbsp&nbsp
                                <a href="personalPage.html" class="personal-page"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-rank"></a>
                                <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            </div>
                            <div class="float-right step-part">
                                <span class="distance night-hour">8.8</span><span>h&nbsp</span><span class="distance night-minute">8.8</span><span>min</span>
                            </div>
                        </div>
                    </div>

                    <div class="page-jump float-right little-left-down">
                        <a type="button" class="btn btn-default btn-page " id="last-page-day">上一页</a>
                        &nbsp&nbsp<span id="day-page-num">1</span>&nbsp&nbsp
                        <a type="button" class="btn btn-default btn-page " id="next-page-day">下一页</a>
                    </div>

                </div>
            </div>

            <div class="col-sm-6 float-right">
                <h3 id="total-sort" class="grey-color">总睡眠排名</h3>
                <!--<hr class="bar-hr">-->
                <br>

                <div class="friend-list-part">
                    <div id="total_sleep_rank">
                        <div class=" one-user one-user-total float-left">
                            <div class="float-left">
                                <span class="rank-num">1</span>&nbsp&nbsp&nbsp
                                <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-rank"></a>
                                <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            </div>
                            <div class="float-right step-part">
                                <span class="distance total-day">8.8</span><span>d&nbsp</span><span class="distance total-hour">8.8</span><span>h</span>
                            </div>
                        </div>
                    </div>

                    <div class="page-jump float-right little-left-down">
                        <a type="button" class="btn btn-default btn-page" id="last-page-total">上一页</a>
                        &nbsp&nbsp<span id="total-page-num">1</span>&nbsp&nbsp
                        <a type="button" class="btn btn-default btn-page" id="next-page-total">下一页</a>
                    </div>

                </div>
            </div>


        </div>
    </div>


</div>





<!--js-->
<script src=<?php echo base_url("public/plugin/jquery/jquery-3.1.1.min.js") ?>></script>
<script src=<?php echo base_url("public/plugin/bootstrap/js/bootstrap.min.js") ?>></script>
<!--<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>-->
<!--<script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>-->
<script src=<?php echo base_url("public/plugin/highchart/highcharts.js");?>></script>
<script src=<?php echo base_url("public/plugin/highchart/exporting.js");?>></script>
<script src=<?php echo base_url("public/js/sleepAnalysis.js");?>></script>
</body>
</html>