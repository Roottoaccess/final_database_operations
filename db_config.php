<?php
# Here we will connect the database to the todo.php page

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "database";

# Creating the connection
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

# Checking if the database is connected or not ?

if(!$conn){
    die("404 Database not found".mysqli_connect_error());
}
#else{
#    echo "200 ok !";
#}

// Connected successfully !
?>