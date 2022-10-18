<!DOCTYPE html>
  <html>
    <head>

      <title>Register</title>
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

    <marquee <font color="Red" behavior="alternate" direction="left" bgcolor-"Red">For Admin Registration, Collect Controller Pin from Controller ! </font></marquee>

      

      <div class="">
        <form class="form-signin" method="post" action="">  

          <h2 class="form-signin-heading">Sign up</h2>

          <input type="text" class="form-control" name="name" placeholder="Full Name" required="" autofocus="" />

          <br>
          <br>

          <input type="text" class="form-control" name="NID" placeholder="NID" required="" autofocus="" />

          <br>
          <br>

          <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />

          <br>
          <br>

          <input type="text" pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{2}[0-9]{6}" class="form-control" name="contact" placeholder="Contact no" required="" autofocus="" />

          <br>
          <br>
          <input type="password" class="form-control" name="pin" placeholder="Controller Pin" required=""/>

          <br>
          <br> 

          <input type="password" class="form-control" name="password" placeholder="Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required=""/>

          <br>
          <br> 

          <input type="password" class="form-control" name="password" placeholder="Confirm Password" required=""/>

          <br>
          <br>  
                
          <a href="Admin_Login.php" style="text-decoration: none;font-size: 20px;">Already a member? </a>

          <br>
          <br>

          <input type="submit" value="Submit" name="searching">
          <input type="reset" value="Reset">

        </form>

      </div>

    </body>
  </html>
  <?php
    if(isset($_POST['searching'])){

      $name = filter_input(INPUT_POST, 'name');
      $NID = filter_input(INPUT_POST, 'NID');
      $email = filter_input(INPUT_POST, 'email');
      $contact = filter_input(INPUT_POST, 'contact');
      $password = filter_input(INPUT_POST, 'password');
      $pin = filter_input(INPUT_POST, 'pin');

      if($pin=='morshed'){
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
      $sql2 = "SELECT * FROM admin_registration WHERE Email='$id2'";
      $result = mysqli_query($conn, $sql2);
      if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("Email already registered!")</script>'; 
       // echo "<br><center><font color=Red>Email already registered!</font></center>";
        die();

      }
      $id2 = $_POST['contact'];
      $sql2 = "SELECT * FROM admin_registration WHERE Contact='$id2'";
      $result = mysqli_query($conn, $sql2);
      if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("Contact no already registered!")</script>'; 
          //echo "<br><center><font color=Red>Contact no already registered!</font></center>";
          die();

      }
      else{

        $sql = "INSERT INTO admin_registration (Name,NID, Email , Contact , Password)
        values ('$name','$NID','$email','$contact','$password')";
        if ($conn->query($sql)){
            
            echo "<br><center><font color=Red>Congrats! Registration is complete!<a href=Admin_Login.php>Now Login here </a></font></center>";
          
        }
        else{
            echo "Error: ". $sql ."
            ". $conn->error;
        }
        $conn->close();


      }
    }
    else{

        echo '<script>alert("Wrong Controller Pin no !")</script>'; 

    }

    }
?>
