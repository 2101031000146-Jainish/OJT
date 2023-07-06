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
    <form action="">
        <input type="number" name="Eno" placeholder="Enter Your Enrollment no">
        <hr>
        <input type="text" name="Sname" placeholder="Enter Your Name">
        <hr>
        <input type="text" name="Division" placeholder="Enter Your Division">
        <hr>
        <input type="text" name="Branch" placeholder="Enter Your Branch">
        <hr>
        <button type="submit" name="submit">Submit</button>

       <button name="data">Show Database</button>
       <button name="data">Delete</button>
       <button name="data">Update</button>
    </form>
    <?php
        if (isset($_REQUEST['submit'])) {
            
            $ins="insert into student values('".$_REQUEST['Eno']."','".$_REQUEST['Sname']."','".$_REQUEST['Division']."','".$_REQUEST['Branch']."')";

            $ex=$conn->query($ins);

            if($ex)
            {
                echo "Inserted";
            }
            else
            {
                echo "Error";
            }
        }

        if(isset($_REQUEST['data']))
        {

            header("location:Select.php");
        }
    ?>
</body>

</html>