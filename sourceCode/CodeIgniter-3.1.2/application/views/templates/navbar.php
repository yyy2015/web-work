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
                <li><a class="active" href=<?php echo base_url('sportController'); ?>>运动</a></li>
                <li><a href=<?php echo base_url('friendController');?>>动态</a></li>
                <li><a href=<?php echo base_url('activityController');?> >活动</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url("LoginController/logout"); ?>">注销</a></li>
            </ul>
        </div>


    </div>

</nav>