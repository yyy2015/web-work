<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="the friend page of RunStyle, to look for friends and watch what friends are doing, as well as showing their own mood">
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

</head>
<body>
<!--fixed navbar-->
<?php $this->load->view('templates/navbar',$user_info); ?>



<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <?php $this->load->view('templates/side-navbar',$user_info) ?>

            <ul class="nav nav-sidebar">
                <li><a href="/friendController" class="white-color">好友动态</a></li>
                <li><a href="/friendController/goRelated" class="white-color">与我相关</a></li>
                <li><a href="/friendController/myMood" class="white-color">我的动态</a></li>
                <li><a href="/friendController/friendManage" class="white-color">好友管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 release-mood float-right">
            <h3 class="grey-color">消息</h3>
            <hr class="bar-hr">
<!--            <div class="related-bar">-->
<!--                <div class="float-left">-->
<!--                    <a href="personalPage.html"><img src=--><?php //echo base_url("public/image/user-header.JPG")?><!-- class="img-circle user-header-related"></a>-->
<!--                    <a class="color-grey user-name-related" href="personalPage.html">dxy</a>-->
<!--                    <span>评论了你的状态说说</span>-->
<!--                </div>-->
<!--                <div class="float-right">-->
<!--                    <a type="button" class="btn btn-default btn-detail">查看详情</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--            <hr class="related-hr">-->
<!---->
<!--            -->
<!--            <div class="related-bar">-->
<!--                <div class="float-left">-->
<!--                    <a href="personalPage.html"><img src=--><?php //echo base_url("public/image/user-header.JPG")?><!-- class="img-circle user-header-related"></a>-->
<!--                    <a class="color-grey user-name-related" href="personalPage.html">dxy</a>-->
<!--                    <span>赞了你的状态说说</span>-->
<!--                </div>-->
<!--                <div class="float-right">-->
<!--                    <a type="button" class="btn btn-default btn-detail">查看详情</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--            <hr class="related-hr">-->

            <div class="related-bar">
                <div class="float-left">
                    <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
                    <a class="color-grey user-name-related" href="personalPage.html">dxy</a>
                    <span>关注了你</span>
                </div>
                <div class="float-right">
                    <a type="button" class="btn btn-default btn-detail">关注TA&nbsp<i class="icon-plus"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr class="related-hr">

            <div class="related-bar">
                <div class="float-left">
                    <a href="personalPage.html"><img src=<?php echo base_url("public/image/example-header.jpg")?> class="img-circle user-header-related"></a>
                    <a class="color-grey user-name-related" href="personalPage.html">cuiods</a>
                    <span>关注了你</span>
                </div>
                <div class="float-right">
                    <a type="button" class="btn btn-default btn-detail " title="点击取消关注">已互关&nbsp<i class="icon-exchange"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr class="related-hr">
        </div>


    </div>


</div>


<!--js-->
<?php $this->load->view('templates/plugin') ?>
</body>
</html>