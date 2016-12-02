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
    <!--<link href="../plugin/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href=<?php echo base_url("public/css/main.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/navigation.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/sport.css") ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/friend.css")?> rel="stylesheet" >
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
                <li><a href=<?php echo base_url('sportController/index') ?> class="white-color">运动分析</a></li>
                <li><a href=<?php echo base_url('sleepController/index') ?> class="white-color">睡眠分析</a></li>
                <li><a href=<?php echo base_url('healthController/index') ?> class="white-color">身体管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right">
            <h2 class="grey-color">今日已运动</h2>
            <hr class="bar-hr">
            <div class="text-center">
                <span class="steps"><?php echo $day_sport['day_step'] ?></span><span>步</span><span class="sort-title">日排名</span>
                <a href="#sort-part" class="sort-data" title="点击查看排行榜"><?php echo $day_sport['day_rank'] ?></a>
            </div>
            <div class="detail-data text-center">
                <span class="step-next-title">步行距离：</span><span class="sport-data"><?php echo $day_sport['walk_distance'] ?></span><span class="common">公里</span>
                <span class="step-next-title">跑步距离：</span><span class="sport-data"><?php echo $day_sport['run_distance'] ?></span><span class="common">公里</span>
                <span class="step-next-title">运动时间：</span><span class="sport-data"><?php echo $day_sport['day_sport_time'] ?></span><span class="common">小时</span>
                <span class="step-next-title">消耗热量：</span><span class="sport-data"><?php echo $day_sport['day_caloris_burn'] ?></span><span class="common">千卡</span>
            </div>
            <hr class="bar-hr">

<!--            <h3 class="grey-color">步频分析</h3>-->
<!--            <div id="day-line" class="sport-line"></div>-->
<!--            <hr class="bar-hr">-->

            <h2 class="grey-color">近一周运动</h2>
            <hr class="bar-hr">
            <div id="week-line" class="sport-line"></div>
            <hr class="bar-hr">

            <h2 class="grey-color">总运动量</h2>
            <hr class="bar-hr">
            <div class="total-data text-center">
                <span class="step-next-title">运动距离：</span><span class="sport-data"><?php echo $total_sport['total_distance'] ?></span><span class="common">公里</span>
                <span class="step-next-title">运动时间：</span><span class="sport-data"><?php echo $total_sport['total_time'] ?></span><span class="common">小时</span>
                <span class="step-next-title">消耗热量：</span><span class="sport-data"><?php echo $total_sport['total_caloris'] ?></span><span class="common">千卡</span>
                <span class="step-next-title">运动排名：</span><span class="sport-data"><?php echo $total_sport['total_rank']?></span><span class="common">名</span>
            </div>
            <hr class="bar-hr">

            <h2 id="sort-part" class="grey-color">排行榜</h2>
            <hr class="bar-hr">

            <div class="col-sm-6 float-left" >
                <h3 id="day-sort" class="grey-color">日运动排名</h3>
                <!--<hr class="bar-hr">-->
                <br>
                <div class="friend-list-part" >
                    <div id="day_sport_rank">
                        <div class="one-user float-left">
                            <div class="float-left">
                                <span class="rank-num">1</span>&nbsp&nbsp&nbsp
                                <a href="personalPage.html" class="personal-page"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-rank"></a>
                                <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                            </div>
                            <div class="float-right step-part">
                                <span class="distance">8.8</span><span>公里</span>
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
                <h3 id="total-sort" class="grey-color">总运动排名</h3>
                <!--<hr class="bar-hr">-->
                <br>

                <div class="friend-list-part">
                    <div id="total_sport_rank">
                        <div class="one-user float-left">
                        <div class="float-left">
                            <span class="rank-num">1</span>&nbsp&nbsp&nbsp
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-rank"></a>
                            <a class="color-grey user-name-related" href="personalPage.html">小易</a>
                        </div>
                        <div class="float-right step-part">
                            <span class="distance">8.8</span><span>公里</span>
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
<script src=<?php echo base_url("public/plugin/highchart/highcharts.js") ?>></script>
<script src=<?php echo base_url("public/plugin/highchart/exporting.js") ?>></script>
<script src=<?php echo base_url("public/plugin/bootstrap/js/bootstrap.min.js") ?>></script>
<script src=<?php echo base_url("public/js/sportAnalysis.js") ?>></script>


</body>
</html>