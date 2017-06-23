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
        <?php
        if ($_POST['NO'] == "") {
            echo 'Write the ID of the employee';
        } elseif ($_POST['NAME'] == "") {
            echo 'Write the Name of the employee';
        } elseif ($_POST['SALARY'] == "") {
            echo 'Write the salary of the employee';
        } else {



            $File = fopen('db.txt', 'r');
            $content = fgets($File);
            $newcontent = explode(':', $content);
            array_pop($newcontent);
            $x = 0;

            foreach ($newcontent as $key) {
                $emp = explode(',', $key);
                if ($emp[0] == $_POST['NO']) {
                    $x = $x + 1;
                }
            }


            if ($x == 0) {
                $file = fopen('db.txt', 'a');
                fwrite($file, $_POST['NO'] . ',' . $_POST['NAME'] . ',' . $_POST['SALARY'] . ':');
                fclose($file);
                echo "successfully added </br>";
                echo 'save more employees <a href="index.php">HERE</a>';
                echo '<br>To see our employees just click <a href="read.php">HERE </a>';
                echo '<br> To search for an employee just click <a href="search.php">search </a>';
            } else {
                echo'SORRY.. The ID you have entered is already exist';
            }
        }
        ?>
    </body>
</html>
