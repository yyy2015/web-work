<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="the home page of a health and sport management system called RunStyle">
    <meta name="author" content="yyy">
    <title>RunStyle</title>
    <!--css-->
    <link href="<?php echo base_url("/public/plugin/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("public/css/main.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("public/css/navigation.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("public/css/home.css") ?>" rel="stylesheet">
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
                    <li><a href=<?php echo base_url("loginController");?>>首页</a></li>
                    <li><a href=<?php echo base_url("sportController"); ?>>运动</a></li>
                    <li><a href=<?php echo base_url("friendController");?>>动态</a></li>
                    <li><a href=<?php echo base_url("activityController");?> >活动</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url("LoginController/login"); ?>">登录</a></li>
                    <li><a href="<?php echo site_url("LoginController/signUp"); ?>">注册</a></li>
                </ul>
            </div>


        </div>

    </nav>

    <!--introduction-->
    <section class="my-part1">
        <div class="container introduction-part">
            <div class="col-lg-6 first-part ">
                <img src="<?php echo base_url("public/image/sport1.jpg") ?>" class="float-right">
            </div>
            <div class="col-lg-6 first-part ">
                <h1 class="title-font">Your Life Can be Better</h1>
                <p class="text-font">对运动数据和睡眠情况进行记录和分析，第一时间掌握您的健康信息；
                    在活动模块可参加和发布活动，与好友一起健康生活；实时发布动态，查看好友动态，增加
                    您与好友的互动
                </p>
                <a type="button" class="btn btn-default btn-self text-font" href="<?php echo site_url("LoginController/signUp"); ?>" role="button">注册</a>
            </div>
        </div>

    </section>

    <!--js-->
   <?php $this->load->view('templates/plugin');?>


</body>

</html>
