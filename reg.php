<?php
$err_conn="cannot connect";
$conn = mysqli_connect("localhost","root","","project");

if(isset($_POST["submit"])) 
{

	$name = $_POST["nam"];
	$lname = $_POST["lnam"];
	$regn = $_POST["regno"];
	$dob = $_POST["bday"];
	$adr = $_POST["add"];
	$em = $_POST["email"];
	$phn = $_POST["pno"];
	$room = $_POST["roomno"];
	//echo $name.$lname;
	$sql = "INSERT INTO student VALUES ('$regn','$name', '$name', '$phn', '$dob', '$adr', '$em','$room')";
	$result = $conn->query($sql);
	if($result){}
	echo " Account created successfully !  ";
}
else echo "unsucccesful";


//header("Location:3GatePass.html");
?>