<!-- <?php
session_start();
if (isset($_SESSION['visit']))

    $_SESSION['visit'] += 1;
echo "You have visited". $_SESSION['visit']."times";

?> -->


$server = 'localhost';
$user = 'root';
$password = '';
$db = 'Mydb';
$conn = mysqli_connect($server, $user, $password,$db);
if(!$conn)
{
    die("not connected".mysqli_error($conn));
}