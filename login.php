<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Login: E-Payslip</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- jQuery libs -->
        <script  type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script  type="text/javascript" src="js/jquery-ui-1.7.custom.min.js"></script>

        <script  type="text/javascript" src="js/jquery-search.js"></script>
        <!-- CSS code from Bootply.com editor -->

        <style type="text/css">
        .navbar-static-top {
          margin-bottom:20px;
        }

        i {
          font-size:16px;
        }

        .nav > li > a {
          color:#787878;
        }

        footer {
          margin-top:20px;
          padding-top:20px;
          padding-bottom:20px;
          background-color:#efefef;
        }

        /* count indicator near icons */
        .nav>li .count {
          position: absolute;
          bottom: 12px;
          right: 6px;
          font-size: 10px;
          font-weight: normal;
          background: rgba(51,200,51,0.55);
          color: rgba(255,255,255,0.9);
          line-height: 1em;
          padding: 2px 4px;
          -webkit-border-radius: 10px;
          -moz-border-radius: 10px;
          -ms-border-radius: 10px;
          -o-border-radius: 10px;
          border-radius: 10px;
        }

        /* indent 2nd level */
        .list-unstyled li > ul > li {
           margin-left:10px;
           padding:8px;
        }
        </style>
        <link href="css/signin.css" rel="stylesheet">
    </head>
    
<!-- HTML code from Bootply.com editor -->    
<body>        

<!-- Main -->
<div class="container">

	<div align="center"><img src="images/esp_login.png"></div>
    <div class="row">

        <form class="form-signin" role="form" action="index.php?method=token" method="post">
        <center>Please Login to Continue</center>
        <input type="text" class="form-control" name="nogaji" placeholder="Employee No" required autofocus>
        <input type="password" class="form-control" name="nokp" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        
    </div>
</div>

</body>
</html>    