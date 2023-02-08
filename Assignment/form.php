<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name : <input type="text" name="name"> <br><br>

        Faculty : <input type="text" name="faculty"> <br><br>

        Sem : <input type="number" name="sem"> <br><br>

        College : <input type="text" name="college"> <br> <br>

        <button name="submit">Submit</button>


        <?php

            include "connect.php";

            if(isset($_POST["submit"]))
            $name = $_POST["name"];
            $faculty = $_POST["faculty"];
            $sem = $_POST["sem"];
            $college = $_POST["college"];

            $sql = "insert into data values('$name','$faculty' , $sem , '$college')";

            $result = mysqli_query($conn , $sql);

            if($result){
                ?>


                    <script>
                        window.open("view.php","_self"); 
                    </script>

            <?php
            }

            else{
                echo "Could not insert data";
            }

        ?>
    </form>
</body>
</html>