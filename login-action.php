<?php
/*
Filename: sessionHnadler.php
Purpose: kau tahu la jim.
*/
//Start session
session_start();

//Validation error flag
$errflag = false;

//Input Validations
if($_POST['username'] == '') {
	$errmsg_arr[] = 'Login ID missing';
	$errmsg = true;
}
if($_POST['password'] == '') {
$errmsg_arr[] ='Password missing' ; 
$errflag = true;

}

//if there are input validations,redirect back to login form
if($errflag) {
	$_SESSION['errors'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();	
}
// to make a connection with database
$conn = mysqli_connect("localhost", "root" , "", "fwis") or die(mysqli_error($conn));
//to select the targeted databse

// to create a query to be executed in sql
$username = $_POST['username'];
$password = $_POST['password'];
//$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'" or die("Error in the consult.." . mysqli_error($conn));
//to run sql query in database
$result = $conn->query($query); 
//$result = mysql_query($query, $conn) or die(mysql_error());

//Check whether the query was successful or not 


//consultation:



//execute the query.


if(isset($result))  {
	
	if(mysqli_num_rows($result) == 1) {
		//Login Successful
		session_regenerate_id();
		$member = mysqli_fetch_assoc($result); 
		$_SESSION['MEMBER_ID'] = $member['id'] ;
		$_SESSION['FIRST_NAME'] = $member['firstname'];
		$_SESSION['LAST_NAME'] = $member['lastname'] ;
		$_SESSION['STATUS'] = true;
		session_write_close();
		header("location: home.php");
		exit();	
	}
	  else {
		//Login failed
         header("index.php");
          exit();		 
		  
	  }
	}
	  else{
		  die("Query failed");
	 }
	

?>