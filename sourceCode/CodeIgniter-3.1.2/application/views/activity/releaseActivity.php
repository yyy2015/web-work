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
        <div class="col-sm-9 col-md-10 main-content float-right my-padding-bottom">
            <h3 class="grey-color">活动发布</h3>
            <hr class="bar-hr">

            <div class="activity-basic-info">
                <div class="detail-releaser-part line-part">
                    <i class="icon-bullhorn icon-2x icon-style"></i>
                    <span class="detail-title">活动名称：</span><input type="text" class="release-text">
                </div>
                <div class="detail-join-require line-part">
                    <i class="icon-time icon-2x icon-style"></i>
                    <span class="detail-title">开始时间：</span><input type="text" class="release-text">
                </div>
                <div class="detail-join-require line-part">
                    <i class="icon-time icon-2x icon-style"></i>
                    <span class="detail-title">结束时间：</span><input type="text" class="release-text">
                </div>
                <div class="detail-gift-part line-part">
                    <i class="icon-gift icon-2x icon-style"></i>
                    <span class="detail-title">勋章值：&nbsp&nbsp&nbsp&nbsp</span><input type="text" class="release-text">
                </div>
                <div class="detail-join-num line-part-special">
                    <i class="icon-hand-up icon-2x icon-style"></i>
                    <span class="detail-title">人数上限：&nbsp</span><input type="text" class="release-text">
                </div>
                <div class="detail-join-require line-part">
                    <i class="icon-hand-right icon-2x icon-style"></i>
                    <span class="detail-title">参加要求：</span><input type="text" class="release-text">
                </div>
                <div class="detail-description line-part">
                    <i class="icon-comment icon-2x icon-style"></i>
                    <span class="detail-title release-description">活动描述：</span>
                    <textarea class="release-text-area-here"></textarea>
                </div>
            </div>

            <div class="btn-release-activity float-right">
                <a type="button" class="btn btn-default btn-release-activity-style">发布</a>
            </div>
        </div>
    </div>


</div>





<!--js-->
<?php $this->load->view('templates/plugin') ?>
</body>
</html>