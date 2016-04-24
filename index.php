<!doctype html>
<html class="no-js">

  <head>
    <meta charset="utf-8">
    <title>Code Camp Spots for FCC</title>
    <meta name="description" content="Using Angular to create a directory listing of User Portfolios">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" crossorigin="anonymous">

    <?php include_once('db/ports_mysql.php'); ?>
  </head>
  <body ng-app="portfolioApp">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <div class="header">
      <div class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#js-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#/">The Portfolios Directory</a>
          </div>
          <div class="collapse navbar-collapse" id="js-navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#/">Home</a></li>
              <li><a ng-href="#/about">About</a></li>
              <li><a ng-href="#/">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div ng-view=""></div>
    </div>
    <div class="footer">
      <div class="container">
        <p>By Daniel &amp; Justin</p>
      </div>
    </div>
    <script>
      !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
             (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
             r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
             }(window,document,'script','//www.google-analytics.com/analytics.js','ga');
             ga('create', 'UA-47462683-1');
             ga('send', 'pageview');
    </script>
    <?php /*
    */ ?>
    <script src="scripts/vendor.js"></script>
    <script src="scripts/scripts.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php /*
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    */ ?>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified Angular JavaScript -->
    <?php /*
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    */ ?>
    <script src="//ajax.googleapis.com/ajax/libs/angular_material/1.0.7/angular-material.min.js"></script>

  </body>
</html>
