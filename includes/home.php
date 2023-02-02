<!-- Header -->
<?php include "../header.php"?>
 
  <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New User</a>
 
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Username</th>
              <th  scope="col">Email</th>
              <th  scope="col"> Password</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
  
          <?php
            $query="SELECT * FROM users";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database
            
            //$row= mysqli_fetch_assoc($view_users);
            //print_r($row);
            //die;
            $i = 1;

 
            //  displaying all the data retrieved from the database using while loop
            $sql = "SELECT * FROM users";
            $result = $conn -> query($sql);

            // Fetch all
            $output = $result -> fetch_all(MYSQLI_ASSOC);
            print_r($output[1]['username']);

            while($row= mysqli_fetch_assoc($view_users)){
             // print_r($row['username']);
              $id = $row['ID'];                      
              $user = $row['username'];        
              $email = $row['email'];         
              $pass = $row['password'];        
 
              echo "<tr >";
              /*echo " <th scope='row'> <?php echo $i; ?></th>";*/
              echo "<td>".$i."</td>";
              echo " <td > {$user}</td>";
              echo " <td > {$email}</td>";
              echo " <td >{$pass} </td>";
 
              echo " <td class='text-center'> <a href='read.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";
 
              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
 
              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                $i++;  
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
 
<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Back </a>
    <div>
 
<!-- Footer -->
<?php include "../footer.php" ?>