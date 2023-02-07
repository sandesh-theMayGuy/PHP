<html>

<head>
    <style>
        form {
            padding: 10px;
            box-shadow: 20px 10px 2px;
            color: white;
            background-color: black;
            width: 70%;
            margin: auto;
            border-radius: 10px 20px;
        }

        body {
            background-color: black;
            color: white;
        }

        p {
            color: red;
            margin: 0px;
        }
    </style>
</head>

<body>
    <?php
    $name = $email = $phone = $pass = $cpass = "";
    $Nameerr = $Emailerr = $Phoneerr = $Passworderr = $CPassworderr = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //Name validation
        if (empty($_POST['Name'])) {
            $Nameerr = "Name cant be empty";
        } else {
            $name = input_data($_POST['Name']);
            if (!preg_match('/^[a-zA-Z]{7}$/', $name)) {
                $Nameerr = "name format should be matched";
            }
        }
        //Email validation
        if (empty($_POST['Email'])) {
            $Emailerr = "Email cant be empty";
        } else {
            $email = input_data($_POST["Email"]);
            if (!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', $email)) {
                $Emailerr = "email format should be matched";
            }
        }

        //Phone validation
        if (empty($_POST['Phone'])) {
            $Phoneerr = "Phone cant be empty";
        } else {
            $phone = input_data($_POST['Phone']);
            if (!preg_match('/^[0-9]{10}$/', $phone)) {
                $Phoneerr = "Phone format should be matched";
            }
        }
        if (empty($_POST['Pass'])) {
            $Passworderr = "Password  cant be empty";
        } else {
            $pass = input_data($_POST['Pass']);
            if (!preg_match('/^[A-Z]{4}[\$\@\#]{3}[0-9]{3}$/', $pass)) {
                $Passworderr = "Password format should be matched";
            }
        }
        if (empty($_POST['CPass'])) {
            $CPassworderr = "confirm Password  cant be empty";
        } else {
            $cpass = input_data($_POST['CPass']);
            if (!preg_match('/^[A-Z]{4}[\$\@\#]{3}[0-9]{3}$/', $cpass)) {
                $CPassworderr = "Password and confirm password mismatch";
            }
        }
    }

    function input_data($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h4> Registration</h4>
        <p>* required</p>
        Name:
        <input type="text" name="Name" id="" placeholder="simanta">
        <p>*
            <?php echo $Nameerr ?>
        </p>
        Email:
        <input type="text" name="Email" placeholder="sim.kasaju@gmail.com">
        <p>*
            <?php echo $Emailerr ?>
        </p>
        Phone:
        <input type="number" name="Phone" placeholder="0123456789">
        <p>*
            <?php echo $Phoneerr ?>
        </p>
        Password:
        <input type="password" name="Pass" placeholder="Password">
        <p>*
            <?php echo $Passworderr ?>
        </p>
        Confirm Password:
        <input type="pasword" name="CPass" placeholder="Confirm password">
        <p>*
            <?php echo $CPassworderr ?>
        </p>

        <input type="submit" name="submit" id="">
       
    </form>

    <br><br><br>
    <?php

    if (isset($_POST['submit'])) {
        if ($Nameerr == "" && $Emailerr == "" && $Phoneerr == "" && $Passworderr == "" && $CPassworderr == "")
        {
            echo "you are succesfully registerd";
            echo "<br>";
            echo "Name:" . $name;
            echo "<br>";
            echo "Email:". $email;
            echo "<br>";
            echo "Phone:" . $phone;
            echo "<br>";
        }
        else{
            echo "plz fill up the form correctly";
        }
    }
    ?>
</body>
</html>