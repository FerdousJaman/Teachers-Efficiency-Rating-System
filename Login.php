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
          
          <a class="active" href="Login.php">Student Section</a>
          <a href="Admin_Login.php">Admin Panel</a>
          <a href="Contact_us.php">Contact us</a>
  
    </div>

      <br>

      <center><h1>If you want to fill Teachers Efficiency Rating form then Sign in</h1></center>

      <br>

      <div class="form-head">
       
      

        <form class="form-signin" method="post" action="DashBoard.php"> 

              <h2 class="form-signin-heading">Sign in</h2>

              <input type="text" class="form-control" name="Id" placeholder="Class id"       required="" autofocus="" />

              <br>
              <br>

              <input type="password" class="form-control" name="pass" placeholder="Password"       required=""/>

              <br>
              <br>      

              <a href="Register.php" style="text-decoration: none;font-size: 20px;">Register here?</a>
              &nbsp;&nbsp; 
              
              <a href="ForgetPassword.php" style="text-decoration: none;font-size: 20px;"> Forget Password? </a>

              <br>
              <br>

              <button type="submit" id="btn" value="Submit" name="searching">Submit</button>
              <button type="reset" id="btn" value="Reset">Reset</button>
              
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

    $Id = $_POST['Id'];
    $password = $_POST['password'];
    $password = filter_input(INPUT_POST, 'password');

    $sql2 = "SELECT * FROM registration WHERE Id='$Id' AND Password='$password'";
    $result = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result) ==1) {

      header("Location: DashBoard.php?Id=".$Id);
      die();

    }
    else{

      echo "<br><br><center><font color=Red>Wrong username or password !</font></center";
      die();

    }

  }
 ?>