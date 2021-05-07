<?php

include 'connection.php';

if(isset($_POST["submit"]))
{
	$uname = $_POST["uname"];
	$email = $_POST["email"];
	$phno = $_POST["phno"];
	$address = $_POST["address"];

	$insertquery = " insert into employee(uname, email, phno, address) values('$uname', '$email',    '$phno', '$address')";

	$res = mysqli_query($con, $insertquery);

	if($res)
{
	echo "Successfully submitted";
}else{
	echo "no connection";
}
}

?>