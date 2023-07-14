<?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database="mydb";

      // Create connection
      $conn = new mysqli($servername, $username, $password,$database);

      if (isset($_REQUEST['submit'])) {
          
          $ins="insert into feedback values('".$_REQUEST['Name']."','".$_REQUEST['Email']."','".$_REQUEST['Subject']."','".$_REQUEST['Message']."')";

          $ex=$conn->query($ins);

          if($ex)
          {
              echo "Inserted";
          }
          else
          {
              echo "Err";
          }
      }

      if(isset($_REQUEST['data']))
      {

          header("location:Select.php");
      }
  ?>
</body>

</html>

