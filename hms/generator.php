<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $date = $_POST['date'];
    $running_hours = $_POST['running_hours'];
    $generator_condition = $_POST['generator_condition'];
    $shed_condition = $_POST['shed_condition'];
    $fuel_tank = $_POST['fuel_tank'];
    $fuel_leaks = $_POST['fuel_leaks'];
    $fuel_cap = $_POST['fuel_cap'];
    $motor_oil_level = $_POST['motor_oil_level'];
    $motor_oil_condition = $_POST['motor_oil_condition'];
    $radiator_leaks = $_POST['radiator_leaks'];
    $radiator_coolant = $_POST['radiator_coolant'];
    $battery_connection = $_POST['battery_connection'];
    $battery_water = $_POST['battery_water'];
    $battery_charger = $_POST['battery_charger'];
    $leaks = $_POST['leaks'];
    $exhaust_system = $_POST['exhaust_system'];
    $auto_start = $_POST['auto_start'];
    $equipment_condition = $_POST['equipment_condition'];
    $wrenches = $_POST['wrenches'];
    $extinguisher_present = $_POST['extinguisher_present'];
    $extinguisher_working = $_POST['extinguisher_working'];
    $first_aid_present = $_POST['first_aid_present'];
    $first_aid_complete = $_POST['first_aid_complete'];
    $water_decantor = $_POST['water_decantor'];
    $document = $_POST['document'];
    $log_present = $_POST['log_present'];
    $daily_check_form = $_POST['daily_check_form'];
    $manuals_present = $_POST['manuals_present'];
    $start_engine = $_POST['start_engine'];
    $pre_heating = $_POST['pre_heating'];
    $motor_starts = $_POST['motor_starts'];
    $oil_pressure = $_POST['oil_pressure'];
    $battery_charging = $_POST['battery_charging'];
    $smells_lights_sounds = $_POST['smells_lights_sounds'];
    $comments = $_POST['comments'];


    $query = "INSERT INTO `generator_inspection` (`name`, `date`, `running_hours`, `generator_condition`, `shed_condition`, `fuel_tank`, 
    `fuel_leaks`, `fuel_cap`, `motor_oil_level`, `motor_oil_condition`, `radiator_leaks`, `radiator_coolant`, `battery_connection`, 
    `battery_water`, `battery_charger`, `leaks`, `exhaust_system`, `auto_start`, `equipment_condition`, `wrenches`, `extinguisher_present`,
     `extinguisher_working`, `first_aid_present`, `first_aid_complete`, `water_decantor`, `document`, `log_present`, `daily_check_form`, 
     `manuals_present`, `start_engine`, `pre_heating`, `motor_starts`, `oil_pressure`, `battery_charging`, `smells_lights_sounds`, `comments`)

     values('$name', '$date', '$running_hours', '$generator_condition', '$shed_condition', '$fuel_tank', 
    '$fuel_leaks', '$fuel_cap', '$motor_oil_level', '$motor_oil_condition', '$radiator_leaks', '$radiator_coolant', '$battery_connection', 
    '$battery_water', '$battery_charger', '$leaks', '$exhaust_system', '$auto_start', '$equipment_condition', '$wrenches', '$extinguisher_present',
     '$extinguisher_working', '$first_aid_present', '$first_aid_complete', '$water_decantor', '$document', '$log_present', '$daily_check_form', 
     '$manuals_present', '$start_engine', '$pre_heating', '$motor_starts', '$oil_pressure', '$battery_charging', '$smells_lights_sounds', '$comments')";
   

   if ($query) {
    echo "<script>alert('Generator checklist form has been entered');</script>";
}
   
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User | Generator Daily</title>

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
                                <h1 class="mainTitle">User | Generator Daily Inspection</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>User</span>
                                </li>
                                <li class="active">
                                    <span>Generator Daily Inspection</span>
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
                                                        <label for="Date">
                                                            Date
                                                        </label>
                                                        <input class="form-control datepicker" name="date" required="required" data-date-format="yyyy-mm-dd">

                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label for="tank">
                                                            Running Hours of Compressor
                                                        </label>
                                                        <input type="number" class="form-control" name="running_hours" placeholder="A" required>
                                                        <br>
                                                        <input type="number" class="form-control" name="running_hours" placeholder="B" required>

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="generator_condition">
                                                            Generator is clean and in good condition
                                                        </label>
                                                        <select name="generator_condition" class="form-control" value="<?php echo ($generator_condition) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="air_leak">
                                                           Shed is clean and in good condition
                                                        </label>
                                                        <select name="shed_condition" class="form-control" value="<?php echo ($shed_condition) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="air_temperature">
                                                            Fuel tank at least 50% full
                                                        </label>
                                                        <select name="fuel_tank" class="form-control" value="<?php echo ($fuel_tank) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Fuel Leaks?
                                                        </label>
                                                        <select name="fuel_leaks" class="form-control" value="<?php echo ($fuel_leaks) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Fuel cap On?
                                                        </label>
                                                        <select name="fuel_cap" class="form-control" value="<?php echo ($fuel_cap) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Motor oil level is okay?
                                                        </label>
                                                        <select name="motor_oil_level" class="form-control" value="<?php echo ($motor_oil_level) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                           Motor oil condition?
                                                        </label>
                                                        <select name="motor_oil_condition" class="form-control" value="<?php echo ($motor_oil_condition) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Radiator, no leaks ?
                                                        </label>
                                                        <select name="radiator_leaks" class="form-control" value="<?php echo ($radiator_leaks) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                           Radiator coolant level okay?
                                                        </label>
                                                        <select name="radiator_coolant" class="form-control" value="<?php echo ($radiator_coolant) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Battery connection good?
                                                        </label>
                                                        <select name="battery_connection" class="form-control" value="<?php echo ($battery_connection) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="fan_motor">
                                                            Battery water okay?
                                                        </label>
                                                        <select name="battery_water" class="form-control" value="<?php echo ($battery_water) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="battery_charger">
                                                            Battery charger is charging?
                                                        </label>
                                                        <select name="battery_charger" class="form-control" value="<?php echo ($battery_charger) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="leaks">
                                                            No leaks(look underneath generator)?
                                                        </label>
                                                        <select name="leaks" class="form-control" value="<?php echo ($leaks) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exhaust_system">
                                                            Exhaust system is functioning normally
                                                        </label>
                                                        <select name="exhaust_system" class="form-control" value="<?php echo ($exhaust_system) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="auto_start">
                                                            Auto-start is working?
                                                        </label>
                                                        <select name="auto_start" class="form-control" value="<?php echo ($auto_start) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="equipment_condition">
                                                            All tools and equipment are present and in good condition
                                                        </label>
                                                        <select name="equipment_condition" class="form-control" value="<?php echo ($equipment_condition) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="wrenches">
                                                            Wrenches
                                                        </label>
                                                        <select name="wrenches" class="form-control" value="<?php echo ($wrenches) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="extinguisher_present">
                                                            Fire extinguisher present?
                                                        </label>
                                                        <select name="extinguisher_present" class="form-control" value="<?php echo ($extinguisher_present) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="extinguisher_working">
                                                           Fire extinguisher working ?
                                                        </label>
                                                        <select name="extinguisher_working" class="form-control" value="<?php echo ($extinguisher_working) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="first_aid_present">
                                                            First aid kit present?
                                                        </label>
                                                        <select name="first_aid_present" class="form-control" value="<?php echo ($first_aid_present) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="first_aid_complete">
                                                            First aid kit complete
                                                        </label>
                                                        <select name="first_aid_complete" class="form-control" value="<?php echo ($first_aid_complete) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="water_decantor">
                                                           Water decantor(does it need to be drained?)
                                                        </label>
                                                        <select name="water_decantor" class="form-control" value="<?php echo ($water_decantor) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="document">
                                                            Documents:
                                                        </label>
                                                        <select name="document" class="form-control" value="<?php echo ($document) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="log_present">
                                                            Generator log present?
                                                        </label>
                                                        <select name="log_present" class="form-control" value="<?php echo ($log_present) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="daily_check_form">
                                                            Daily check forms present?
                                                        </label>
                                                        <select name="daily_check_form" class="form-control" value="<?php echo ($daily_check_form) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="manuals_present">
                                                            Manuals_present
                                                        </label>
                                                        <select name="manuals_present" class="form-control" value="<?php echo ($manuals_present) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="start_engine">
                                                            Start engine:
                                                        </label>
                                                        <select name="start_engine" class="form-control" value="<?php echo ($start_engine) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pre_heating">
                                                            Pre_heating works?
                                                        </label>
                                                        <select name="pre_heating" class="form-control" value="<?php echo ($pre_heating) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="motor_starts">
                                                            Motor starts easily?
                                                        </label>
                                                        <select name="motor_starts" class="form-control" value="<?php echo ($motor_starts) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="oil_pressure">
                                                            Oil pressure Ok?
                                                        </label>
                                                        <select name="oil_pressure" class="form-control" value="<?php echo ($oil_pressure) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="battery_charging">
                                                            Battery Charging?
                                                        </label>
                                                        <select name="battery_charging" class="form-control" value="<?php echo ($battery_charging) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="smells_lights_sounds">
                                                            No unusual smells, lights, sounds ?
                                                        </label>
                                                        <select name="smells_lights_sounds" class="form-control" value="<?php echo ($smells_lights_sounds) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="comments"> Comments</label>
                                                        <input type="text" class="form-control" name="comments" value="<?php echo ($comments) ?>" placeholder="Comment" required>

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