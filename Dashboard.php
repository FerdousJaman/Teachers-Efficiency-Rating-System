<!DOCTYPE html>
<html>
    <head>

        <title>DashBoard</title>
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
          <a id="logout" href="Login.php">Log out</a>
  
    </div>
    <br>
    <br>
      <div class="">
       
      

        <form class="form-signin" method="post" action="form.php"> 

          <select style="height: 20px; width: 380px; border:none; border-bottom: 1px solid rgb(39, 37, 37);" class="form-control" id="Department" name="Department" required="" >
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

              <input type="text" class="form-control" name="Course_code" placeholder="Course_code"       required=""/>

              <br>
              <br>

              <input type="text" class="form-control" name="Course_title" placeholder="Course_title"       required=""/>

              <br>
              <br>
              
              <select style="height: 20px; width: 380px; border:none; border-bottom: 1px solid rgb(39, 37, 37);" class="form-control" id="Teachers_name" name="Teachers_name" required="" >
                <option value="#">Teachers_name</option>
                <option value="Ananya Sarker">Ananya Sarker</option>
                <option value="Aroni Saha Prapty">Aroni Saha Prapty</option>
                <option value="Bristi Rani Roy">Bristi Rani Roy</option>
                <option value="Md. Harun Or Rashid">Md. Harun Or Rashid</option>
                <option value="Md. Muktar Hossain">Md. Muktar Hossain</option>
                <option value="Md. Nazmus Salehin">Md. Nazmus Salehin</option>
                <option value="Md. Omar Faruq">Md. Omar Faruq</option>
                <option value="Md Rafiqul Islam (Rafiq)">Md Rafiqul Islam (Rafiq)</option>
                <option value="Md. Sumon Ali">Md. Sumon Ali</option>
                <option value="Mohammed Golam Sarwar Bhuyan">Mohammed Golam Sarwar Bhuyan</option>
                <option value="Mithun Kumar">Mithun Kumar</option>
                <option value="Mst. Irin Sultana">Mst. Irin Sultana</option>
                <option value="MUHTASIM">MUHTASIM</option>
                <option value="Must. Asma Yasmin">Must. Asma Yasmin</option>
                <option value="Rakhi Rani Paul">Rakhi Rani Paul</option>
                <option value="Redoanul Haque">Redoanul Haque</option>
                <option value="Subrata Kumer Paul">Subrata Kumer Paul</option>
              </select>

              <br>
              <br>

              <select style="height: 20px; width: 380px; border:none; border-bottom: 1px solid rgb(39, 37, 37);" class="form-control" id="Teachers_designation" name="Teachers_designation" required="" >
                <option value="#">Teachers_designation</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Senior Lecturer">Senior Lecturer</option>
                <option value="Assistant Professor">Assistant Professor</option>
                <option value="Associate Professor">Associate Professor</option>
                <option value="Professor">Professor</option>
              </select>

              <br>
              
              <button type="submit" id="btn" value="Submit" name="searching">Submit</button>
              
              <button type="reset" id="btn" value="Reset">Reset</button>
              
        </form>
        
    </div>
  </body>
</html>
<?php
  if(isset($_POST['searching'])){

    $Department = filter_input(INPUT_POST, 'Department');
    $Course_code = filter_input(INPUT_POST, 'Course_code');
    $Course_title = filter_input(INPUT_POST, 'Course_title');
    $Teachers_name = filter_input(INPUT_POST, 'Teachers_name');
    $Teachers_designation = filter_input(INPUT_POST, 'Teachers_designation');

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "teer-form";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){

      die('Connect Error ('. mysqli_connect_errno() .') '
      . mysqli_connect_error());
    }

    else{

      $sql = "INSERT INTO form (Department , Course_code , Course_title , Teachers_name , Teachers_designation)
      values ('$Department','$Course_code','$Course_title','$Teachers_name','$Teachers_designation')";
      if ($conn->query($sql)){
          
        
      
    }
    else{
        echo "Error: ". $sql ."
        ". $conn->error;
    }
    $conn->close();


  }

  }
?>