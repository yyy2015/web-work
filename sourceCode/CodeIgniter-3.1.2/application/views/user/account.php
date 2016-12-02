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
    <link href=<?php echo base_url("public/css/sport.css")?> rel="stylesheet" >
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

            <!--<ul class="nav nav-sidebar">-->
            <!--<li><a href="sportAnalysis.html" class="white-color">运动分析</a></li>-->
            <!--<li><a href="sleepAnalysis.html" class="white-color">睡眠分析</a></li>-->
            <!--<li><a href="healthInfo.html" class="white-color">身体管理</a></li>-->
            <!--</ul>-->
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right">
            <h2 class="grey-color">用户信息</h2>
            <hr class="bar-hr">
            <div class="text-center">
                <span class="steps">yyy</span><span></span><span class="sort-title">年龄</span><a class="sort-data" >20</a>
            </div>
            <div class="detail-data text-center">
                <span class="step-next-title">注册时间：</span><span class="sport-data">2016-11-01 22：10</span><span class="common"></span>
                <span class="step-next-title">用户等级：</span><span class="sport-data">初级</span><span class="common"></span>
                <span class="step-next-title">用户积分：</span><span class="sport-data">30</span><span class="common"></span>
                <!--<span class="step-next-title">消耗热量：</span><span class="sport-data">5</span><span class="common">千卡</span>-->
                <button class="btn btn-default btn-editor" data-toggle="modal" data-target="#editor">编辑</button>
            </div>
            <hr class="bar-hr">


            <h2 class="grey-color">上传头像</h2>
            <hr class="bar-hr">
            <div class="input-group comment-part" style="width:60%;margin-left:20%;margin-right:20%">
                <input type="text" class="form-control comment-text" >
                <span class="input-group-addon btn-release">浏览</span>
            </div>
            <br><br>




            <div class="modal fade" id="editor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title grey-color" id="myModalLabel">编辑参数</h4>
                        </div>
                        <div class="modal-body">
                            <div >
                                <span class="modal-param">年龄：</span>
                                <input type="text" class="param-text">
                                <span class="common">岁</span>
                            </div>
                            <br>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-cancel" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary btn-confirm" data-dismiss="modal">确定</button>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>


</div>





<!--js-->
<?php $this->load->view('templates/plugin') ?>
</body>
</html>