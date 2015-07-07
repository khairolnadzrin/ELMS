    <?php

    include('session.php');
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Edit Details</title>
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


    <?php
    include 'DB.php';


    $sql = "SELECT * FROM $staff WHERE staff_id='$staff_id'";

                
                if($result = mysqli_query($conn, $sql))
                {
                    while($rows= mysqli_fetch_array($result,MYSQLI_ASSOC)){

                        $fname=$rows['staff_fname'];
                        $lname=$rows['staff_lname'];
                        $ic=$rows['staff_ic'];
                        $address=$rows['staff_address'];
                        $phone=$rows['staff_pnumber'];
                        $title=$rows['staff_title'];



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
                                    <h3 class="box-title">EDIT PROFILE</h3>
                                </div><!-- /.box-header -->
                            <div class="box box-primary">
                             
                                <form method="post" onsubmit='return validateMyForm()' action="edit_profile.php">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Staff ID :</label>
                                        <input type="text" class="form-control" id="staffID" name="staffID" placeholder="Enter ID" required value="<?php echo $staff_id; ?>" style="text-transform:uppercase" />
                                    </div>
                                    <div class="form-group">
                                        <label>First Name :</label>
                                        <input type="text" class="form-control" id="fname" name="fname" required value="<?php echo $fname; ?>" style="text-transform:uppercase" />
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name :</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" value="<?php echo $lname; ?>"  required  style="text-transform:uppercase" />
                                    </div>
                                    <div class="form-group">
                                            <label>Position :</label>
                                            <input class="form-control" id="position" name="position"  placeholder="Position" required value="<?php echo $title; ?>" style="text-transform:uppercase" />
                                        </div>
                                    <div class="form-group">
                                        <label>IC :</label>
                                        <input type="text" class="form-control" id="staffIc" name="staffIc" placeholder="IC number" required value="<?php echo $ic; ?>" style="text-transform:uppercase" />
                                    </div>

                                    <div class="form-group">
                                        <label>Phone Number :</label>
                                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required value="<?php echo $phone; ?>" style="text-transform:uppercase" />
                                    </div>
      

                                    <div class="form-group">
                                            <label>Address :</label>
                                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address" style="text-transform:uppercase" ><?php echo $address; ?></textarea>
                                        </div>


                                </div><!-- /.box-body -->

                                 <div class="box-footer">
                                 <input type="submit" name="update" value="Update" class="btn btn-primary"/> 
                                 <a href="javascript:popup3('update_password.php')" class="btn btn-primary">Change Password</a>

                                    </div>

                                <div class="box-footer">
                                 

                                    </div>
                            </div><!-- /.box -->

                            </form>

                          
                        </div><!-- /.col (right) -->
                    </div><!-- /.row -->                    

                </section><!-- /.content -->




        <?php


            if(isset($_POST['update'])){




            $staffID = $_POST['staffID'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $position = $_POST['position'];
            $staffIc = $_POST['staffIc'];
            $phoneNumber = $_POST['phoneNumber'];
            $address = $_POST['address'];

        $sql2="UPDATE $staff SET staff_id ='$staffID', staff_fname='$fname', staff_lname='$lname', staff_ic='$staffIc', staff_address='$address', staff_pnumber='$phoneNumber', staff_title='$position' WHERE staff_id='$staffID'";
            
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

 <script type="text/javascript">

            function popup3(url){
              cuteLittleWindow = window.open(url,'popUpWindow2','height=100,width=200,left=100,top=10,resizable=no,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')

            }

            </script>

    </body>
</html>