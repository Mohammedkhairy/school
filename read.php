
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
        
            $File = fopen('db.txt', 'r');
            $content = fgets($File);
            $newcontent = explode(':', $content);
            array_pop($newcontent);
            echo '<table border="1" >';
            echo "<tr><th>ID</th><th>Name</th><th>Salary</th></tr>";
            foreach ($newcontent as $key) {
                               if ($emp[1] == $_POST['emp_name']) {

                    echo "
            <tr>
            <td style='padding:2px 2px 2px 2px'> $emp[0] </td>
            <td style='padding:5px 5px 5px 5px'> $emp[1] </td>
            <td style='padding:5px 5px 5px 5px'> $emp[2] </td>
            </tr>";
                }
            }
            echo'</table><br>';
            echo 'save employees <a href="index.php">HERE</a>';
        
        ?>
    </body>
</html>


