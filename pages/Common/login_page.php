<?php
  if (isset($_POST['emailid']) && isset($_POST['password']))
  {
    $email = $_POST['emailid'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password))
    {
      check_user_login($email, $password);
    }
    else
    {
      $error_msg =  "Please enter both email and password.";
      echo  $error_msg;
    }
  }

  if (isset($_GET['msg']))
  {
    print_r($_GET['msg']);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="images/gif" sizes="16x16">
    <title>Utkal Placement Portal</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- jQuery 2.1.4 -->
    <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Utkal University</b> Placement Portal</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?php echo $current_file;?>" method="POST">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email ID" name="emailid">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <select>
              <option value="Student">Student</option>
              <option value="Admin">Admin</option>
            </select> 
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
          </div>
          <br>
          <div class="row">
            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <a href="register.php" class="btn btn-primary btn-block btn-flat" data-toggle="offcanvas" role="button">
                Register
              </a>
            </div><!-- /.col -->
          </div>
        </form>
<!--
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div>
-->
        <br>
        <a href="#">Forgot Password</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>

    <!-- Common Custom Javascript Files -->
    <script type="text/javascript" src="js/common.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
      $(document).ready(function(){
        console.log("Jquery is working @ login_page.php");
        //showInformation("Calling showInformation() @ login_page.php");
      })
    </script>

  </body>
</html>
