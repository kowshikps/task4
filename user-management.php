
<?php
include "header.php";
include "footer.php";
include('connection.php');
include('script.php');
if(mysqli_connect_errno)
{
	echo "error";
}
$query = mysqli_query($connection, "SELECT * FROM udetails order by ID ");
$row = mysqli_fetch_array($query);


 ?>


  


  <a href="#" class="scrollup">Scroll</a>
  <div class="page-content"> 
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
      <div class="page-title">	
        <h3 class="semi-bold text-blue style-text">User Management</h3>
      </div>
      <div class="row-fluid">
         <a class="btn btn-green" href="add-user.php"><i class="fa fa-plus-circle"></i> Add User </a>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="grid simple no-margin no-padding">
          <div class="grid-body no-margin no-padding " >
            <table class="table table-bordered" id="example">
			
              <thead>
                <tr>
                  <th class="text-center bg-blue text-cap v-align-middle bold">ID</th>
                  <th class="text-center bg-blue text-cap v-align-middle bold">Name</th>
                  <th class="text-center bg-blue text-cap v-align-middle bold">User Name</th>
                  <th class="text-center bg-blue text-cap v-align-middle bold">Mobile Number</th>
                  <th class="text-center bg-blue text-cap v-align-middle bold">Email ID</th>
                  <th class="text-center bg-blue text-cap v-align-middle bold">Actions</th>
                </tr>
              </thead>
              <tbody>
			  <?php
          while($row=  mysqli_fetch_array($query))
		  {
									$id = $row['id'];
                                    $name = $row['name'];
                                    $username = $row['username'];
                                    $number = $row['number'];
                                    $email = $row['email'];
                                
			  ?>
            <tr> 
                  <td><?php echo $row['id']; ?></td>
				  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['number']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td class="text-center">
                    <div class="dropdown">
                      <button id="dLabel" type="button" class="btn btn-info btn-mini" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li><a href="#" data-toggle="modal" data-target="#assignmodal">Assign</a></li>
                        <li><a href=edit.php?id=<?php echo $id; ?> >Edit</a></li>
                        <li><a href="#">Delete</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
				</form>
				<?php
				}
				?>
                
	
              </tbody>
            </table>
            <div class="col-md-12">
                        <div class="modal" id="assignmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header no-margin no-padding b-b">
                                <div class="row">
                                  <div class="col-md-8 p-l-25">
                                    <h4 class="semi-bold text-left style-text">Assign User</h4>
                                  </div>
                                  <div class="col-md-4 m-t-10 text-right"> 
                                    
                                    <i title="Close" alt="Close" class='fa fa-2x fa-times close p-l-10 p-r-10' data-dismiss="modal"></i>
                                                                                            
                                  </div>
                                </div>
                              </div>
                              <div class="modal-body white">
                                <div class="row">
                                  <div class="col-md-10 col-md-offset-1">
                                     <form action="#">
                      <div class="form-group">
                        <label class="col-sm-4 text-black semi-bold p-t-10 control-label">Customer Group</label>
                        <div class="col-sm-8">
                          <div class="controls">
                            <select id="source1" multiple style="width:100%">
                              <option style='color:black;' value='1'>Group 1</option>
                              <option style='color:black;' value='2'>Group 2</option>                            
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 text-black semi-bold p-t-10 control-label">Customer</label>
                        <div class="col-sm-8">
                          <div class="controls">
                            <select id="source2" multiple style="width:100%">
                              <option style='color:black;' value='1'>Abc INC</option>
                              <option style='color:black;' value='2'>Def INC</option>
                              <option style='color:black;' value='3'>Ghi INC</option>
                              <option style='color:black;' value='4'>Jkl INC</option>
                              <option style='color:black;' value='5'>Mno INC</option>
                              <option style='color:black;' value='6'>Pqr INC</option>
                              <option style='color:black;' value='7'>Stu INC</option>
                              <option style='color:black;' value='8'>Vwx INC</option>
                              <option style='color:black;' value='9'>Xyz INC</option>
                              <option style='color:black;' value='10'>Bcd INC</option>
                              <option style='color:black;' value='11'>Dab INC</option>                         
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 text-black semi-bold p-t-10 control-label">Plant</label>
                        <div class="col-sm-8">
                          <div class="controls">
                            <select id="source3" multiple style="width:100%">
                              <option value="1">Plant 1</option>
                              <option value="2">Plant 2</option>
                              <option value="3">Plant 3</option>
                              <option value="4">Plant 4</option>
                              <option value="5">Plant 5</option>
                              <option value="6">Plant 6</option>                         
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-4 text-black semi-bold p-t-10 control-label">User</label>
                        <div class="col-sm-8">
                          <div class="controls">
                            <select id="source4" style="width:100%">
                              <option value="">Select User</option>
                              <option value="1">user1</option>
                              <option value="2">user2</option>
                              <option value="3">user3</option>
                              <option value="4">user4</option>
                              <option value="5">user5</option>
                              <option value="6">user6</option>                        
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions ">  
                        <div class="pull-right p-t-10 p-r-15">
                          <button type="submit" class="btn btn-green btn-cons"><i class="icon-ok"></i> Assign User</button>
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
<script src="assets/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<script src="assets/js/datatables.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script>
$("#source").select2();
$("#source1").select2();
$("#source2").select2();
$("#source3").select2();
$("#source4").select2();


</script>

</body>
</html>
}