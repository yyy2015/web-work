<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login or Sign up</title>

    <!-- CSS -->
<!--    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">-->
    <link rel="stylesheet" href="<?php echo base_url("/public/plugin/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/public/plugin/Font-Awesome-3.2.1/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/public/css/login.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/public/css/loginStyle.css"); ?>">

</head>

<body>

<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>RunStyle</strong>&nbsp;&nbsp;Login</h1>
                    <div class="description">
                        <p>
                            Login to continue with RunStyle
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <div class = "errorLog">
                            <?php echo $log ; ?>
                        </div><br>
                        <?php echo form_open('loginController/validate_credentials'); ?>
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 goSignUp">
                    <h5 class="signUp">还没有账号?<a href="<?php echo base_url("LoginController/signUp"); ?>">去注册</a></h5>
                </div>
            </div>
        </div>
    </div>

</div>



</body>

</html>