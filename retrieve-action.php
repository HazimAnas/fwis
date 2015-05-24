
<?php

$conn = mysqli_connect("localhost", "root" , "", "fwis") or die(mysqli_error($conn));
//to select the targeted databse

// to create a query to be executed in sql
//$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$query = "SELECT * FROM fruit" or die("Error in the consult.." . mysqli_error($conn));
//to run sql query in database
$result = $conn->query($query); 
//$result = mysql_query($query, $conn) or die(mysql_error());



if($result !== false)  {
	
for($i = 0; $array[$i] = mysqli_fetch_assoc($result); $i++);
   
// Delete last empty one
array_pop($array);

}	
/*
while($r[]=mysql_fetch_array($sql));

echo "<pre>";
//= Prints $r as array =================//
print_r ($r);
//=============================//
echo "</pre>";
*/
?>