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

 
        <div class="wrapper row-offcanvas row-offcanvas-left">
          

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->

                 <?php
                    include 'DB.php';

                    $id = $_GET["id"];

                    $sql = "SELECT * FROM $leave WHERE leave_no='$id'";

                                
                                if($result = mysqli_query($conn, $sql))
                                {
                                    while($rows= mysqli_fetch_array($result,MYSQLI_ASSOC)){

                                        $staff_id1=$rows['staff_id'];
                                        $date_range=$rows['date'];
                                        $reason=$rows['reason'];


                                    }       
                                        
                                }
                                else
                                {
                                echo 'ERROR';       
                                }

                    $sql2 = "SELECT staff_fname, staff_pnumber, staff_title FROM $staff WHERE staff_id='$staff_id1'";

                            if($result2 = mysqli_query($conn, $sql2))
                                {
                                    while($rows2= mysqli_fetch_array($result2,MYSQLI_ASSOC)){

                                        $staff_fname=$rows2['staff_fname'];
                                        $staff_pnumber=$rows2['staff_pnumber'];
                                        $staff_title=$rows2['staff_title'];


                                    }       
                                        
                                }
                                else
                                {
                                echo 'ERROR';       
                                }
                                    
                    ?>


                <!-- Main content -->
                <section class="content">
                    <div class="row">
 
                        <div class="col-md-6">
                        <div class="box-header">
                                    <h3 class="box-title">LEAVE APPROVAL</h3>
                                </div><!-- /.box-header -->
                            <div class="box box-primary">
                             
                                <form method="post" action="approve_leave.php?id=<?php echo  $_GET["id"]; ?>">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Staff ID :</label>
                                        <input type="text" class="form-control" id="staffID" name="staffID" placeholder="Enter ID" required  value="<?php echo $staff_id1; ?>" style="text-transform:uppercase" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label>Staff Name :</label>
                                        <input type="text" class="form-control" id="staffPassword" name="staffPassword" placeholder="Enter Password" value="<?php echo $staff_fname; ?>" style="text-transform:uppercase" readonly/>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number :</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required  value="<?php echo $staff_pnumber; ?>" style="text-transform:uppercase" readonly/>
                                    </div>
                                    <div class="form-group">
                                        <label>Position :</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required value="<?php echo $staff_title; ?>"  style="text-transform:uppercase" readonly />
                                    </div>
                                    <div class="form-group">
                                            <label>Leave Apply :</label>
                                            <input class="form-control" id="position" name="position"  placeholder="Position" required  value="<?php echo $date_range; ?>" style="text-transform:uppercase" readonly />
                                        </div>
                                    <div class="form-group">
                                        <label>Reason :</label>
                                        <input type="text" class="form-control" id="staffIc" name="staffIc" placeholder="IC number" required value="<?php echo $reason; ?>" style="text-transform:uppercase" readonly />
                                    </div>

                                    <div class="form-group">
                                        <label>Approval :</label>
                                       <select id="approval" name="approval" class="form-control">
                                              <option value=""></option>
                                              <option value="approve">Approve</option>
                                              <option value="reject">Reject</option>
                                        </select>
                                    </div>
    


                                </div><!-- /.box-body -->

                                 <div class="box-footer">
                                 <input type="submit" name="update" class="btn btn-primary"/> 

                                    </div>
                            </div><!-- /.box -->

                            </form>

                          
                        </div><!-- /.col (right) -->
                    </div><!-- /.row -->                    

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <?php
            if(isset($_POST['update'])){




            $status = $_POST['approval'];
           

        $sql2="UPDATE $leave SET status ='$status' WHERE leave_no='$id'";
            
                if($result2 = mysqli_query($conn, $sql2))
                {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Data update sucessfully");'; 
                    echo 'window.close()';
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

    </body>
</html>