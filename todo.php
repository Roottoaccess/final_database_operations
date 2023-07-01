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

    .input {
        padding: 8px;
        margin: 4px;
        border-radius: 6px;
        margin-right: 8px;
    }

    .btn {
        padding: 12px;
        margin: 8px;
        border-radius: 8px;
        border-color: blue;
    }

    table {
        border: 4px solid brown;
    }

    .btn1 {
        padding: 12px;
        margin: 8px;
        border-radius: 8px;
        border-color: red;
    }
</style>

<body>
    <center>
        <div class="container">
            <h2><b><i>Database_operation_program</i></b></h2>
        </div>
        <br><br>
        <h3>
            <form action="operation.php" method="post">
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
        <br><br>
        <div class="container">
            <h2><b><i>Database_Records_Modify</i></b></h2>
        </div>
        <br><br>
        <div>
            <?php
            # Writing the select query....
            $sql = "select * from student";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <form action="operation.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="input">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="name">Names: </label>
                            </th>
                            <td>
                                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="input">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Emails: </label>
                            </th>
                            <td>
                                <input type="text" name="email" value="<?php echo $row['email']; ?>" class="input">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="department">Departments: </label>
                            </th>
                            <td>
                                <input type="text" name="department" value="<?php echo $row['department']; ?>" class="input">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="text">Yourselfs: </label>
                            </th>
                            <td>
                                <input type="text" name="text" value="<?php echo $row['text']; ?>" class="input">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="update" name="operation" class="btn1">
                            </td>
                            <th>
                                <input type="submit" value="delete" name="operation" class="btn1">
                            </th>
                        </tr>
                    </table>
                    <br>
                </form>
            <?php }
            ?>
        </div>
    </center>
</body>

</html>