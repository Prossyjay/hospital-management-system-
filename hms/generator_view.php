<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> History | View LPG History</title>

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
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Users | Generator History</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Users</span>
                                </li>
                                <li class="active">
                                    <span>View Generator History</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="over-title margin-bottom-15">View <span class="text-bold">Generator History</span></h5>

                                <table class="table table-hover" id="sample-table-1">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Personnel Name</th>
                                            <th>Date</th>
                                            <th>Running Hours </th>
                                            <th>Generator condition </th>
                                            <th>Shed condition </th>
                                            <th>fuel Tank</th>
                                            <th>Fuel Leaks</th>
                                            <th>Motor oil level okay</th>
                                            <th>Motor oil condition</th>
                                            <th>Radiator, no leaks?</th>
                                            <th>Battery connection</th>
                                            <th>Battery water level</th>
                                            <th>Battery charger is charging</th>
                                            <th>Leaks Under generator</th>
                                            <th>Exhaust system functiions</th>
                                            <th>Auto-start working </th>
                                            <th>Equipments Condition</th>
                                            <th>Wrenches</th>
                                            <th>Fire extinguisher present</th>
                                            <th>Fire extinguisher working</th>
                                            <th>First aid kit present</th>
                                            <th>First aid kit complete</th>
                                            <th>Water decanter</th>
                                            <th>Documents</th>
                                            <th>Generator log present</th>
                                            <th>Daily check form present</th>
                                            <th>Manuals Present</th>
                                            <th>Start engine</th>
                                            <th>Pre-heating works</th>
                                            <th>Motor starts easily</th>
                                            <th>Battery charging</th>
                                            <th>No usual smaell,lights,sounds</th>
                                            <th>Comments</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $sql = mysqli_query($con, "SELECT * FROM `generator_inspection`");
                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($sql)) {

                                        ?>
                                            <tr>
                                                <td class="center"><?php echo $cnt; ?>.</td>
                                                <td class="hidden-xs"><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['running_hours']; ?></td>
                                                <td><?php echo $row['generator_condition']; ?></td>
                                                <td><?php echo $row['shed_condition']; ?>
                                                <td><?php echo $row['fuel_tank']; ?>
                                                <td><?php echo $row['fuel_leaks']; ?>
                                                <td><?php echo $row['fuel_cap']; ?>
                                                <td><?php echo $row['motor_oil_level']; ?>
                                                <td><?php echo $row['motor_oil_condition']; ?>
                                                <td><?php echo $row['radiator_leaks']; ?>
                                                <td><?php echo $row['radiator_coolant']; ?>
                                                <td><?php echo $row['battery_connection']; ?>
                                                <td><?php echo $row['battery_water']; ?>
                                                <td><?php echo $row['battery_charger']; ?>
                                                <td><?php echo $row['leaks']; ?>
                                                <td><?php echo $row['exhaust_system']; ?>
                                                <td><?php echo $row['auto_start']; ?>
                                                <td><?php echo $row['equipment_condition']; ?>
                                                <td><?php echo $row['wrenches']; ?>
                                                <td><?php echo $row['extinguisher_present']; ?>
                                                <td><?php echo $row['extinguisher_working']; ?>
                                                <td><?php echo $row['first_aid_present']; ?>
                                                <td><?php echo $row['first_aid_complete']; ?>
                                                <td><?php echo $row['water_decantor']; ?>
                                                <td><?php echo $row['document']; ?>
                                                <td><?php echo $row['log_present']; ?>
                                                <td><?php echo $row['daily_check_form']; ?>
                                                <td><?php echo $row['manuals_present']; ?>
                                                <td><?php echo $row['start_engine']; ?>
                                                <td><?php echo $row['pre_heating']; ?>
                                                <td><?php echo $row['motor_starts']; ?>
                                                <td><?php echo $row['oil_pressure']; ?>
                                                <td><?php echo $row['battery_charging']; ?>
                                                <td><?php echo $row['smells_lights_sounds']; ?>
                                                <td><?php echo $row['comment']; ?>
                                                <td><?php echo $row['comment']; ?>

                                                <td>

                                                    <a href="view-lpg_history.php?viewid=<?php echo $row['ID']; ?>"><i class="fa fa-eye"></i></a>

                                                </td>
                                            </tr>
                                        <?php
                                            $cnt = $cnt + 1;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </script>
    <!-- end: JavaScript Event Handlers for this page -->
    <!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>