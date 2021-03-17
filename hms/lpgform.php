<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

//breakphp

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $date = $_POST['date'];
    $tank1 = $_POST['tank1'];
    $tank2 = $_POST['tank2'];
    $tank3 = $_POST['tank3'];
    $pressure = $_POST['pressure'];
    $leakages = $_POST['leakages'];
    $condition = $_POST['condition'];
    $cleanliness = $_POST['cleanliness'];
    $comment = $_POST['comment'];


    $query = "INSERT INTO `lpgform` (`name`, `date`, `tank1`, `tank2`, `tank3`, `pressure`, `leakages`, `condition`, `cleanliness`, `comment` ) 
    VALUES('$name','$date','$tank1','$tank2','$tank3','$pressure','$leakages','$condition','$cleanliness','$comment')";

if ($query) {
    echo "<script>alert('LPG checklist form has been entered');</script>";
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
                                <h1 class="mainTitle">User | LPG System Checklist</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>User</span>
                                </li>
                                <li class="active">
                                    <span>LPG SYSTEM CHECKLIST</span>
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
                                                        <label for="CkecklistDate">
                                                            Date
                                                        </label>
                                                        <input class="form-control datepicker" name="date" required="required" data-date-format="yyyy-mm-dd">

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="tank">
                                                            Level of LPG
                                                        </label>
                                                        <input type="number" class="form-control" name="tank1" placeholder="Tank1" required>
                                                        <br>
                                                        <input type="number" class="form-control" name="tank2" placeholder="Tank2" required>
                                                        <br>
                                                        <input type="number" class="form-control" name="tank3" placeholder="Tank3" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="pressure">
                                                            Line Pressure
                                                        </label>
                                                        <select name="pressure" class="form-control" value="<?php echo ($pressure) ?>">
                                                            <option value="Good State"> Good State</option>
                                                            <option value="Bad State"> Bad State</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="leakages">
                                                            Leakages Around Fitting
                                                        </label>
                                                        <select name="leakages" class="form-control" value="<?php echo ($leakages) ?>">
                                                            <option value="Yes"> Yes</option>
                                                            <option value="No"> No</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="condition">
                                                            Equipment/Compoents Condition
                                                        </label>
                                                        <select name="condition" class="form-control" value="<?php echo ($condition) ?>">
                                                            <option value="Good State"> Good State</option>
                                                            <option value="Bad State"> Bad State</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cleanliness">
                                                            Cleanliness of Yard
                                                        </label>
                                                        <select name="cleanliness" class="form-control" value="<?php echo ($cleanliness) ?>">
                                                            <option value="Good State"> Good State</option>
                                                            <option value="Bad State"> Bad State</option>
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