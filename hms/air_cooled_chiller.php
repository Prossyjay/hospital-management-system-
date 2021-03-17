<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $date = $_POST['date'];
    $evaporator_ref_pressure_chiller1 = $_POST['evaporator_ref_pressure_chiller1'];
    $evaporator_ref_pressure_chiller2 = $_POST['evaporator_ref_pressure_chiller2'];
    $evaporator_ref_pressure_chiller3 = $_POST['evaporator_ref_pressure_chiller3'];
    $evaporator_ref_pressure_chiller4 = $_POST['evaporator_ref_pressure_chiller4'];
    $liq_line_sight_glasses_chiller1 = $_POST['liq_line_sight_glasses_chiller1'];
    $liq_line_sight_glasses_chiller2 = $_POST['liq_line_sight_glasses_chiller2'];
    $liq_line_sight_glasses_chiller3 = $_POST['liq_line_sight_glasses_chiller3'];
    $liq_line_sight_glasses_chiller4 = $_POST['liq_line_sight_glasses_chiller4'];
    $system_supperheat_chiller1 = $_POST['system_supperheat_chiller1'];
    $system_supperheat_chiller2 = $_POST['system_supperheat_chiller2'];
    $system_supperheat_chiller3 = $_POST['system_supperheat_chiller3'];
    $system_supperheat_chiller4 = $_POST['system_supperheat_chiller4'];
    $system_sub_cooling_chiller1 = $_POST['system_sub_cooling_chiller1'];
    $system_sub_cooling_chiller2 = $_POST['system_sub_cooling_chiller2'];
    $system_sub_cooling_chiller3 = $_POST['system_sub_cooling_chiller3'];
    $system_sub_cooling_chiller4 = $_POST['system_sub_cooling_chiller4'];
    $unit_operating_pressure_chiller1 = $_POST['unit_operating_pressure_chiller1'];
    $unit_operating_pressure_chiller2 = $_POST['unit_operating_pressure_chiller2'];
    $unit_operating_pressure_chiller3 = $_POST['unit_operating_pressure_chiller3'];
    $unit_operating_pressure_chiller4 = $_POST['unit_operating_pressure_chiller4'];
    $condenser_coils_chiller1 = $_POST['condenser_coils_chiller1'];
    $condenser_coils_chiller2 = $_POST['condenser_coils_chiller2'];
    $condenser_coils_chiller3 = $_POST['condenser_coils_chiller3'];
    $condenser_coils_chiller4 = $_POST['condenser_coils_chiller4'];
    $comments = $_POST['comments'];



    $query = "INSERT INTO `air_cooled_water1` ( `name`, `date`, `evaporator_ref_pressure_chiller1`, `evaporator_ref_pressure_chiller2`,
    `evaporator_ref_pressure_chiller3`, `evaporator_ref_pressure_chiller4`, `liq_line_sight_glasses_chiller1`, `liq_line_sight_glasses_chiller2`,
    `liq_line_sight_glasses_chiller3`, `liq_line_sight_glasses_chiller4`, `system_supperheat_chiller1`, `system_supperheat_chiller2`, 
    `system_supperheat_chiller3`, `system_supperheat_chiller4`, `system_sub_cooling_chiller1`, `system_sub_cooling_chiller2`, 
    `system_sub_cooling_chiller3`, `system_sub_cooling_chiller4`, `unit_operating_pressure_chiller1`, `unit_operating_pressure_chiller2`, 
    `unit_operating_pressure_chiller3`, `unit_operating_pressure_chiller4`, `condenser_coils_chiller1`, `condenser_coils_chiller2`, 
    `condenser_coils_chiller3`, `condenser_coils_chiller4`, `comments`)

    VALUES ('$name','$date','$evaporator_ref_pressure_chiller1','$evaporator_ref_pressure_chiller2','$evaporator_ref_pressure_chiller3',
    '$evaporator_ref_pressure_chiller4','$liq_line_sight_glasses_chiller1','$liq_line_sight_glasses_chiller2','$liq_line_sight_glasses_chiller3',
    '$liq_line_sight_glasses_chiller4','$system_supperheat_chiller1','$system_supperheat_chiller2','$system_supperheat_chiller3',
    '$system_supperheat_chiller4','$system_sub_cooling_chiller1','$system_sub_cooling_chiller2',
    '$system_sub_cooling_chiller3','$system_sub_cooling_chiller4','$unit_operating_pressure_chiller1','$unit_operating_pressure_chiller2',
    '$unit_operating_pressure_chiller3','$unit_operating_pressure_chiller4','$condenser_coils_chiller1','$condenser_coils_chiller2',
    '$condenser_coils_chiller3','$condenser_coils_chiller4','$comments')";

