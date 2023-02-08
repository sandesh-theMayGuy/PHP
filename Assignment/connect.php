
<?php
$server = "localhost";
$user = "root";
$password = "";
$database="login";
$conn = mysqli_connect($server, $user, $password,$database);
if(!$conn)
{
    die("Connection could not be established".mysqli_connect_error());

}



