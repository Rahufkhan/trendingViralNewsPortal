<?php

if(isset($_POST['submit'] /*this will check if save button is press or not*/ )){
    
    $userid = ($_POST['user_id']);
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $user = $_POST['username'];
    $role = $_POST['role']; 

    $conn = mysqli_connect("localhost:3307","root", "","practice") or die("connection failed: ". mysqli_connect_error());
    
    // here i am using update command in sql
    $sql = "UPDATE user SET first_name = '{$fname}', last_name = '{$lname}', username = '{$user}', role = '{$role}' WHERE user_id = {$userid}";

     //query is direcly running in if statement
     if(mysqli_query($conn,$sql)){
         header("Location: http://localhost/news-site/practice/read.php");
     }
    
 }
 

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                <?php
                $conn = mysqli_connect("localhost:3307","root", "","practice") or die("connection failed: ". mysqli_connect_error());
                

                //for getting user id on the url ue are using $_GET[] super globle variable
                $user_id = $_GET['id'];

                //for selecting user id same is in the url
                $sql = "SELECT * FROM user WHERE user_id = {$user_id}";
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                
                ?>
                  <!-- Form Start -->
                  <!-- $_SERVER['PHP_SELF']; this means whenever i press the submit button that form values are on this page only, i can resdirect it on another page also  -->
                  <form  action="<?php $_SERVER['PHP_SELF'];?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $row['user_id'];?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'];?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name'];?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                                <?php
                                if($row['role'] == 1){
                                    echo "<option value='0'>normal User</option>
                                          <option value='1' selected>Admin</option>";
                                }else{
                                    echo "<option value='0' selected>normal User</option>
                                          <option value='1'>Admin</option>";
                                }  
                                ?>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
                  <?php
                    }
                }
                  ?>
              </div>
          </div>
      </div>
  </div>
