
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>RO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="error-body no-top" style="background:url(assets/img/bg.jpg);background-size:cover;">
  <div class="container">
    <div class="row login-container">  
      <div class="col-md-4 pull-right" style="background:#fff; border-radius:10px;">
        <div class="col-md-12 text-center padding-10">
          <img src="assets/img/logo2x.png"/>
          <hr class="m-t-10 m-b-5"/>
        </div>
        <form id="login-form" class="login-form" action="login-check.php" method="post">
              <div class="row-fluid ">
                <h3>Login <span class="semi-bold">Here</span></h3>

                <div class="row  form-group form-row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon success">          
                      <span class="arrow"></span>
                      <i class="fa fa-align-justify"></i>
                      </span>
                      <input class="form-control" placeholder="someone@example.com" type="text" id="username" name="username">
                    </div>
					<p id="username_error"> <br>
                  </div>
                </div>
                <div class="row form-group form-row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon success">          
                      <span class="arrow"></span>
                      <i class="fa fa-lock" style="font-size:20px"></i>
                      </span>
                      <input class="form-control" placeholder="your password" type="password" id="password" name="password">
                    </div>
						<p id="password_error"> <br>
                  </div>
                </div>
              </div>
              <div class="row form-group p-t-10">
                <div class="control-group  col-md-12">
                  <div class="col-md-6 no-padding"><a href="#">Forgot Password</a></div>
                  <div classs="col-md-6">
                    <div class="checkbox checkbox check-success"> 
                      <input type="checkbox" id="checkbox1" value="1">
                      <label for="checkbox1">Keep me reminded </label>
                    </div>
                  </div>
                </div>
              </div>
          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-success btn-cons pull-right" type="button" id="submit2">Login</button>
            </div>
          </div>
        </form>
      </div>


    </div>
  </div>
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="assets/js/login.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/validation.js" ></script>
  <script>
  $(".select2").select2();
  </script>
</body>
</html>

