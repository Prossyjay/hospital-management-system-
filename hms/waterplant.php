<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $date = $_POST['date'];
    $equipment_condition = $_POST['equipment_condition'];
    $room_condition = $_POST['room_condition'];
    $water_pump = $_POST['water_pump'];
    $water_valve = $_POST['water_valve'];
    $electrical_contacts = $_POST['electrical_contacts'];
    $water_leakage = $_POST['water_leakage'];
    // $lubricant_leakage =$_POST['lubricant_leakage'];
    // $fire_engine = $_POST['fire_engine'];
    $electrical_connection = $_POST['electrical_connection'];

    $comment = $_POST['comment'];
  
    $query = "INSERT INTO `water_treatment_plant` (`name`, `date`, `equipment_condition`, `room_condition`, `water_pump`, `water_valve`, `electrical_contacts`, `water_leakage`, `electrical_connections`, `comments`)
     VALUES ('$name','$date','$equipment_condition','$room_condition','$water_pump','$water_valve','$electrical_contacts','$water_leakage','$electrical_connection','$comment')";
    
    if ($query) {
        echo "<script>alert('Water plant checklist form has been entered');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User | LPG Checklist</title>

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    <script>
        function getdoctor(val) {
            $.ajax({
                type: "POST",
                url: "get_doctor.php",
                data: 'specilizationid=' + val,
                success: function(data) {
                    $("#doctor").html(data);
                }
            });
        }
    </script>


    <script>
        function getfee(val) {
            $.ajax({
                type: "POST",
                url: "get_doctor.php",
                data: 'doctor=' + val,
                success: function(data) {
                    $("#fees").html(data);
                }
            });
        }
    </script>




</head>

<body>
    <div id="app">
        <?php include('include/sidebar.php'); ?>
        <div class="app-content">

            <?php include('include/header.php'); ?>

            <!-- end: TOP NAVBAR -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">User | Waste water Treatment plant</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>User</span>
                                </li>
                                <li class="active">
                                    <span>Waste Water Treatment Plant</span>
                                </li>
                            </ol>
                    </section>
                    <!-- end: PAGE TITLE -->
                    <!-- start: BASIC EXAMPLE -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row margin-top-30">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">CHECKLIST</h5>
                                            </div>
                                            <div class="panel-body">
                                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']); ?>
                                                    <?php echo htmlentities($_SESSION['msg1'] = ""); ?></p>
                                                <form role="form" name="book" method="post">




                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="date">
                                                            Date
                                                        </label>
                                                        <input class="form-control datepicker" name="date" required="required" data-date-format="yyyy-mm-dd">

                                                    </div>
                                                    

                                                    <div class="form-group">
                                                        <label for="equipment_condtion">
                                                          Equipment/Component is clean and in good condition
                                                        </label>
                                                        <select name="equipment_condition" class="form-control" value="<?php echo ($equipment_condition) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="room_condition">
                                                           Room is clean and in good condition
                                                        </label>
                                                        <select name="room_condition" class="form-control" value="<?php echo ($room_condition) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="water_pump">
                                                           Water pumps are working well
                                                        </label>
                                                        <select name="water_pump" class="form-control" value="<?php echo ($water_pump) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="water_valve">
                                                           Water valve are opening and closing
                                                        </label>
                                                        <select name="water_valve" class="form-control" value="<?php echo ($water_valve) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="electrical_contacts">
                                                           Electrical contacts in good condition
                                                        </label>
                                                        <select name="electrical_contacts" class="form-control" value="<?php echo ($electrical_contacts) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="water_leakage">
                                                          No water leakage
                                                        </label>
                                                        <select name="water_leakage" class="form-control" value="<?php echo ($water_leakage) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="checklistelectrical_connection">
                                                          Electrical connections Okay
                                                        </label>
                                                        <select name="electrical_connection" class="form-control" value="<?php echo ($electrical_connection) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="checklistcomment"> Comment</label>
                                                        <input type="text" class="form-control" name="comment" value="<?php echo ($comment) ?>" placeholder="Comment" required>

                                                    </div>
                                                    



                                                    <button type="submit" name="submit" class="btn btn-o btn-primary">
                                                        Submit
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- end: BASIC EXAMPLE -->






                    <!-- end: SELECT BOXES -->

                </div>
            </div>
        </div>
        <!-- start: FOOTER -->
        <?php include('include/footer.php'); ?>
        <!-- end: FOOTER -->

        <!-- start: SETTINGS -->
        <?php include('include/setting.php'); ?>

        <!-- end: SETTINGS -->
    </div>
    <!-- start: MAIN JAVASCRIPTS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/switchery/switchery.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
    <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="vendor/autosize/autosize.min.js"></script>
    <script src="vendor/selectFx/classie.js"></script>
    <script src="vendor/selectFx/selectFx.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: CLIP-TWO JAVASCRIPTS -->
    <script src="assets/js/main.js"></script>
    <!-- start: JavaScript Event Handlers for this page -->
    <script src="assets/js/form-elements.js"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();
        });

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '0d'
        });
    </script>
    <script type="text/javascript">
        $('#timepicker1').timepicker();
    </script>
    <!-- end: JavaScript Event Handlers for this page -->
    <!-- end: CLIP-TWO JAVASCRIPTS -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</body>

</html>