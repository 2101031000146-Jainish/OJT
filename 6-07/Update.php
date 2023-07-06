<?php 
    include "Conn.php";
?>

<?php
    $sel="select * from student where Eno=".$_REQUEST['Eno'];

    $ex=$conn->query($sel);

    $data=$ex->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="Eno" placeholder="Enter Your Enrollment no" value="<?php echo $data->Eno ?>">
        <input type="text" name="Sname" placeholder="Enter Your Name" value="<?php echo $data->Sname ?>">
        <input type="text" name="Division" placeholder="Enter Your Division" value="<?php echo $data->Division ?>">
        <input type="text" name="Branch" placeholder="Enter Your Branch" value="<?php echo $data->Branch ?>">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_REQUEST['submit'])) 
        {
            $up="UPDATE student SET Eno='".$_REQUEST['Eno']."',Sname='".$_REQUEST['Sname']."',Division='".$_REQUEST['Division']."',Branch='".$_REQUEST['Branch']."'";
        }

        $ex=$conn->query($up);

        if ($ex) {

            header("location:Select.php");
            
        }
        else{

            echo "Error";
        }
    ?>
</body>
</html>