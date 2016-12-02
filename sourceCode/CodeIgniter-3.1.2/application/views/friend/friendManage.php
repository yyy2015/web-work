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
            <span id="login-user-name" style="display: none"><?php echo $user_info['username'] ?></span>

            <ul class="nav nav-sidebar">
                <li><a href="/friendController" class="white-color">好友动态</a></li>
                <li><a href="/friendController/goRelated" class="white-color">与我相关</a></li>
                <li><a href="/friendController/myMood" class="white-color">我的动态</a></li>
                <li><a href="/friendController/friendManage" class="white-color">好友管理</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 release-mood float-right">
            <h3 class="grey-color">查看用户</h3>
            <hr class="bar-hr">
            <div class="add-part">
                <div class="input-group search-part">
                    <input type="text" class="form-control search-text" placeholder="搜索想关注的人">
                    <span class="input-group-addon btn-search"><i class="icon-search icon-large"></i></span>
                </div>
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
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">关注&nbsp<i class="icon-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="page-jump float-right">
                    <a type="button" class="btn btn-default btn-page">上一页</a>
                    &nbsp<span>1</span>&nbsp
                    <a type="button" class="btn btn-default btn-page">下一页</a>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="my-friend-list">
                <h3 class="grey-color">我的关注</h3>
                <hr class="bar-hr">
                <div class="friend-list-part" id="following-list">
                    <div class="one-friend one-friend-following float-left">
                        <div class="float-left">
                            <a href="personalPage.html" class="homepage"><img src=<?php echo base_url("public/image/user-header.jpg")?> class="img-circle user-header-related"></a>
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
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">取消关注</i></a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">取消关注</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">取消关注</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">取消关注</a>
                        </div>
                    </div>

                    <div class="one-friend float-left">
                        <div class="float-left">
                            <a href="personalPage.html"><img src=<?php echo base_url("public/image/user-header.JPG")?> class="img-circle user-header-related"></a>
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
                            <a type="button" class="btn btn-default btn-add">取消关注</a>
                        </div>
                    </div>
                </div>

                <div class="page-jump float-right">
<!--                    <a type="button" class="btn btn-default btn-page">上一页</a>&nbsp&nbsp-->
<!--                    <a type="button" class="btn btn-default btn-page">下一页</a>-->
                </div>


            </div>


        </div>


    </div>


</div>


<!--js-->
<?php $this->load->view('templates/plugin') ?>
<script src=<?php echo base_url("public/js/friendManage.js") ?>></script>
</body>
</html>