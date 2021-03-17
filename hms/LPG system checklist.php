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
	<title>daily checklist form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://loacalhost/bootstrap%20files/bootstrap.min.css">

	<style type="text/css">
		form {
			max-width: 500px;
			margin: 20px auto;
			padding: 20px;
		}
	</style>

</head>

<body>
	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hms";

	$name = "";
	$date = "";
	$period = "";
	$tank1 = "";
	$tank2 = "";
	$tank3 = "";
	$pressure = "";
	$leakages = "";
	$condition = "";
	$cleanliness = "";
	$comment = "";

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
		$data[3] = $_POST['period'];
		$data[4] = $_POST['tank1'];
		$data[5] = $_POST['tank2'];
		$data[6] = $_POST['tank3'];
		$data[7] = $_POST['pressure'];
		$data[8] = $_POST['leakages'];
		$data[9] = $_POST['condition'];
		$data[10] = $_POST['cleanliness'];
		$data[11] = $_POST['comment'];


		return $data;
	}
	//insert data

	if (isset($_POST['insert'])) {
		$info = getdata();

		$insert_query = "INSERT INTO `daily_checklist` (`name`, `date`, `period`, `tank1`, `tank2`, `tank3`, `pressure`, `leakages`, `condition`, `
		cleanliness`, `comment` ) 
	VALUE('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[10]')";

		// die($insert_query);




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
	<h1>LPG System Daily Checklist</h1>
	<section class="container-blue-text">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">

					<form action="" method="post">

						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="Name" class="col-sm-2 col-form-label">Personnel Name</label>
								<input type="text" class="form-control" name="name" placeholder="enter personnel name" value="<?php echo ($name) ?>" />
							</div>
							<br />
						</div><br />

						<label for="Date">Date:</label>
						<input type="date" id="Date" name="date" value="<?php echo ($date) ?>" />
						<br /><br>

						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="period" class="col-sm-2 col-form-label">Period</label>
								<input type="text" class="form-control" name="period" placeholder="enter Period" value="<?php echo ($period) ?>" />
							</div>
						</div>

						<div class="form-group-row">
							<!-- <div class="col-xs-6"> -->
							<h3>Level Of LPG</h3>
							<label for="tank1" class="col-sm-6 col-form-label">Tank 1</label>
							<input type="text" class="form-control" name="tank1" placeholder="10" value="<?php echo ($tank1) ?>" />
							<br /><br>

							<label for="tank2" class="col-sm-6 col-form-label">Tank 2</label>
							<input type="text" class="form-control" name="tank2" placeholder="17" value="<?php echo ($tank2) ?>" />
							<br /><br>

							<label for="tank3" class="col-sm-3 col-form-label">Tank 3</label>
							<input type="text" class="form-control" name="tank3" placeholder="100" value="<?php echo ($tank3) ?>" />
							<br /><br>
						</div><br />

						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="pressure" class="col-sm-6 col-form-label">Line Pressure:</label>
								<select name="pressure" class="form-control" value="<?php echo ($pressure) ?>">
									<option value="Good State"> Good State</option>
									<option value="Bad State"> Bad State</option>
								</select>
							</div>
						</div>
						<br />


						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="Leakages" class="col-sm-6 col-form-label">Leakages around Fittings:</label>
								<select name="leakages" class="form-control" value="<?php echo ($leakages) ?>">
									<option value="Yes"> Yes</option>
									<option value="No"> NO</option>
								</select>
							</div>
						</div>
						<br />

						<div class="form-group-row">
							<div class="col-xs-6">
								<label for="condition" class="col-sm-6 col-form-label"> Status Equipment/Component</label>
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