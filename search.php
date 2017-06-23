<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <form method="post">
            Search:<input type="text" name="emp_name" >
            <br>
            <input type="submit" name="submit" value="search">
        </form>
        <br>
        <?php
        if (isset($_POST['submit'])) {
            $File = fopen('db.txt', 'r');
            $content = fgets($File);
            $employee = explode(':', $content);
            array_pop($employee);

            $x = 0;

            echo '<table border="1"> <tr>';
            foreach ($employee as $emp) {
                $e = explode(',', $emp);
                if ($e[1] == $_POST['emp_name']) {
                    $x+=1;
                    echo '<td>' . $e[0] . '</td>';
                    echo '<td>' . $e[1] . '</td>';
                    echo '<td>' . $e[2] . '</td>';
                }
            }
            echo '</tr></table> <br>';

            if ($x == 0) {
                echo 'This employee not founded !! <br>';
            }
        }
        echo ' save employees <a href="index.php">HERE</a>';
        ?>
    </body>
</html>