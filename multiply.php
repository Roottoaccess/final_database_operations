<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        background-color: aqua;
        border: 2px solid black;
        padding: 5px;
    }

    .input {
        margin: 8px;
        padding: 8px;
        border-color: blue;
        border-radius: 8px;
    }

    .btn {
        margin: 8px;
        padding: 8px;
        border-color: red;
        border-radius: 8px;
    }

    table{
        border: 2px solid brown;
        border-radius: 8px;
        padding: 2px;
    }
</style>

<body>
    <center>
        <div class="container">
            <h2><i><b>Multiplication_Table_Generator</b></i></h2>
        </div>
        <br><br>
        <form action="multiply.php" method="post">
            <label for="number">
                <h3><i>Enter the number </i></h3>
            </label>
            <input type="text" name="number" id="number" class="input">
            <br><br>
            <input type="submit" value="Generate" class="btn" name="operation">
        </form>
        <br><br>
        <div class="container">
            <h2><i><b>Multiplication_Table_Generate_Here</b></i></h2>
        </div>
        <br><br>
        <div>
            <h4>
                <table>
                    <tr>
                        <th>
                            <?php
                            if (isset($_POST['operation'])) {
                                $number = $_POST['number'];
                                for ($i = 1; $i <= 10; $i++) {
                                    $result = $number * $i;
                                    echo "$number X $i = $result <br><br>";
                                }
                            }
                            ?>
                        </th>
                    </tr>
                </table>
            </h4>
        </div>
        <br><hr><br>
    </center>
</body>

</html>