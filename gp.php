<?php
session_start();
//$regno = $_SESSION["regno"];
$err_conn="cannot connect";
$conn = mysqli_connect("localhost","root","","project");
if($conn){
	//echo "WELCOME!  ";
}
if(isset($_POST["submit"])) 
	{
	$tol = $_POST["TOL"];
	$toa = $_POST["TOA"];
	$leave_date = $_POST["DOL"];
	$arrive_date = $_POST["DOA"];
	$room = $_POST["rno"];
	$rsn = $_POST["reas"];
	$ph = $_POST["phno"];
	$isby = $_POST["isby"];
	$user=$_SESSION['regno'];
	$sql2 = "INSERT into gatepass values ('','$isby','$tol','$leave_date','$toa','$arrive_date','$rsn','$user')";
	$result=$conn->query($sql2);
	if($result)
	{	
		header("location:2sign_in.html");
	}
	else echo "not ";
}

?>