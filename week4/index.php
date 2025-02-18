<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 Exercise</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div id="container">
<h1>User Data </h1>
<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}
// Get the list of users
$users = getUsers();


for($i=0;$i<5;$i++){
    echo '<div class="info">';
    echo '<strong>'.$users[$i]['name'].'</strong>'.'<br/>';
    echo $users[$i]['username']."<br/>";
    echo '<a href="mailto"/>'.$users[$i]['email'].'</a>'.'</br></br>';
    echo '<button class="infobutton">Message Me</button>';
    echo '</div>';
}
?>  
</div>

</body>
</html>