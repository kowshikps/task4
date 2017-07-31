<?php
session_start(); // To start session
include('header.php'); //Includes header file
include('sidebar.php'); //Includes sidebar code
include('connection.php');// database connection is established
include('script.php');
if (!isset($_SESSION['username'])) {
    print('<Script>alert(" You have not logged in.");</script>');
    print "<script>";
    print "self.location='login.php';";
    print "</script>";
}
if (mysqli_connect_errno) {
    echo "error";
}
$primaryId = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM udetails where id= " . $primaryId);
$row = mysqli_fetch_array($query);
$id = $row['id'];
$name = $row['name'];
$username = $row['username'];
$number = $row['number'];
$email = $row['email'];
$gender = $row['gender'];
$dob = $row['dob'];
?>
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
        <a href="#" class="scrollup">Scroll</a>
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
                    <h3 class="semi-bold text-blue style-text">Edit User</h3>
                    <div class="row">
                        <div class="col-md-6 p-l-5 p-r-5">
                            <div class="grid simple">
                                <div class="grid-body no-border"> 
                                    <div class="row m-t-10">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <form  method="post" id="editform"  action="edit-backend.php">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>" id="id"  />

                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                                                    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Name</label>

                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                                                        <div class="controls">
                                                            <input type="text" name="name" id="name" class="form-control input-sm" value="<?php echo $name; ?>" onkeypress=" return ((event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 65 && event.charCode <= 90) || event.charCode == 8 || event.charCode == 32)"/>
                                                        </div><span style="color:red;" id="name_error"> </span> </span> <br>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                                                    <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Username</label>
                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                                                        <div class="controls">
                                                            <input type="text" name="username" id="username" class="form-control input-sm" value="<?php echo $username; ?>" onkeypress=" return ((event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 65 && event.charCode <= 90) || event.charCode == 8 || event.charCode == 32)"/> 
                                                        </div><span style="color:red;" id="username_error"> </span> <br>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                                                    <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Email</label>
                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                                                        <div class="controls">
                                                            <input type="email" name="email" id="email" class="form-control input-sm" value="<?php echo $email ?>"/>
                                                        </div>  <span style="color:red;" id="email_error"> </span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                                                    <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Password</label>
                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                                                        <div class="controls">
                                                            <input type="password" name="upassword" id="upassword" class="form-control input-sm" class="form-control input-sm" />
                                                        </div><span style="color:red;" id="upassword_error"> </span> <br>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin" >
                                                    <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Confirm Password</label>
                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9" >
                                                        <div class="controls">
                                                            <input type="password" name="cpassword" id="cpassword" class="form-control input-sm" class="form-control input-sm" />
                                                        </div><span style="color:red;" id="cpassword_error"> </span> <br>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                                                    <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Mobile Number</label>
                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                                                        <div class="controls">
                                                            <input type="text" name="number" id="number" value="<?php echo $number ?>" class="form-control input-sm"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                                        </div><span style="color:red;" id="number_error"> <span> <br>
                                                                </div>
                                                                </div>
                                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin" >
                                                                    <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label" >Gender</label>
                                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9 p-t-10 " >                                            
                                                                        <input type="radio" name="gender" id="gender" value="male" <?php if ($gender == "male") echo "checked" ?>>Male	
                                                                        <input type="radio" name="gender" id="gender" value="female" <?php if ($gender == "female") echo "checked" ?>>Female
                                                                    </div><span style="color:red;" id="gender_error"> </span> <br>
                                                                </div>
                                                                <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                                                                    <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Date of Birth</label>
                                                                    <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                                                                        <div class="controls">
                                                                            <input type="text" name="dob" id="dob" value="<?php echo $dob ?>" class="form-control input-sm" /> 
                                                                        </div><span style="color:red;" id="dob_Error"> </span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-actions ">  
                                                                    <div class="pull-right p-t-10 p-r-15">
                                                                        <button type="button" class="btn btn-green btn-cons" id="submit1"><i class="icon-ok"> </i> Update</button>
                                                                        <button type="button" class="btn btn-green btn-cons" id="cancel1"><i class="icon-ok"> </i> Cancel</button>
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
</body>
</html>
