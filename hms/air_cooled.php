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
    <title> VIEW | AIR_COOLED VIEW</title>

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
                                <h1 class="mainTitle">Users |Air cooled view</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Users</span>
                                </li>
                                <li class="active">
                                    <span>air_cooled view</span>
                                </li>
                            </ol>
                        </div>
                    </section>
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="over-title margin-bottom-15">View <span class="text-bold">air_cooled History</span></h5>

                                <table class="table table-hover" id="sample-table-1">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Personnel Name</th>
                                            <th>Date</th>
                                            <th>evaporator refrigerant pressure chiller1 </th>
                                            <th>evaporator refrigerant pressure chiller2 </th>
                                            <th>evaporator refrigerant pressure chiller3</th>
                                            <th>evaporator refrigerant pressure chiller4</th>
                                            <th>liq line sight glasses chiller1</th>
                                            <th>liq line sight glasses chiller2</th>
                                            <th>liq line sight glasses chiller3</th>
                                            <th>liq line sight glasses chiller4</th>
                                            <th>system supperheat chiller1</th>
                                            <th>system supperheat chiller2</th>
                                            <th>system supperheat chiller3</th>
                                            <th>system supperheat chiller4</th>
                                            <th>system sub cooling chiller1</th>
                                            <th>system sub cooling chiller2 </th>
                                            <th>system sub cooling chiller3</th>
                                            <th>system sub cooling chiller4</th>
                                            <th>unit operating pressure chiller1</th>
                                            <th>unit operating pressure chiller2</th>
                                            <th>unit operating pressure chiller3</th>
                                            <th>unit operating pressure chiller4</th>
                                            <th>condenser coils chiller1</th>
                                            <th>condenser coils chiller2</th>
                                            <th>condenser coils chiller3</th>
                                            <th>condenser coils chiller4</th>
                                            <th>Comments</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $sql = mysqli_query($con, "SELECT * FROM `air_cooled_water1`");
                                        $cnt = 1;
                                        while ($row = mysqli_fetch_array($sql)) {

                                        ?>
                                            <tr>
                                                <td class="center"><?php echo $cnt; ?>.</td>
                                                <td class="hidden-xs"><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['evaporator_ref_pressure_chiller1']; ?></td>
                                                <td><?php echo $row['evaporator_ref_pressure_chiller2']; ?></td>
                                                <td><?php echo $row['evaporator_ref_pressure_chiller3']; ?>
                                                <td><?php echo $row['evaporator_ref_pressure_chiller4']; ?>
                                                <td><?php echo $row['liq_line_sight_glasses_chiller1']; ?>
                                                <td><?php echo $row['liq_line_sight_glasses_chiller2']; ?>
                                                <td><?php echo $row['liq_line_sight_glasses_chiller3']; ?>
                                                <td><?php echo $row['liq_line_sight_glasses_chiller4']; ?>
                                                <td><?php echo $row['system_supperheat_chiller1']; ?>
                                                <td><?php echo $row['system_supperheat_chiller2']; ?>
                                                <td><?php echo $row['system_supperheat_chiller3']; ?>
                                                <td><?php echo $row['system_supperheat_chiller4']; ?>
                                                <td><?php echo $row['system_sub_cooling_chiller1']; ?>
                                                <td><?php echo $row['system_sub_cooling_chiller2']; ?>
                                                <td><?php echo $row['system_sub_cooling_chiller3']; ?>
                                                <td><?php echo $row['system_sub_cooling_chiller4']; ?>
                                                <td><?php echo $row['unit_operating_pressure_chiller1']; ?>
                                                <td><?php echo $row['unit_operating_pressure_chiller2']; ?>
                                                <td><?php echo $row['unit_operating_pressure_chiller3']; ?>
                                                <td><?php echo $row['unit_operating_pressure_chiller4']; ?>
                                                <td><?php echo $row['condenser_coils_chiller1']; ?>
                                                <td><?php echo $row['condenser_coils_chiller2']; ?>
                                                <td><?php echo $row['condenser_coils_chiller3']; ?>
                                                <td><?php echo $row['condenser_coils_chiller4']; ?>
                                                <td><?php echo $row['comments']; ?>

                                                <td>

                                                    <a href="view-air_cooled.php?viewid=<?php echo $row['ID']; ?>"><i class="fa fa-eye"></i></a>

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