<!DOCTYPE html>
  <html>
    <head>

      <title>Home</title>
      <link rel="stylesheet" href="Style.css">

    </head>
    <body>
    <div class="header">
        <div  class="logo">
            <img src="bauet.png" alt="#" width="100%" height="100%">
        </div>

        <div class="bauet">           
        <p>Bangladesh Army University of Engineering & Technology</p> 
        <p>Qadirabad Cantonment, Natore-6431</p>
        </div>
    </div>
    <br>
    <br>
    <div class="topnav">
          
          <a href="Login.php">Student Section</a>
          <a class="active" href="Admin_Login.php">Admin Panel</a>
          <a href="Contact_us.php">Contact us</a>
  
    </div>
      

      <div class="">
       
      

        <form class="form-signin" method="post" action="admin.php"> 

              <h2 class="form-signin-heading">Sign in</h2>

              <input type="text" class="form-control" name="email" placeholder="Email Address"       required="" autofocus="" />

              <br>
              <br>

              <input type="password" class="form-control" name="pass" placeholder="Password"       required=""/>

              <br>
              <br>      

              <a href="Admin_Register.php" style="text-decoration: none;font-size: 20px;">Register here?</a>
              &nbsp;&nbsp; 
              
              <a href="Admin_ForgetPassword.php" style="text-decoration: none;font-size: 20px;"> Forget Password? </a>

              <br>
              <br>

              <input type="submit" value="Submit" name="searching">

              <input type="reset" value="Reset">
              
        </form>
        
    </div>
  </body>
</html>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "teer-form";
   //$name = filter_input(INPUT_POST, 'name');
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
  if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

  }
  if(isset($_POST['searching'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = filter_input(INPUT_POST, 'password');

    $sql2 = "SELECT * FROM registration WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result) ==1) {

      header("Location: admin.php?email=".$email);
      die();

    }
    else{

      echo "<br><br><center><font color=Red>Wrong username or password !</font></center";
      die();

    }

  }
 ?>