<?php
    include "Conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Student Eno</td>
            <td>Student Name</td>
            <td>Student Division</td>
            <td>Student Branch</td>
        </tr>
        <?php

            $sel="select * from student";

            $ex=$conn->query($sel);

            while($data=$ex->fetch_object())
            {
                ?>
                <tr>
                    <td><?php echo $data->Eno ?></td>
                    <td><?php echo $data->Sname ?></td>
                    <td><?php echo $data->Division ?></td>
                    <td><?php echo $data->Branch ?></td>
                    <td><a href="Select.php?Eno=<?php echo $data->Eno; ?>">DELETE</a></td>
                    <td><a href="Update.php?Eno=<?php echo $data->Eno; ?>">UPDATE</a></td>
                </tr>
                <?php
            }
            ?>
    </table>
    <?php
        if (isset($_REQUEST['Eno'])) {
            
            $del="delete from student where Eno =".$_REQUEST['Eno'];

            $ex1=$conn->query($del);

            header("location:Select.php");
        }
    
    
    
    ?>
</body>
</html>
