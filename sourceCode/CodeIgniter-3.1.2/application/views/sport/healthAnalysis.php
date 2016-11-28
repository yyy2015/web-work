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
    <!--<link href="../plugin/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href=<?php echo base_url("public/css/main.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/navigation.css");?> rel="stylesheet">
    <link href=<?php echo base_url("public/css/sport.css");?> rel="stylesheet">
</head>
<body>
<!--fixed navbar-->
<?php $this->load->view('templates/navbar'); ?>

<!--main content-->
<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
           <?php $this->load->view('templates/side-navbar',$user_info); ?>

            <ul class="nav nav-sidebar">
                <li><a href=<?php echo base_url("sportController/index");?> class="white-color">运动分析</a></li>
                <li><a href=<?php echo base_url("sportController/sleep");?> class="white-color">睡眠分析</a></li>
                <li><a href=<?php echo base_url("sportController/health")?> class="white-color">身体管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 main-content float-right">
            <h2 class="grey-color">身体参数</h2>
            <hr class="bar-hr">

            <div class="text-center">
                <span class="step-next-title">年龄</span><span class="sport-data">19</span><span class="common"></span>
                <span class="step-next-title">身高:</span><span class="sport-data">160</span><span class="common">cm</span>
                <span class="step-next-title">体重:</span><span class="sport-data">50</span><span class="common">kg</span>
                <span class="step-next-title">平均血压:</span><span class="sport-data">80</span><span class="common">mmHg</span>
                <span class="step-next-title">平均心率:</span><span class="sport-data">60</span><span class="common">BPM</span>

                <button class="btn btn-default btn-editor" data-toggle="modal" data-target="#editor">编辑</button>
            </div>

            <div class="text-center">
                <span class="health-title">BMI:</span><span class="BMI-data">19.5</span><span class="common"></span>
                <span class="health-title">范围：</span><span class="health-data">正常</span><span class="common"></span>
            </div>
            <hr class="bar-hr">

            <h3 class="grey-color">体重变化图</h3>
            <div id="weight-bar" class="sport-line"></div>



            <!--编辑身高体重等参数的模态框-->
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
                            <div >
                                <span class="modal-param">身高：</span>
                                <input type="text" class="param-text">
                                <span class="common">cm</span>
                                <span class="modal-param">体重：</span>
                                <input type="text" class="param-text">
                                <span class="common">kg</span>
                            </div>
                            <br>
                            <div >
                                <span class="modal-param">血压：</span>
                                <input type="text" class="param-text">
                                <span class="common">mmHg</span>
                                <span class="modal-param">心率：</span>
                                <input type="text" class="param-text">
                                <span class="common">BPM</span>
                            </div>


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

<?php $this->load->view('templates/plugin'); ?>
<script src=<?php echo base_url("public/plugin/highchart/highcharts.js");?>></script>
<script src=<?php echo base_url("public/plugin/highchart/exporting.js");?>></script>
<!--<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>-->
<!--<script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>-->
<script src=<?php echo base_url("public/js/healthInfo.js");?>></script>
</body>
</html>