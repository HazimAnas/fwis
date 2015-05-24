<?php
/*
Filename: sessionHnadler.php
Purpose: kau tahu la jim.
*/
//Start session
session_start();

$id =$_POST['id'];
//Validation error flag
$errflag = false;

//Input Validations
if($_POST['name'] == '') {
	$errmsg_arr[] = 'Fruit name missing';
	$errflag = true;
}

if($_POST['amount'] == '') {
	$errmsg_arr[] = 'Fruit amount missing';
	$errflag = true;
}
/*else if(!is_int($_POST['amount'])) {
	$errmsg_arr[] = 'Fruit amount is not an integer.';
	$errflag = true;
}*/

if($_POST['min_amount'] == '') {
	$errmsg_arr[] = 'Fruit minimum amount missing';
	$errflag = true;
}
/*else if(!is_int($_POST['min_amount'])) {
	$errmsg_arr[] = 'Fruit minimum amount is not an integer.';
	$errflag = true;
}*/

if($_POST['price'] == '') {
$errmsg_arr[] ='Fruit price missing' ; 
$errflag = true;
}
else if (!is_numeric($_POST['price'])) {
	$errmsg_arr[] = 'Fruit price is not a number.';
	$errflag = true;
}

//if there are input validations,redirect back to login form
if($errflag) {
	$_SESSION['errors'] = $errmsg_arr;
	session_write_close();
	header("location: view.php/?id=$id");
	exit();	
}
// to make a connection with database
$conn = mysqli_connect("localhost", "root" , "", "fwis") or die(mysqli_error($conn));
//to select the targeted databse

// to create a query to be executed in sql
$name = $_POST['name'];
$amount = $_POST['amount'];
$min_amount = $_POST['min_amount'];
$price = $_POST['price'];

//$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$query = "UPDATE fruit SET name='$name', amount='$amount', min_amount='$min_amount', price='$price' WHERE id=$id" or die("Error in the consult.." . mysqli_error($conn));
//to run sql query in database
$result = $conn->query($query); 

$errmsg_arr[] ='Fruit  successfully updated.';
$_SESSION['errors'] = $errmsg_arr;
session_write_close();
header("location: view.php/?id=$id");
	

?>