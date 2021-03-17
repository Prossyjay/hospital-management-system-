<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $date = $_POST['date'];
    $running_hoursA = $_POST['running_hoursA'];
    $running_hoursB = $_POST['running_hoursB'];
    $tank_pressure = $_POST['tank_pressure'];
    $air_leak = $_POST['air_leak'];
    $air_temperature = $_POST['air_temperature'];
    $fan_motor = $_POST['fan_motor'];
    $electrical_contacts = $_POST['electrical_contacts'];
    $comment = $_POST['comment'];



    //insert data
    $query = "INSERT INTO `oxygen_plant` (`name`, `date`, `running_hoursA`, `running_hoursB`, `tank_pressure`, `air_leak`, `air_temperature`, `fan_motor`, `electrical_contacts`, `Comments`) 
VALUES('$name','$date','$running_hoursA','$running_hoursB','$tank_pressure','$air_leak','$air_temperature','$fan_motor','$electrical_contacts','$comment')";


// INSERT INTO `oxygen_plant` (`name`, `date`, `running_hoursA`, `running_hoursB`, `tank_pressure`, `air_leak`, `air_temperature`, `fan_motor`, `electrical_contacts`, `Comments`)
//  VALUES ('nelson olale', 'current_timestamp()', '12.3', '15.8', 'okay', 'yes', 'yesyes', 'yes', 'yes', 'yes')

if ($query) {
    echo "<script>alert('Oxygen plant checklist form has been entered');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User | Oxygen PlantChecklist</title>

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
     rel="stylesheet" type="text/css" />
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
                                <h1 class="mainTitle">User | Oxygen Plant Checklist</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>User</span>
                                </li>
                                <li class="active">
                                    <span>Oxygen Plant Checklist</span>
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
                                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg']); ?>
                                                    <?php echo htmlentities($_SESSION['msg'] = ""); ?></p>
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
                                                        <label for="running_hours">
                                                            Running Hours of Compressor
                                                        </label>
                                                        <input type="number" class="form-control" name="running_hoursA" placeholder="A" required>
                                                        <br>
                                                        <input type="number" class="form-control" name="running_hoursB" placeholder="B" required>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="tank_pressure">
                                                            Is Oxygen Tank pressure Ok ?
                                                        </label>
                                                        <select name="tank_pressure" class="form-control" value="<?php echo ($tank_pressure) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No">  No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="air_leak">
                                                            Does Air Leaks ?
                                                        </label>
                                                        <select name="air_leak" class="form-control" value="<?php echo ($air_leak) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No">  No</option>
                                                            <option value="N/A"> N/A</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="air_temperature">
                                                            Is Ambient Air Temperature Ok?
                                                        </label>
                                                        <select name="air_temperature" class="form-control" value="<?php echo ($air_temperature) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Is Fan Motor Working
                                                        </label>
                                                        <select name="fan_motor" class="form-control" value="<?php echo ($fan_motor) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Is Fan Motor Working
                                                        </label>
                                                        <select name="fan_motor" class="form-control" value="<?php echo ($fan_motor) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="electrical_contacts">
                                                            Are Electrical Contacts in Good Condition?
                                                        </label>
                                                        <select name="electrical_contacts" class="form-control" value="<?php echo ($electrical_contacts) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="comment"> Comment</label>
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