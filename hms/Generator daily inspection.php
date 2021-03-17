<!-- <?php
		/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "");

		// Check connection
		if ($link === false) {
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// Print host information
		// echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
		?>

die(); -->



<!DOCTYPE html>
<html>

<head>
	<title>ugmc_system_checklist</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://loacalhost/bootstrap%20files/bootstrap.min.css">

	<style type="text/css">
		h1 {
			text-align: center;
		}


		form {
			max-width: 400px;
			margin: 1px auto;
			padding: 10px;
		}

		#wrapper {
			border: 1px solid #888;
			display: inline-block;
			padding: 2px;

		}
	</style>

</head>

<body>
	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ugmc_system_checklist";

	$name = "";
	$date = "";
	$running_hours = "";
	$generator_condition = "";
	$shed_condition = "";
	$fuel_tank_level = "";
	$fuel_leakage = "";
	$fuel_cap = "";
	$motor_oil_level = "";
	$motor_oil_condition = "";
	$radiator_leakage = "";
	$radiator_coolant = "";
	$battery_connection = "";
	$battery_water_level = "";
	$battery_charger = "";
	$leakages = "";
	$exhuast_system = "";
	$auto_start = "";
	$condition_of_tools_and_equipments = "";
	$wrenches = "";
	$fire_extinguisher_present = "";
	$fire_extinguisher_working = "";
	$first_aid_kit_present = "";
	$first_aid_kit_complete = "";
	$water_decanter = "";
	$documents = "";
	$generator_log_present = "";
	$daily_check_form_present = "";
	$mamnuals_present = "";
	$start_engine = "";
	$pre_heating_works = "";
	$motor_starts_easily = "";
	$oil_pressure_ok = "";
	$battery_charging = "";
	$unusual_smell = "";
	$unusual_light = "";
	$unusual_sound = "";
	$comments = "";


	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	//CONNECTION TO MY SQL DATABASE

	try {
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// echo "Connect Successfully";
	} catch (MYSQLi_Sql_Exception $ex) {
		echo ("error in connecting");
	}
	// die();


	//get the data from the form
	function getData()
	{


		$data = array();



		$data[1] = $_POST['name'];
		$data[2] = $_POST['date'];
		$data[3] = $_POST['running_hours'];
		$data[4] = $_POST['generator_condition'];
		$data[5] = $_POST['shed_condition'];
		$data[6] = $_POST['fuel_tank_level'];
		$data[7] = $_POST['fuel_leakage'];
		$data[8] = $_POST['fuel_cap'];
		$data[9] = $_POST['motor_oil_level'];
		$data[10] = $_POST['motor_oil_condition'];
		$data[11] = $_POST['radiator_leakage'];
		$data[12] = $_POST['radiator_coolant'];
		$data[13] = $_POST['battery_connection'];
		$data[14] = $_POST['battery_water_level'];
		$data[15] = $_POST['battery_charger'];
		$data[16] = $_POST['leakages'];
		$data[17] = $_POST['exhuast_system'];
		$data[18] = $_POST['auto_start'];
		$data[19] = $_POST['condition_of_tools_and_equipments'];
		$data[20] = $_POST['wrenches'];
		$data[21] = $_POST['fire_extinguisher_present'];
		$data[22] = $_POST['fire_extinguisher_working'];
		$data[23] = $_POST['first_aid_kit_present'];
		$data[24] = $_POST['first_aid_kit_complete'];
		$data[25] = $_POST['water_decanter'];
		$data[26] = $_POST['documents'];
		$data[27] = $_POST['generator_log_present'];
		$data[28] = $_POST['daily_check_form_present'];
		$data[29] = $_POST['mamnuals_present'];
		$data[30] = $_POST['start_engine'];
		$data[31] = $_POST['pre_heating_works'];
		$data[32] = $_POST['motor_starts_easily'];
		$data[33] = $_POST['oil_pressure_ok'];
		$data[34] = $_POST['battery_charging'];
		$data[35] = $_POST['unusual_smell'];
		$data[36] = $_POST['unusual_light'];
		$data[37] = $_POST['unusual_sound'];
		$data[38] = $_POST['comments'];



		return $data;
	}
	//insert data

	if (isset($_POST['insert'])) {
		$info = getdata();

		$insert_query = "INSERT INTO `generator_daily_inspection` (`name`, `date`, `running_hours`, `generator_condition`, `shed_condition`, `fuel_tank_level`, `fuel_leakage`, `fuel_cap`, `motor_oil_level`, `
		motor_oil_condition`,`radiator_leakage`,`radiator_coolant`,`battery_connection`,`battery_water_level`,`battery_charger`,`leakages`,`exhuast_system`,`auto_start`,`condition_of_tools_and_equipments`,`wrenches`,`fire_extinguisher_present`,`fire_extinguisher_working`,`first_aid_kit_present`,`first_aid_kit_complete`,`water_decanter`,`documents`,`generator_log_present`,`daily_check_form_present`,`mamnuals_present`,`start_engine`,`pre_heating_works`,`motor_starts_easily`,`oil_pressure_ok`,`battery_charging`,`unusual_smell`,`unusual_light`,`unusual_sound`,`comment` ) 
	VALUE('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]',`$info[13]',`$info[14]',`$info[15]','$info[16]','$info[17]','$info[18]','$info[19]','$info[20]','
      $info[21]','$info[22]','$info[23]','$info[24]','$info[25]','$info[26]','$info[27]','$info[28]','$info[29]','$info[30]','$info[31]','$info[32]','$info[33]','$info[34]','$info[35]','$info[36]','$info[37]','$info[38]')";

		die($insert_query);
		try {
			$insert_result = mysqli_query($conn, $insert_query);
			if (mysqli_affected_rows($conn) > 0) {
				echo ("data inserted successfully");
			} else {
				echo ("data are not inserted");
			}
		} catch (Exception $ex) {
			echo ("error inserted " . $ex->getMessage());
		}
	}

	?>
	<h1>Generator Daily Inspection</h1>
	<section class="container-blue-text">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">

					<form action="" method="post">

						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="Name" class="col-sm-2 col-form-label">Personnel Name:</label>
								<input type="text" class="form-control" name="name" placeholder="enter personnel name" value="<?php echo ($name) ?>" />
							</div>
							<br>
						</div>

						<label for="Date">Date:</label>
						<input type="date" id="Date" name="date" value="<?php echo ($date) ?>" />
						<br /><br>

						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="running_hours" class="col-sm-2 col-form-label">Running Hours:</label>
								<input type="number" class="form-control" name="running_hours" placeholder="check the hourly gauge and enter amount" value="<?php echo ($running_hours) ?>" />
							</div>
							<br>
						</div>

						<div class="form-group-row">
							<label for="generator_condition">Generator is clean and in good condition:</label>
							<input type="radio" name="generator_condition" checked>Yes</input>
							<input type="radio" name="generator_condition" value="<?php echo ($generator_condition) ?>">No</input>
						</div>
						<br>
						<div class="form-group-row">
							<label for="shed_condition">Shed is clean and in good condition:</label>
							<input type="radio" name="shed_condition" checked>Yes</input>
							<input type="radio" name="shed_condition" value="<?php echo ($shed_condition) ?>">No</input>
						</div>
						<br>
						<div class="form-group-row">
							<label for="fuel_tank_level">Fuel tank at least 50%:</label>
							<input type="radio" name="fuel_tank_level" checked>Yes</input>
							<input type="radio" name="fuel_tank_level" value="<?php echo ($running_hours) ?>">No</input>
						</div>
						<br>
						<div class="form-group-row">
							<label for="fuel_leakage">Fuel leaks?:</label>
							<input type="radio" name="fuel_leakage" checked>Yes</input>
							<input type="radio" name="fuel_leakage">No</input>
						</div>
						<br>
						<div class="form-group-row">
							<label for="fuel_cap">Fuel cap on?:</label>
							<input type="radio" name="fuel_cap" checked>Yes</input>
							<input type="radio" name="fuel_cap">No</input>
						</div>
						<br>
						<div class="form-group-row">
							<label for="motor_oil_condition">Motor oil condition?:</label>
							<input type="radio" name="motor_oil_condition" checked>Yes</input>
							<input type="radio" name="motor_oil_condition">No</input>
						</div>
						<br>
						<div class="form-group-row">
							<label for="radiator_leakage">Radiator, no leaks:</label>
							<input type="radio" name="radiator_leakage" checked>Yes</input>
							<input type="radio" name="radiator_leakage">No</input>
						</div>
						<br>

						<!-- <div class="form-group-row">
							<div class="col-xs-6">
								<label for="pressure" class="col-sm-6 col-form-label">Line Pressure:</label>
								<select name="pressure" class="form-control" value="<?php echo ($pressure) ?>">
									<option value="Good State"> Good State</option>
									<option value="Bad State"> Bad State</option>
								</select>
							</div>
						</div>
						<br /> -->


						

						<div class="form-group-row">								<label for="condition" class="col-sm-6 col-form-label"> Status Equipment/Component</label>
								<select name="condition" class="form-control" value="<?php echo ($condition) ?>">
									<option value="Good State"> Good State</option>
									<option value="Bad State"> Bad State</option>
								</select>
							</div>
						</div>
						<br />

						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="Cleanliness" class="col-sm-3 col-form-label">Cleaniness Around Yard</label>
								<select name="cleanliness" class="form-control" value="<?php echo ($cleanliness) ?>">
									<option value="Good State"> Good State</option>
									<option value="Average">Average State</option>
									<option value="Bad State"> Bad State</option>

								</select>
							</div>
						</div>
						<br>
						<label for="comment" class="col-sm-3 col-form-label">Comment</label>
						<br>
						<textarea rows="4" cols="50" name="comment" value="<?php echo ($comment) ?>">
								Enter comments here...</textarea>
						<br><br>

						<input type="submit" class="btn btn-block btn-success" name="insert" value="Add">

					</form>
				</div>
			</div>
		</div>


	</section>

</body>

</html>