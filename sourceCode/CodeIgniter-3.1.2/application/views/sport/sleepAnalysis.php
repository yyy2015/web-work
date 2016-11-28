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
</head>
<body>
<!--fixed navbar-->
<?php $this->load->view('templates/navbar'); ?>

<!--main content-->
<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <div class="header-part">
                <img src=<?php echo base_url("public/image/header.jpg")?> >
                <h5 class="white-color">找呀找呀找尾巴</h5>
                <hr class="bar-hr">
            </div>

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
                <span class="steps">7</span><span>小时</span><span class="steps">23</span><span>分钟</span>
                <span class="sort-title">夜排名</span><a href="#sleep-sort-part" class="sort-data" title="点击查看排行榜">5</a>
            </div>
            <div class="detail-data text-center">
                <span class="step-next-title">深度睡眠：</span><span class="sport-data">3</span><span >小时</span><span class="sport-data">13</span><span class="common">分钟</span>
                <span class="step-next-title">浅度睡眠：</span><span class="sport-data">4</span><span >小时</span><span class="sport-data">10</span><span class="common">分钟</span>
                <span class="step-next-title">能量补充：</span><span class="sport-data">500</span><span class="common">千卡</span>
                <span class="step-next-title">睡眠质量：</span><span class="sport-data">A</span>
            </div>
            <hr class="bar-hr">
            <h3 class="grey-color">睡眠曲线</h3>
            <div id="to-night-line" class="sport-line"></div>
            <hr class="bar-hr">

            <h2 class="grey-color">周睡眠</h2>
            <div id="week-night-line" class="sport-line"></div>
            <hr class="bar-hr">

            <h2 class="grey-color">总睡眠</h2>
            <div class="total-data text-center">
                <span class="step-next-title">深度睡眠：</span><span class="sport-data">20</span><span >天</span><span class="sport-data">13</span><span class="common">小时</span>
                <span class="step-next-title">浅度睡眠：</span><span class="sport-data">34</span><span >天</span><span class="sport-data">11</span><span class="common">小时</span>
                <span class="step-next-title">能量补充：</span><span class="sport-data">500万</span><span class="common">千卡</span>
                <span class="step-next-title">质量排名：</span><span class="sport-data">12</span>
            </div>
            <hr class="bar-hr">

            <h2 id="sleep-sort-part" class="grey-color">排行榜</h2>


        </div>
    </div>


</div>





<!--js-->
<script src="../plugin/jquery/jquery-3.1.1.min.js"></script>
<!--<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>-->
<!--<script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>-->
<script src="../plugin/highchart/highcharts.js"></script>
<script src="../plugin/highchart/exporting.js"></script>
<script src="../js/sportAnalysis.js"></script>
<script src="../plugin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>