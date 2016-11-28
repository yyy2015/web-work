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
</head>
<body>
<!--fixed navbar-->
<?php $this->load->view('templates/navbar'); ?>

<!--main content-->
<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <div class="header-part">
                <img src=<?php echo base_url("public/image/header.jpg") ?> >
                <h5 class="white-color">找呀找呀找尾巴</h5>
                <hr class="bar-hr">
            </div>

            <ul class="nav nav-sidebar">
                <li><a href="sportAnalysis.html" class="white-color">运动分析</a></li>
                <li><a href="sleepAnalysis.html" class="white-color">睡眠分析</a></li>
                <li><a href="healthInfo.html" class="white-color">身体管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right">
            <h2 class="grey-color">今日已运动</h2>
            <hr class="bar-hr">
            <div class="text-center">
                <span class="steps">10400</span><span>步</span><span class="sort-title">日排名</span><a href="#sort-part" class="sort-data" title="点击查看排行榜">5</a>
            </div>
            <div class="detail-data text-center">
                <span class="step-next-title">步行距离：</span><span class="sport-data">5</span><span class="common">公里</span>
                <span class="step-next-title">跑步距离：</span><span class="sport-data">5</span><span class="common">公里</span>
                <span class="step-next-title">运动时间：</span><span class="sport-data">5</span><span class="common">分钟</span>
                <span class="step-next-title">消耗热量：</span><span class="sport-data">5</span><span class="common">千卡</span>
            </div>
            <hr class="bar-hr">

            <h3 class="grey-color">步频分析</h3>
            <div id="day-line" class="sport-line"></div>
            <hr class="bar-hr">

            <h2 class="grey-color">本周已运动</h2>
            <hr class="bar-hr">
            <div id="week-line" class="sport-line"></div>
            <hr class="bar-hr">

            <h2 class="grey-color">总运动量</h2>
            <hr class="bar-hr">
            <div class="total-data text-center">
                <span class="step-next-title">运动距离：</span><span class="sport-data">100</span><span class="common">公里</span>
                <span class="step-next-title">运动时间：</span><span class="sport-data">500</span><span class="common">分钟</span>
                <span class="step-next-title">消耗热量：</span><span class="sport-data">500</span><span class="common">千卡</span>
                <span class="step-next-title">运动排名：</span><span class="sport-data">10</span><span class="common">名</span>
            </div>
            <hr class="bar-hr">

            <h2 id="sort-part" class="grey-color">排行榜</h2>
            <hr class="bar-hr">


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