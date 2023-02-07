<?php

session_start();
$_SESSION['visit']= 1;

echo "session is created";
// session_destroy();
// echo "session is destroyed";

?>