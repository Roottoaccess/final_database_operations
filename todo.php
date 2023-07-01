<?php
    require('db_config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main.com</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: bisque;
    }

    .container {
        background-color: aquamarine;
        color: black;
        border: 2px solid black;
        /* margin: 5px; */
        padding: 5px;
    }

    .input{
        padding: 8px;
        margin: 4px;
        border-radius: 6px;
        margin-right: 8px;
    }

    .btn{
        padding: 12px;
        margin: 8px;
        border-radius: 8px;
        border-color: blue;
    }

    table{
        border: 4px solid brown;
    }
</style>

<body>
    <center>
        <div class="container">
            <h2><b><i>Database_operation_program</i></b></h2>
        </div>
        <br><br>
        <h3>
            <form action="opertaion.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="name"><b><i>Enter your name: </i></b></label>
                        </td>
                        <th>
                            <input type="text" name="name" id="name" class="input">
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <label for="email"><b><i>Enter your email: </i></b></label>
                        </td>
                        <th>
                            <input type="email" name="email" id="email" class="input">
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <label for="department"><b><i>Choose your department: </i></b></label>
                        </td>
                        <th>
                            <select name="department" id="department" class="input">
                                <option value="">--SELECT--</option>
                                <option value="web_development">Web_Development</option>
                                <option value="Python_Developer">Python_Developer</option>
                                <option value="Machine_Learning">Machine_Learning</option>
                                <option value="Java_Developer">Java_Developer</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <label for="text"><b><i>Write something about you: </i></b></label>
                        </td>
                        <th>
                            <textarea name="text" id="text" cols="50" rows="10" class="input"></textarea>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <label for="btn"><b><i>click_here_to_submit -> </i></b></label>
                        </td>
                        <th>
                            <input type="submit" value="submit" name="operation" class="btn">
                        </th>
                    </tr>
                </table>
            </form>
        </h3>
    </center>
</body>

</html>