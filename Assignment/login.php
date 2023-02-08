
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>

    <form method="POST">
    Username : <input type="text" name="username"> <br> <br>
    Password : <input type="password" name="password"> <br> <br>
    <button name="login">Log In</button>
    </form>
</body>
</html>

<?php
include "connect.php";

 if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "select * from credentials where usname='$username'
    and pw ='$password'limit 1 ";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1) 
    {
    ?>
        <script>
        window.open('form.php',"_self");   
        </script>

        <?php
    }
    else{
        echo "user name and password mismatch";
    }
 }
 


?>