<!-- Footer -->
<?php  include "../header.php" ?>
<?php 
     if(isset($_GET['delete']))

     {
        //print_r($_GET['delete']); die;
         $userid= $_GET['delete'];
         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM users WHERE id = {$userid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
?>
  <!-- Footer -->
<?php include "footer.php" ?>