<?php

if(isset($_POST['save'])){

   echo $fname = $_POST['fname'];
   echo $lname = $_POST['lname'];
   echo $user = $_POST['user'];
   echo $password = $_POST['password'];
   echo $role = $_POST['role'];

    $conn = mysqli_connect("localhost:3307","root", "","practice") or die("connection failed: ". mysqli_connect_error());
    $sql = "INSERT INTO user (first_name,last_name,username,password,role) 
    VALUES ('{$fname}','{$lname}','{$user}','{$password}','{$role}')";
    $result = mysqli_query($conn,$sql) or die("Query Failed.");

//          header("Location: http://localhost/news-site/admin/users.php");  
}

?>


<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']; /*this means php code is within this page itself*/?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>