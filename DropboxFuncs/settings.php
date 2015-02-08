
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Setup Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container" >

      <form class="form-signin" action="settingScript.php" method="post">
        <h2 class="form-signin-heading">Please setup your cloud services</h2>
        <?php
          require_once "dropbox-sdk/Dropbox/autoload.php";
          use \Dropbox as dbx;

          include 'DropboxCon.php';

          if($_GET["drop"]==1){
          //if(1==1){
            $appInfo = dbx\AppInfo::loadFromJsonFile("app-info.json");
            $webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");
            $dbox = new DropboxCon();
            echo '<h2 class="form-signin-heading">Dropbox Setup</h2>';
            echo '<input type="text" name="uname" class="input-block-level" placeholder="Dropbox Email"><br>';
            echo '<a href="'.$dbox->initializeUser($webAuth).'" target="_blank">Click here to activate Dropbox</a>';
            echo '<br><br>';
            echo '<input type="text" name="uname" class="input-block-level" placeholder ="Copy Authentication code"><br>';

          }
          if($_GET["drive"]==1){
          //if(1==1){
            $appInfo = dbx\AppInfo::loadFromJsonFile("app-info.json");
            $webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");
            $dbox = new DropboxCon();
            echo '<h2 class="form-signin-heading">Google Drive Setup</h2>';
            echo '<input type="text" name="uname" class="input-block-level" placeholder="Gmail"><br>';
            echo '<a href="'.$dbox->initializeUser($webAuth).'" target="_blank">Click here to activate Gmail</a>';
            echo '<br><br>';
            echo '<input type="text" name="uname" class="input-block-level" placeholder ="Copy Authentication code"><br>';
            
          }
        ?>
        <button class="btn btn-large btn-primary" type="submit">Finish Setup</button>

      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
