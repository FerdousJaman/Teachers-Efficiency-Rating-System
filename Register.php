<!DOCTYPE html>
  <html>
    <head>

      <title>Register</title>
      <link rel="stylesheet" href="Style1.css">

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
        <div class="topnav">
          
          <a class="active" href="Login.php">Student Section</a>
          <a href="Admin_Login.php">Admin Panel</a>
          <a href="Contact_us.php">Contact us</a>
  
    </div>

      <br>
      

      <div class="form-container">
        <form name="form1" class="form-signin" method="post" action="">  

          <h2 class="form-signin-heading">Sign up</h2>

          <input type="text" class="form-control" name="Id" placeholder="Class Id" required="" autofocus="" />

          <br>
          <br>

          <input type="text" class="form-control" name="name" placeholder="Full Name" required="" autofocus="" />

          <br>
          <br>

          <select style="height: 20px; width: 250px; border:none; border-bottom: 1px solid rgb(39, 37, 37);" class="form-control" id="Department" name="Department" required="" >
            <option value="#">Department</option>
            <option value="CSE">CSE</option>
            <option value="CE">CE</option>
            <option value="EEE">EEE</option>
            <option value="ICE">ICE</option>
            <option value="ME">ME</option>
            <option value="BBA">BBA</option>
            <option value="LLB">LLB</option>
            <option value="ELL">ELL</option>
          </select> 

          <br>
          <br>
          <br>

          <input type="text" class="form-control" name="Session" placeholder="Session" required="" autofocus="" />

          <br>
          <br>

          <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                 required="" class="form-control" name="email" placeholder="Valid Email Address"  autofocus="" />

          <br>
          <br>

          <input type="tel" pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{2}[0-9]{6}" class="form-control" name="Phone" placeholder="Valid Phone no" required="" autofocus="" />

          <br>
          <br>

          <input type="password" class="form-control" name="password" placeholder="Password (letter+number(min 8))" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required/>

          <br>
          <br>

          <input type="password" class="form-control" name="password" placeholder="Confirm Password" required=""/>

          <br>
          <br>  
                
          <a href="Login.php" style="text-decoration: none;font-size: 20px;">Already a member? </a>

          <br>
          <br>
          <button type="submit" id="btn" value="Submit" name="searching">Submit</button>
          <button type="reset" id="btn" value="Reset">Reset</button>

        </form>

      </div> 

    </body>
  </html>
  <?php
  if(isset($_POST['searching'])){

    $name = filter_input(INPUT_POST, 'name');
    $Id = filter_input(INPUT_POST, 'Id');
    $Department = filter_input(INPUT_POST, 'Department');
    $Session = filter_input(INPUT_POST, 'Session');
    $email = filter_input(INPUT_POST, 'email');
    $Phone = filter_input(INPUT_POST, 'Phone');
    $password = filter_input(INPUT_POST, 'password');

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "teer-form";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){

      die('Connect Error ('. mysqli_connect_errno() .') '
      . mysqli_connect_error());
    }
    // Create connection
    $id2 = $_POST['email'];
    $sql2 = "SELECT * FROM registration WHERE email='$id2'";
    $result = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result) > 0) {
      echo '<script>alert("Email already registered!")</script>'; 
     // echo "<br><center><font color=Red>Email already registered!</font></center>";
      die();

    }
    $id2 = $_POST['Phone'];
    $sql2 = "SELECT * FROM registration WHERE Phone ='$id2'";
    $result = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result) > 0) {
      echo '<script>alert("Contact no already registered!")</script>'; 
        //echo "<br><center><font color=Red>Contact no already registered!</font></center>";
        die();

    }
    $id2 = $_POST['Id'];
    $sql2 = "SELECT * FROM registration WHERE Id ='$id2'";
    $result = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result) > 0) {
      echo '<script>alert("Id already registered!")</script>'; 
        //echo "<br><center><font color=Red>Id already registered!</font></center>";
        die();

    }
    else{

      $sql = "INSERT INTO registration (name,Id,Department,Session, email , Phone , password)
      values ('$name','$Id','$Department','$Session','$email','$Phone','$password')";
      if ($conn->query($sql)){
          
          echo "<br><center><font color=Red>Congrats! Registration is complete!<a href=Login.php>Now Login here </a></font></center>";
        
      }
      else{
          echo "Error: ". $sql ."
          ". $conn->error;
      }
      $conn->close();


    }

  }
?>