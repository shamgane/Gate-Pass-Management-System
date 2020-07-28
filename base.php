<?php
session_start();
$err_conn="cannot connect";
$conn = mysqli_connect("localhost","root","","project");
if($conn){
	//echo "WELCOME!  ";
}
if(isset($_POST["submit"])) 
{
$name = $_POST["username"];
$password = $_POST["password"];
}
$sql="SELECT sname FROM student WHERE regno='$name' && password='$password'";

$result=$conn->query($sql);
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$regno = $row["sname"];
		$_SESSION["regno"] = $regno; // Initializing Session
		//echo $regno;
		header("location: 3gp.php"); // Redirecting To Other Page	
	}
}else
{
	echo "Incorrect username or password.";
}
?>

