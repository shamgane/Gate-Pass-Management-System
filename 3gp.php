<?php
session_start();
//echo $_SESSION["regno"];
?>
<!DOCTYPE html>
<html>
<title>Student Registration</title>
<head>
</head>
<body style="background-color: #b0d455">
<pre>
<label><h1>GATE PASS DETAILS</h1></label>
<hr>
<form method="post" action="gp.php">

<label>Date of leaving</label>
<input type="date" name="DOL"><br>
<label>Time of leaving</label>
<input type="time" name="TOL"><br>
<label>Date of arrival</label>
<input type="date" name="DOA"><br>
<label>Time of arrival</label>
<input type="time" name="TOA"><br>
<label>Room Number </label>
<input type="number" name="rno"><br>
<label>Reason
<input type="text" name="reas">
</label>
<label>Phone number</label>
<input type="number" name="phno"><br>

<label>
Issued by 
 <select name="isby">Select
  <option  value="none ">none </option>
  <option  value="Ms.Latha ">Ms.Latha </option>
  <option  value="Ms.Devaki ">Ms.Devaki </option>
  <option  value="Ms.Leelavathi ">Ms.Leelavathi</option>
  <option  value="Ms.Parvathi">Ms.Parvathi</option>
</select> <br>
</label>
<input type="submit" name="submit"><br>
</form>


</pre>
</body>
</html>