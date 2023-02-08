<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1px">
    <tr>
        <th>Name</th>
        <th>Faculty</th>
        <th>College</th>
    </tr>


    <?php

    include "connect.php";


    $sql = "select * from data";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num>0){
        while($row=mysqli_fetch_assoc($result))
        {
           ?>
           <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['faculty']?></td>
            <td><?php echo $row['college']?></td>
           </tr>
           <?php
       
        }
    }

    ?>

</table>
</body>
</html>



