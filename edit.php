<?php
include('header.php');
include('footer.php');
include('script.php');
include('connection.php');

if(mysqli_connect_errno)
{
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
                      <form  method="post" id="editform"  action="updateddata.php">
								<input type="hidden" name="id" value="<?php echo $id; ?>" id="id"  />
                       
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Name</label>
						     
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" name="name" id="name" class="form-control input-sm" value="<?php echo $name; ?>" onkeypress=" return ((event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 65 && event.charCode <= 90) || event.charCode == 8 || event.charCode == 32)"/>
                          </div><p id="name_error"> <br>
                          </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Username</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" name="username" id="username" class="form-control input-sm" value="<?php echo $username; ?>" onkeypress=" return ((event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 65 && event.charCode <= 90) || event.charCode == 8 || event.charCode == 32)"/>
                          </div><p id="username_error"> <br>
                          </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Email</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="email" name="email" id="email" class="form-control input-sm" value="<?php echo $email ?>"/>
                          </div>  <span id="email_error"></span><br>
                          </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                            <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Password</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="password" name="upassword" id="upassword" class="form-control input-sm" class="form-control input-sm" />
                          </div><p id="upassword_error"> <br>
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin" >
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Confirm Password</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9" >
                            <div class="controls">
                                     <input type="password" name="cpassword" id="cpassword" class="form-control input-sm" class="form-control input-sm" />
                          </div><p id="cpassword-error"> <br>
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Mobile Number</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" name="number" id="number" value="<?php echo $number ?>" class="form-control input-sm" />
                          </div><p id="number_error"> <br>
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin" >
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label" >Gender</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9 p-t-10 " >                                            
                            <input type="radio" name="gender" id="gender" value="male" <?php if($gender == "male") echo "checked" ?>>Male	
							<input type="radio" name="gender" id="gender" value="female" <?php if($gender == "female") echo "checked" ?>>Female
                          </div>	<p id="gender_error"> <br>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Date of Birth</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" name="dob" id="dob" value="<?php echo $dob ?>" class="form-control input-sm" /> 
                          </div><p id="dob_error">
                          </div>
                        </div>
                        
                        <div class="form-actions ">  
                          <div class="pull-right p-t-10 p-r-15">
                            <button type="button" class="btn btn-green btn-cons" id="submit1"><i class="icon-ok"> </i> Update</button>
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
  <script type="text/javascript" src="assets/js/validation.js" ></script>
</body>
</html>
