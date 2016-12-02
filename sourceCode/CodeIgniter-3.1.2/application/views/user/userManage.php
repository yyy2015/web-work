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
                <li><a >管理模块</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url("LoginController/logout"); ?>">注销</a></li>
            </ul>
        </div>
    </div>

</nav>



<div class="container sport-part">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar side-navigation float-left">
            <div class="header-part">
                <img src=<?php echo base_url("public/image/header.jpg");?>>
                <h5 class="white-color">administrator</h5>
                <hr class="bar-hr">
            </div>

            <ul class="nav nav-sidebar">
                <li><a href=<?php echo base_url("/userController");?> class="white-color">用户管理</a></li>
                <li><a href=<?php echo base_url("/userController/activityManage");?> class="white-color">活动管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 release-mood float-right">
            <h3 class="grey-color">所有用户</h3>
            <hr class="bar-hr">
            <div class="add-part">
                <br>
                <div class="friend-list-part" id="user-list-start">
                    <div class="one-friend one-user-look float-left">
                        <div class="float-left">
                            <a href="personalPage.html" class="homepage"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG");?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">删除&nbsp</a>
                        </div>
                    </div>
                </div>

                <div class="page-jump float-right">
                    <a type="button" class="btn btn-default btn-page">上一页</a>&nbsp&nbsp
                    &nbsp<span>1</span>&nbsp&nbsp
                    <a type="button" class="btn btn-default btn-page">下一页</a>
                </div>
            </div>

            <div class="clearfix"></div>


        </div>


    </div>


</div>


<!--js-->
<?php $this->load->view('templates/plugin') ?>
<script src=<?php echo base_url("public/js/userManage.js") ?>></script>
</body>
</html>