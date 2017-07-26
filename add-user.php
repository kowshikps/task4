<?php
include('header.php');
include('footer.php');
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
          <h3 class="semi-bold text-blue style-text">Add User</h3>
          <div class="row">
            <div class="col-md-6 p-l-5 p-r-5">
              <div class="grid simple">
                <div class="grid-body no-border"> 
                  <div class="row m-t-10">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <form action="update.php"  method="POST">
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3 col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Name</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" class="form-control input-sm" id="name" name="name" placeholder="eg: Ramesh Kumar" onkeypress=" return ((event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 65 && event.charCode <= 90) || event.charCode == 8 || event.charCode == 32)" />
                          </div>
                          </div>
                        </div>
                        <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin">
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label">Username</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
                            <div class="controls">
                            <input type="text" class="form-control input-sm" id="user_name" name="user_name" placeholder="eg: rameshkumar " onkeypress=" return ((event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 65 && event.charCode <= 90) || event.charCode == 8 || event.charCode == 32)" />
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
                            <input type="text" class="form-control input-sm" id="mobile_no" name="mobile_no"  placeholder="eg: 0123456789 " onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                          </div>
                          </div>
                        </div>
						<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12 no-padding no-margin" >
                          <label class="col-sm-3  col-md-3 col-lg-3 col-xs-3 text-black semi-bold p-t-10 control-label" >Gender</label>
                          <div class="col-sm-9 col-md-9 col-lg-9 col-xs-9 p-t-10 " >                            
                            <input type="radio" name="gender" id="gender" value="male" >Male	
							<input type="radio" name="gender" id="gender" value="female">Female
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