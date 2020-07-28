<?php

$err_conn="cannot connect";
$conn = mysqli_connect("localhost","root","","project");
if($conn){
	//echo "WELCOME!  ";
}
	//echo "";
$name = $_POST["wid"];
$password = $_POST["wpass"];

if(isset($_POST["submit"])) 
{
$name = $_POST["wid"];
$password = $_POST["wpass"];
$name = mysqli_real_escape_string($conn, $name);
$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);


$sql4="SELECT w_id FROM warden WHERE w_id='$name'";

$result=mysqli_query($conn,$sql4);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) == 1)
{

//$_SESSION['username'] = $name; // Initializing Session
//header("location: gp.php"); // Redirecting To Other Page
	echo "GP no.   Regno    Leave Date     Leave time     Arrival Date     Arrival Time     Reason<hr> ";
	echo nl2br("\n");
	$sql5 = "SELECT * from gatepass";
	$result=mysqli_query($conn,$sql5);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	while ($row = mysqli_fetch_assoc($result))
	{
		$gate = $row["gp_no"];
		$rno = $row["user"];
		$dtl = $row["date_time_leave"];
		$dtc = $row["date_time_coming"];
		$rsn = $row["reason"];
		$tol = $row["time_leave"];
		$toc = $row["time_coming"];
		//$rno = $row["regno"];
		echo "<pre>  </pre>".$gate." ".$rno." " .$dtl." ".$tol." ".$dtc." ".$toc." ".$rsn."  "."<hr>";
	}
}
else
{
	echo "Incorrect username or password.";
}

}
//else
//{
//	echo "Not Connected";
//}
//echo "Hi! "; 
?>