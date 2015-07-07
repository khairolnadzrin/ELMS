<?php
    include('session.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Add Staff</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Color Picker -->
        <link href="css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Bootstrap time Picker -->
        <link href="css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">

        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Management
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">


                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $login_session; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                 
                                    <p>
                                        <?php echo $login_session; ?> - <?php echo $title1; ?>

                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="javascript:popup3('edit_profile.php')" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                       
                        <div class="pull-left info">
                            <p>Hello, <?php echo $login_session; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                     <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="management.php">
                                <i class="fa fa-dashboard"></i> <span>Leave Apply</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="add_staff.php">
                                <i class="fa fa-th"></i> <span>Add Staff</span>
                            </a>
                        </li>
                        <li>
                            <a href="staff_details.php">
                                <i class="fa fa-th"></i> <span>Staff info</span>
                            </a>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add Staff
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">Add Staff</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
 
                        <div class="col-md-6">
                            <div class="box box-primary">
                             
                                <form method="post" onsubmit='return validateMyForm()' action="add_staff.php">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Staff ID :</label>
                                        <input type="text" class="form-control" id="staffID" name="staffID" placeholder="Enter ID" required  style="text-transform:uppercase" />
                                    </div>
                                    <div class="form-group">
                                        <label>Staff Password :</label>
                                        <input type="password" class="form-control" id="staffPassword" name="staffPassword" placeholder="Enter Password" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Repeat Password :</label>
                                        <input type="password" class="form-control" id="staffPasswordRepeat" name="staffPasswordRepeat" placeholder="Repeat Password" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>First Name :</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required  style="text-transform:uppercase" />
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name :</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required  style="text-transform:uppercase" />
                                    </div>
                                    <div class="form-group">
                                            <label>Position :</label>
                                            <input class="form-control" id="position" name="position"  placeholder="Position" required  style="text-transform:uppercase" />
                                        </div>
                                    <div class="form-group">
                                        <label>IC :</label>
                                        <input type="text" class="form-control" id="staffIc" name="staffIc" placeholder="IC number" required  style="text-transform:uppercase" />
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number :</label>
                                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required  style="text-transform:uppercase" />
                                    </div>
      

                                    <div class="form-group">
                                            <label>Address :</label>
                                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address" required  style="text-transform:uppercase" ></textarea>
                                        </div>


                                </div><!-- /.box-body -->

                                 <div class="box-footer">
                                 <input type="submit" name="save" class="btn btn-primary"/> 

                                    </div>
                            </div><!-- /.box -->

                            </form>

                          
                        </div><!-- /.col (right) -->
                    </div><!-- /.row -->                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <?php
            include 'DB.php';

            if(isset($_POST['save'])){


            $staffID = $_POST['staffID'];
            $encryppass = sha1($_POST['staffPassword']);
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $position = $_POST['position'];
            $staffIc = $_POST['staffIc'];
            $phoneNumber = $_POST['phoneNumber'];
            $address = $_POST['address'];

        $sql="INSERT INTO $staff(staff_id, staff_pass, staff_fname, staff_lname, staff_ic, staff_address, staff_pnumber, staff_unique, staff_title) VALUES('$staffID','$encryppass','$fname', '$lname', '$staffIc', '$address', '$phoneNumber', '1','$position')";
            
                if($result = mysqli_query($conn, $sql))
                {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Data add sucessfully");'; 
                    echo 'document.location.href = "add_staff.php";';
                    echo '</script>';

                }
                else
                {
                echo 'Something went wrong. Please try again later.';       
                } 


            }



        ?>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- InputMask -->
        <script src="js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- Page script -->
        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});


                //Date range picker
                $('#reservation').daterangepicker();


               
            });
        </script>

        <script type="text/javascript">

 

    function validateMyForm()

    {

        // Create validation tracking variables

        var valid = true;

        var validationMessage = 'Please correct the following errors:\r\n';

 

        // Validate first name

        if (document.getElementById('staffPassword').value != document.getElementById('staffPasswordRepeat').value)

        {

            validationMessage = validationMessage + '  - wrong password combination\r\n';

            valid = false;

        }


        // Display alert box with errors if any errors found

        if (valid == false)

        {

            alert(validationMessage);

        }

        

        return valid;

    }

 

</script>

<script type="text/javascript">

            function popup3(url){
              cuteLittleWindow = window.open(url,'popUpWindow2','height=500,width=500,left=100,top=10,resizable=no,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')

            }

            </script>

    </body>
</html>