if ($query) {
    echo "<script>alert('Air cooled checklist form has been entered');</script>";
}
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User | Air cooled water chiller</title>

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
                                <h1 class="mainTitle">User | Air cooled water chiller</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>User</span>
                                </li>
                                <li class="active">
                                    <span>Air cooled water chiller</span>
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
                                                        <label for="evaporator_ref_pressure_chiller">
                                                            <strong> Check the evaporator refrigerant pressure and the condenser refrigerant pressure in
                                                                the refrigerant report menu on the clear language display.
                                                                NB: The pressures are refrenced to sea level(14.6960psia).</strong>
                                                        </label><br>
                                                        <label for='evaporator_ref_pressure_chiller1'>Air cooled chiller No 1</label>
                                                        <input type="number" class="form-control" name="evaporator_ref_pressure_chiller1" placeholder="chiller No 1" required>
                                                        <br>
                                                        <label for='evaporator_ref_pressure_chiller2'>Air cooled chiller No 2</label>
                                                        <input type="number" class="form-control" name="evaporator_ref_pressure_chiller2" placeholder="chiller No 2" required>
                                                        <br>
                                                        <label for='evaporator_ref_pressure_chiller3'>Air cooled chiller No 3</label>
                                                        <input type="number" class="form-control" name="evaporator_ref_pressure_chiller3" placeholder="chiller No 3" required>
                                                        <br>
                                                        <label for='evaporator_ref_pressure_chiller4'>Air cooled chiller No 4</label>
                                                        <input type="number" class="form-control" name="evaporator_ref_pressure_chiller4" placeholder="chiller No 4" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="liq_line_sight_glasses_chiller">
                                                            <strong> The liquid line sight glasses. The refrigerant flow past the sight glasses should be clear.</strong>
                                                        </label>
                                                        <br>
                                                        <label for='liq_line_sight_glasses_chiller1'>Air cooled chiller No 1</label>
                                                        <select name="liq_line_sight_glasses_chiller1" class="form-control" value="<?php echo ($liq_line_sight_glasses_chiller1) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='liq_line_sight_glasses_chiller2'>Air cooled chiller No 2</label>
                                                        <select name="liq_line_sight_glasses_chiller2" class="form-control" value="<?php echo ($liq_line_sight_glasses_chiller2) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='liq_line_sight_glasses_chiller3'>Air cooled chiller No 3</label>
                                                        <select name="liq_line_sight_glasses_chiller3" class="form-control" value="<?php echo ($liq_line_sight_glasses_chiller3) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='liq_line_sight_glasses_chiller4'>Air cooled chiller No 4</label>
                                                        <select name="liq_line_sight_glasses_chiller4" class="form-control" value="<?php echo ($liq_line_sight_glasses_chiller4) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="system_supperheat_chiller">
                                                            <strong> Check the system superheat.</strong>
                                                        </label>
                                                        <br>
                                                        <label for='system_supperheat_chiller1'>Air cooled chiller No 1</label>
                                                        <select name="system_supperheat_chiller1" class="form-control" value="<?php echo ($system_supperheat_chiller1) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='system_supperheat_chiller2'>Air cooled chiller No 2</label>
                                                        <select name="system_supperheat_chiller2" class="form-control" value="<?php echo ($system_supperheat_chiller2) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='system_supperheat_chiller3'>Air cooled chiller No 3</label>
                                                        <select name="system_supperheat_chiller3" class="form-control" value="<?php echo ($system_supperheat_chiller3) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='system_supperheat_chiller4'>Air cooled chiller No 4</label>
                                                        <select name="system_supperheat_chiller4" class="form-control" value="<?php echo ($system_supperheat_chiller4) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="system_sub_cooling_chiller">
                                                            <strong> Check the system sub cooling</strong>
                                                        </label>
                                                        <br>
                                                        <label for='system_sub_cooling_chiller1'>Air cooled chiller No 1</label>
                                                        <select name="system_sub_cooling_chiller1" class="form-control" value="<?php echo ($system_sub_cooling_chiller1) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='system_sub_cooling_chiller2'>Air cooled chiller No 2</label>
                                                        <select name="system_sub_cooling_chiller2" class="form-control" value="<?php echo ($system_sub_cooling_chiller2) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='system_sub_cooling_chiller3'>Air cooled chiller No 3</label>
                                                        <select name="system_sub_cooling_chiller3" class="form-control" value="<?php echo ($system_sub_cooling_chiller3) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='system_sub_cooling_chiller4'>Air cooled chiller No 4</label>
                                                        <select name="system_sub_cooling_chiller4" class="form-control" value="<?php echo ($system_sub_cooling_chiller4) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="unit_operating_pressure_chiller1">
                                                            <strong> Check the unit operating pressures.</strong>
                                                        </label>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller1'>Air cooled chiller No 1</label>
                                                        <select name="unit_operating_pressure_chiller1" class="form-control" value="<?php echo ($unit_operating_pressure_chiller1) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller2'>Air cooled chiller No 2</label>
                                                        <select name="unit_operating_pressure_chiller2" class="form-control" value="<?php echo ($unit_operating_pressure_chiller2) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller3'>Air cooled chiller No 3</label>
                                                        <select name="unit_operating_pressure_chiller3" class="form-control" value="<?php echo ($unit_operating_pressure_chiller3) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller4'>Air cooled chiller No 4</label>
                                                        <select name="unit_operating_pressure_chiller4" class="form-control" value="<?php echo ($unit_operating_pressure_chiller4) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="unit_operating_pressure_chiller1">
                                                            <strong> Check the unit operating pressures.</strong>
                                                        </label>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller1'>Air cooled chiller No 1</label>
                                                        <select name="unit_operating_pressure_chiller1" class="form-control" value="<?php echo ($unit_operating_pressure_chiller1) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller2'>Air cooled chiller No 2</label>
                                                        <select name="unit_operating_pressure_chiller2" class="form-control" value="<?php echo ($unit_operating_pressure_chiller2) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller3'>Air cooled chiller No 3</label>
                                                        <select name="unit_operating_pressure_chiller3" class="form-control" value="<?php echo ($unit_operating_pressure_chiller3) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='unit_operating_pressure_chiller4'>Air cooled chiller No 4</label>
                                                        <select name="unit_operating_pressure_chiller4" class="form-control" value="<?php echo ($unit_operating_pressure_chiller4) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="condenser_coils_chiller1">
                                                            <strong> Inspect the condenser coils for dirt and debris.</strong>
                                                        </label>
                                                        <br>
                                                        <label for='condenser_coils_chiller1'>Air cooled chiller No 1</label>
                                                        <select name="condenser_coils_chiller1" class="form-control" value="<?php echo ($condenser_coils_chiller1) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='condenser_coils_chiller2'>Air cooled chiller No 2</label>
                                                        <select name="condenser_coils_chiller2" class="form-control" value="<?php echo ($condenser_coils_chiller2) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='condenser_coils_chiller3'>Air cooled chiller No 3</label>
                                                        <select name="condenser_coils_chiller3" class="form-control" value="<?php echo ($condenser_coils_chiller3) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                        <br>
                                                        <label for='condenser_coils_chiller4'>Air cooled chiller No 4</label>
                                                        <select name="condenser_coils_chiller4" class="form-control" value="<?php echo ($condenser_coils_chiller4) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No </option>
                                                            <option value="N/A"> N/A</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="comments">comments</label>
                                                        <input type="text" class="form-control" name="comments" value="<?php echo ($comments) ?>" placeholder="comments" required>

                                                    </div>

                                                    <div style="text-align:center;margin-top:40px;">
                                                        <span class="step"></span>
                                                        <span class="step"></span>

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