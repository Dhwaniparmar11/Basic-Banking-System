<?php



$con = new mysqli('localhost','root','','customers') or die(mysqli_error($con));

if(!$con){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

/*$select_query="SELECT name, email, amount FROM customers";
$select_query_result=  mysqli_query($con, $select_query) or die(mysqli_error($con));
$row=  mysqli_fetch_array($select_query_result);*/


/*echo $row[0]."<br/>";
echo $row[1]."<br/>";
echo $row[2]."<br/>";*/
?>