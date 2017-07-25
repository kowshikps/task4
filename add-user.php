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
  <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/themes/simple/style.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/themes/simple/responsive.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body class="condense-menu">
<div class="header navbar navbar-inverse ">
    <div class="navbar-inner">
      <div class="header-seperation hidden-lg hidden-md">
        <ul class="nav pull-left notifcation-center round-menu" id="main-menu-toggle-wrapper" style="display:none">
          <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
            <div class="fa fa-bars text-white top-menu-toggle-dark" style="font-size:16px;"></div>
            </a> 
          </li>
        </ul>
        <a href="index.html"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="180" height="40"/></a>
        <ul class="nav pull-right notifcation-center">
          <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle="">
            <div class="iconset top-home"></div>
            </a> </li>
        </ul>
      </div>

      <div class="header-quick-nav" > 
        <a href="index.html"><img src="assets/img/logo.png" class="" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="237" height="60"/>
        </a>
        <div class="pull-left "> 
          <ul class="nav quick-section round-menu">
            <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
              <div class="fa fa-bars text-white top-menu-toggle-dark" style="font-size:16px;"></div>
              </a> 
            </li>
          </ul>

        </div>
         <div class="pull-right"> 
          <ul class="nav quick-section ">
                <li class="quicklinks">   
                <a href="#"  class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications"><div class="fa fa-bell" style="font-size:16px;"><span class="badge badge-important hide" id="chat-message-count">1</span></div></a></li>
                <div id="notification-list" style="display:none">
                  <div style="width:300px">
                    <div class="notification-messages info">
                      <div class="message-wrapper">
                        <div class="heading">
                          Plant Title
                        </div>
                        <div class="description">
                          Its Active Plant
                        </div>
                        <div class="date pull-left">
                          A min ago
                        </div>                    
                      </div>
                      <div class="clearfix"></div>                  
                    </div>  
                    <div class="notification-messages danger">
                      <div class="message-wrapper">
                        <div class="heading">
                          Plant Title
                        </div>
                        <div class="description">
                          Its Critical Plant
                        </div>
                        <div class="date pull-left">
                          2 min ago
                        </div>                    
                      </div>
                      <div class="clearfix"></div>
                    </div>  
                  </div>        
                </div>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
            </ul>
          <div class="chat-toggler">  
            <a href="#" class="dropdown-toggle" id="user-options" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
              <div class="user-details"> 
                <div class="username">
                  <span class="bold">Hi Kowshik </span>                  
                </div>            
              </div> 
              <div class="iconset top-down-arrow"></div>
            </a>  
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
              <li><a href="profile.html"> My Account</a>
              </li>
              <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
            </ul>
            <div class="profile-pic"> 
              <img src="assets/img/profiles/avatar_small.png"  alt="" data-src="assets/img/profiles/avatar_small.png" data-src-retina="assets/img/profiles/avatar_small2x.png" width="35" height="35" /> 
            </div>            
          </div>
          <ul class="nav quick-section">
                <li class="quicklinks"> <span class="h-seperate"></span></li>
                <li class="quicklinks">   
                <a href="#"><div class="fa fa-power-off" style="font-size:16px;"></div></a></li>
            </ul>
        </div>
      </div> 
    </div>
  </div>
  <div class="page-container row-fluid">
    <div class="page-sidebar mini" id="main-menu"> 
      <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper"> 
        <ul>  

        <li class=""> <a href="javascript:;"> <i class="fa fa-users"></i> <span class="title">User Management</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="add-user.html"> Add User </a> </li>
            <li > <a href="user-management.html"> Manage Users</a> </li>
          
          </ul>
        </li>
      </ul>
      </div>
    </div>
    <a href="update.php" class="scrollup">Scroll</a>
    <div class="page-content"> 
      <div id="portlet-config" class="modal hide">
        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button"></button>
          <h3>Widget Settings</h3>
        </div>
        <div class="modal-body"> Widget settings form goes here </div>
      </div>
      <div class="clearfix"></div>
      <div class="content">  
        <div class="page-title">	
          <h3 class="semi-bold text-blue style-text">Add User</h3>
          <div class="row">
            <div class="col-md-6 p-l-5 p-r-5">
              <div class="grid simple">
                <div class="grid-body no-border"> 
                  <div class="row m-t-10">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <form action="update.php"  method="post">
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Name</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" class="form-control input-sm" id="name" name="name" placeholder="eg: Ramesh Kumar">
                          </div>
                          </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Username</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" class="form-control input-sm" id="user_name" name="user_name" placeholder="eg: rameshkumar ">
                          </div>
                          </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Email</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="email" class="form-control input-sm" id="email" name="email"  placeholder="eg: xyz@example.com ">
                          </div>
                          </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Password</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="password" class="form-control input-sm" id="password" name="password" >
                          </div>
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin" >
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Confirm Password</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9" >
                            <div class="controls">
                            <input type="password" class="form-control input-sm" id="c_password" name="c_password"  >
                          </div>
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Mobile Number</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="email" class="form-control input-sm" id="mobile_no" name="mobile_no"  placeholder="eg: 0123456789 ">
                          </div>
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin" >
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label" >Gender</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9 p-t-10 " >                            
                            <input type="radio" name="gender" id="gender" >Male	
							<input type="radio" name="gender" id="gender">Female
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Date of Birth</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" class="form-control input-sm" id="dob" name="dob" >
                          </div>
                          </div>
                        </div>
                        
                        <div class="form-actions ">  
                          <div class="pull-right p-t-10 p-r-15">
                            <button type="submit" class="btn btn-green btn-cons"  ><i class="icon-ok"></i> Add</button>
                            <button type="button" class="btn btn-white btn-cons">Cancel</button>
                          </div>
                        </div>
                      </form>


                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>		
        </div>
      </div>
    </div>
  </div>
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
  <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
  <script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
  <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
  <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
  <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
  <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
  <script src="assets/js/core.js" type="text/javascript"></script> 
</body>
</html>