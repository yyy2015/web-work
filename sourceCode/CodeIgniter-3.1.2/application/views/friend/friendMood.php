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
            <div class="text-center release-part">
                <textarea class="release-textarea" wrap="physical" placeholder="说点什么吧..."></textarea>
                <button class="btn btn-default btn-release">发布</button>
            </div>
        </div>

        <div class="col-sm-9 col-md-10 friend-all-mood float-right">
            <h3 class="grey-color">好友动态</h3>
            <hr class="bar-hr">
            <div class="friend-mood-bar">
                <div class="mood-header">
                    <div class="float-left user-header-name">
                        <img src=<?php echo base_url("public/image/header.jpg")?> class="img-circle user-header">
                        <span class="user-name">yyy</span>
                    </div>
                    <div class="release-time float-right">
                        <span>2016/11/30 14:39</span>
                    </div>
                </div>
                <br><br><br>
                <div class="mood-content">
                    <p class="mood-text">开心的每一天，运动运动运动！</p>
                </div>

                <div class="mood-foot">
                    <div class="icon-part">
                        <hr class="bar-hr">
                        <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        <span class="item-line white-grey-color"></span>
                        <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                    </div>
                    <div class="input-group comment-part">
                        <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                        <span class="input-group-addon btn-release">发表</span>
                    </div>
                    <br>
                </div>
            </div>
            <br>

            <!--重复-->
            <div class="friend-mood-bar">
                <div class="mood-header">
                    <div class="float-left user-header-name">
                        <img src=<?php echo base_url("public/image/example-header.JPG")?> class="img-circle user-header">
                        <span class="user-name">cuiods</span>
                    </div>
                    <div class="release-time float-right">
                        <span>2016/11/28 15:40</span>
                    </div>
                </div>
                <br><br><br>
                <div class="mood-content">
                    <p class="mood-text">我爱运动，运动使我快乐无比</p>
                </div>
                <div class="mood-foot">
                    <div class="icon-part">
                        <hr class="bar-hr">
                        <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        <span class="item-line white-grey-color"></span>
                        <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                    </div>
                    <div class="input-group comment-part">
                        <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                        <span class="input-group-addon btn-release">发表</span>
                    </div>
                    <br>
                </div>
            </div>
            <br>

            <div class="friend-mood-bar">
                <div class="mood-header">
                    <div class="float-left user-header-name">
                        <img src=<?php echo base_url("public/image/header.jpg")?> class="img-circle user-header">
                        <span class="user-name">harry</span>
                    </div>
                    <div class="release-time float-right">
                        <span>2016/11/20 8:00</span>
                    </div>
                </div>
                <br><br><br>
                <div class="mood-content">
                    <p class="mood-text">又是早起奋斗的一天，生活如此多娇~~~</p>
                </div>
                <div class="mood-foot">
                    <div class="icon-part">
                        <hr class="bar-hr">
                        <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        <span class="item-line white-grey-color"></span>
                        <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                    </div>
                    <div class="input-group comment-part">
                        <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                        <span class="input-group-addon btn-release">发表</span>
                    </div>
                    <br>
                </div>
            </div>
            <br>

            <div class="friend-mood-bar">
                <div class="mood-header">
                    <div class="float-left user-header-name">
                        <img src=<?php echo base_url("public/image/header.jpg")?> class="img-circle user-header">
                        <span class="user-name">yyy</span>
                    </div>
                    <div class="release-time float-right">
                        <span>2016/11/20 9:45</span>
                    </div>
                </div>
                <br><br><br>
                <div class="mood-content">
                    <p class="mood-text">元气的一天！吼</p>
                </div>

                <div class="mood-foot">
                    <div class="icon-part">
                        <hr class="bar-hr">
                        <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        <span class="item-line white-grey-color"></span>
                        <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                    </div>
                    <div class="input-group comment-part">
                        <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                        <span class="input-group-addon btn-release">发表</span>
                    </div>
                    <br>
                </div>
            </div>
            <br>

            <div class="friend-mood-bar">
                <div class="mood-header">
                    <div class="float-left user-header-name">
                        <img src=<?php echo base_url("public/image/header.jpg")?> class="img-circle user-header">
                        <span class="user-name">yyy</span>
                    </div>
                    <div class="release-time float-right">
                        <span>2016/10/30 12：30</span>
                    </div>
                </div>
                <br><br><br>
                <div class="mood-content">
                    <p class="mood-text">管住嘴，迈开腿，向前计划梆梆梆</p>
                </div>

                <div class="mood-foot">
                    <div class="icon-part">
                        <hr class="bar-hr">
                        <a class="icon-thumbs-up icon-large white-grey-color thumb" ></a><span class="white-grey-color">&nbsp赞(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                        <span class="item-line white-grey-color"></span>
                        <a class="icon-comment icon-large white-grey-color comment" ></a><span class="white-grey-color">&nbsp评论(</span><span class="white-grey-color">0</span><span class="white-grey-color">)</span>
                    </div>
                    <div class="input-group comment-part">
                        <input type="text" class="form-control comment-text" placeholder="我也说一句...">
                        <span class="input-group-addon btn-release">发表</span>
                    </div>
                    <br>
                </div>
            </div>
            <br>



        </div>
    </div>


</div>


<!--js-->
<?php $this->load->view('templates/plugin') ?>
</body>
</html>