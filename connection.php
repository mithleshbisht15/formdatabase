<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "organization";

$con = mysqli_connect($server, $username, $password, $database);

if($con)
{
    echo "connection succesfull";

}else{
    echo "no connection";
}

?>