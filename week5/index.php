<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5 exercise</title>
</head>
<body>
    <?php
        // connection string
        // 
        $connect = mysqli_connect('localhost','root','root','csv_db 6');

        // error handling if database doesnt connect

        if(!$connect){
            die('Connection Failed: '.mysqli_connect_error()); // will spit out error information
        }
        else{
            echo 'Connection Successful<3';
        }

        $query = 'SELECT * FROM colors';
        $colors = mysqli_query($connect, $query); // function to execute query parameters (connection string, query)
       

        while ($color = mysqli_fetch_assoc($colors)){
            echo '<div style="width: auto; height: 50px; background-color:'. $color['COL 2'] .';">'.$color['COL 1'].'</div>';
        }

        





    ?>
</body>
</html>