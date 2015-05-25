<?php

session_start();

$id =$_POST['id'];
// to make a connection with database
$conn = mysqli_connect("localhost", "root" , "", "fwis") or die(mysqli_error($conn));
//to select the targeted databse

// to create a query to be executed in sql
//$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$query = "DELETE FROM fruit WHERE id=$id" or die("Error in the consult.." . mysqli_error($conn));
//to run sql query in database
$result = $conn->query($query); 

$errmsg_arr[] ='Fruit  successfully deleted.';
$_SESSION['errors'] = $errmsg_arr;
session_write_close();
header("location: list.php");
	

?>