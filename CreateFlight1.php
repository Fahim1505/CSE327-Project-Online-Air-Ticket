<?php 

session_start();
// Check if the session variable 'Admin' is set, indicating the user is an admin
if(!isset($_SESSION['Admin']))
// Include the database connection file
require_once('connection.php');
// Retrieve form data sent via POST method
	$flightno=$_POST['flightno'];
	$dep=$_POST['dep'];
	$des=$_POST['des'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$eco_seat=$_POST['eco_seat'];
	$eco_price=$_POST['eco_price'];
	$preeco_seat=$_POST['preeco_seat'];
	$preeco_price=$_POST['preeco_price'];
	$first_seat=$_POST['first_seat'];
	$first_price=$_POST['first_price'];
	$bus_seat=$_POST['bus_seat'];
	$bus_price=$_POST['bus_price'];
	$cur_date=date("Y-m-d");
// Check if any required form fields are empty
	if(empty($flightno)||empty($dep)||empty($des)||empty($date)||empty($time)||empty($eco_seat)||empty($eco_price)||empty($preeco_seat)||empty($preeco_price)||empty($first_seat)||empty($first_price)||empty($bus_seat)||empty($bus_price)){
 		// Redirect to the flight creation page with an error message
        header("location:CreateFlight.php?Empty=please fill in the blanks");
 		die;
 	}
// Check if the provided flight date is in the past or today
 	if($cur_date>=$date){
        // Redirect to the flight creation page with an invalid date error message
 		header("location:CreateFlight.php?Invalid=Not valid Date");
 		die;
 	}


 	else{
// SQL query to insert flight details into the 'flight' table
 		$sql="INSERT INTO flight (flightno, deperture,destination, date, time)
				VALUES ('$flightno', '$dep', '$des','$date', '$time')";

		// SQL query to insert seat details into the 'seat' table
		$sql1="INSERT INTO seat (flightno, eco_seat, eco_price, preeco_seat, preeco_price, first_seat,first_price, bus_seat, bus_price, cur_eco, cur_preco, cur_first, cur_bus)
				VALUES ('$flightno', '$eco_seat', '$eco_price','$preeco_seat', '$preeco_price', '$first_seat', '$first_price', '$bus_seat','$bus_price', '$eco_seat', '$preeco_seat', '$first_seat', '$bus_seat')";
			
// Execute both SQL queries and check if they are successful
    	if (mysqli_query($con, $sql) && mysqli_query($con, $sql1)) {
       	header("location: Dashboard.php");
    	die;
 		}
 	}