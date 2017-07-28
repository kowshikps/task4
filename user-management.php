<?php
session_start();
include "header.php";
include('sidebar.php');
include('script.php');
include('connection.php'); // Database connection 
if (!isset($_SESSION['username'])) { //Session is set to check if only authorised users are trying to access this 
    print('<Script>alert(" You have not logged in.");</script>');
    print "<script>";
    print "self.location='login.php';";
    print "</script>";
}
$query = mysqli_query($connection, "SELECT * FROM udetails where soft_delete <> 1 order by created_at desc");
?>
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
                                    while ($row = mysqli_fetch_array($query)) {
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
                                                        <li><a href="view.php?id=<?php echo $id; ?> ">View</a></li>
                                                        <li><a href="edit.php?id=<?php echo $id; ?> ">Edit</a></li>
                                                        <li><a href="delete.php?id=<?php echo $id; ?>">Delete</a></li>
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
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
