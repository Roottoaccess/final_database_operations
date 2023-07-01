<?php
require("db_config.php");
# This is the operation page and here we will control all the operations of database

# Writing the insertion code

if($_POST)
{
    if($_POST['operation'] == 'submit'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $text = $_POST['text'];

        # Writing the sql query for inserting the data
        $sql = "insert into student(name,email,department,text)values('$name','$email','$department','$text')";

        if(mysqli_query($conn , $sql)){
            $location = "todo.php";
            header("Location:$location");
        }
        
    }
    if($_POST['operation'] == 'delete')
    {
        $id = $_POST['id'];

        # Writing the sql query to delete
        $sql = "delete from student where id = $id";

        if(mysqli_query($conn , $sql))
        {
            $location = "todo.php";
            header("Location:$location");
        }
    }
    if($_POST['operation'] == 'update'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $text = $_POST['text'];

        # Writing the sql query to update
        $sql = "update student set name = '$name' , email = '$email' , department = '$department' , text = '$text' where id = $id";
        if(mysqli_query($conn , $sql)){
            $location = "todo.php";
            header("Location:$location");
        }
    }
}
?>