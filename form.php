<?php 
    if(isset($_POST["grade1"], $_POST["grade2"], $_POST["grade3"],$_POST["grade4"], $_POST["grade5"], $_POST["grade6"],$_POST["grade7"], $_POST["grade8"], $_POST["grade9"],$_POST["grade10"], $_POST["grade11"], $_POST["grade12"],$_POST["grade13"], $_POST["grade14"], $_POST["grade15"],$_POST["grade16"], $_POST["grade17"], $_POST["grade18"],$_POST["grade19"], $_POST["grade20"])) {
        $calc = $_POST["grade1"] + $_POST["grade2"] +$_POST["grade3"]+$_POST["grade4"] + $_POST["grade5"] +$_POST["grade6"]+$_POST["grade7"] + $_POST["grade8"] +$_POST["grade9"]+$_POST["grade10"] + $_POST["grade11"] +$_POST["grade12"]+$_POST["grade13"] + $_POST["grade14"] +$_POST["grade15"]+$_POST["grade16"] + $_POST["grade17"] +$_POST["grade18"]+$_POST["grade19"] + $_POST["grade20"];
        $calc = round($calc / 20,2);
        $avg = '<div><h2 style="text-align: right; padding-right: 86px;">Average Score: <strong>'.$calc.'</strong></h2></div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TER Form</title>
    <link rel="stylesheet" href="form.css">   

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



    <div class="content">
    
        
        <fieldset>
           <legend>Teacher Evalution Rating (TER) Form</legend>
        <br>

    
<div class="Tmarks">
    <div class="teacher">
        <form method="post" action="form.php">
        Department:
        <select style="height: 33px; width: 170px; border: 1px solid #000000; border-radius: 5px;" class="form-control" id="Department" name="Department" required="" >
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
        Teacher: 
        <select style="height: 33px; width: 170px; border: 1px solid #000000; border-radius: 5px;"class="form-control" id="Teachers_name" name="Teachers_name" required="" >
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
        Designation:
        <select style="height: 33px; width: 170px; border: 1px solid #000000; border-radius: 5px;" class="form-control" id="Teachers_designation" name="Teachers_designation" required="" >
                <option value="#">Teachers_designation</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Senior Lecturer">Senior Lecturer</option>
                <option value="Assistant Professor">Assistant Professor</option>
                <option value="Associate Professor">Associate Professor</option>
                <option value="Professor">Professor</option>
              </select>
    
Course code: 
<input type="text" style="height: 33px; width: 170px; border: 1px solid #000000; border-radius: 5px;" class="form-control" name="Course_code" placeholder="CSE1111"       required=""/>
Course title:
<input type="text" style="height: 33px; width: 170px; border: 1px solid #000000; border-radius: 5px;" class="form-control" name="Course_title" placeholder="Course_title"       required=""/>
</div>

        <br>
        <br>
        <br>

    <div class="Marks">
            <p>Outstanding(OS)=5</p>
            <p>Very Good(VG)=4</p>
            <p>Good(G)=3</p>
            <p>Poor(P)=2</p>
            <p>Very Poor(VP)=1</p>
    </div>
</div>



<div>

        <div class="field0">
            <div class="field">
                1.The course outline given by the teacher provides sufficient information including course content.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade1" name="grade1" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade1" name="grade1" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade1" name="grade1" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade1" name="grade1" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade1" name="grade1" value="5">
<label for="5">5</label>

            </div>
               
        </div>
</div>
<br><br>

<div>
     <div class="field0">
            <div class="field">
                2.The teacher clearly explains the learning outcome.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade2" name="grade2" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade2" name="grade2" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade2" name="grade2" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade2" name="grade2" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade2" name="grade2" value="5">
<label for="5">5</label>
            </div>
                
     </div>
</div>

<br><br>
        <div class="field0">
            <div class="field">
                3.The teacher conducts his/her teaching effectively.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade3" name="grade3" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade3" name="grade3" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade3" name="grade3" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade3" name="grade3" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade3" name="grade3" value="5">
<label for="5">5</label>
            </div>
              
        </div> 
        <br><br>
        <div class="field0">
            <div class="field">
                4.The teacher explains his/her subject matter so that it can be clearly understood.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade4" name="grade4" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade4" name="grade4" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade4" name="grade4" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade4" name="grade4" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade4" name="grade4" value="5">
<label for="5">5</label>
            </div>
               
        </div > 
        <br><br>
        <div class="field0">
            <div class="field">
                5.The teacher makes an effort to attract or enhance the students' interest in this course.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade5" name="grade5" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade5" name="grade5" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade5" name="grade5" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade5" name="grade5" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade5" name="grade5" value="5">
<label for="5">5</label>
            </div>
                
        </div> 
        <br><br>
        <div class="field0">
            <div class="field">
                6.The teacher gives me opportunities to ask questions or express my opinion.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade6" name="grade6" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade6" name="grade6" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade6" name="grade6" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade6" name="grade6" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade6" name="grade6" value="5">
<label for="5">5</label>
            </div>
                
        </div> 
        <br><br>
        <div class="field0">
            <div class="field">
                7.The teacher gives Appropriate / relevnnt / suffcient examples / illustrations during the teachin session.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade7" name="grade7" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade7" name="grade7" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade7" name="grade7" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade7" name="grade7" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade7" name="grade7" value="5">
<label for="5">5</label>
            </div>
               
        </div> 
        <br><br>
        <div class="field0">
            <div class="field">
                8.The teacher relates the teaching contents to current isgueg/industrial practices.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade8" name="grade8" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade8" name="grade8" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade8" name="grade8" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade8" name="grade8" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade8" name="grade8" value="5">
<label for="5">5</label>
            </div>
               
        </div> 
        <br><br>
        <div class="field0">
            <div class="field">
                9.The teacher utilizes various student-centered learning approaches (i.e. problem based learning, case study, project oriented learning and etc.) that support the learnin process. 
            </div>
            
            <div class="field1">
            <input type="radio" id="grade9" name="grade9" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade9" name="grade9" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade9" name="grade9" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade9" name="grade9" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade9" name="grade9" value="5">
<label for="5">5</label>
            </div>
              
        </div> 
        <br><br>
        <div class="field0">
            <div class="field">
                10. The teacher uses modem learning system and devices (i.e. BdREN/Zoom, Laptop,Smart board and etc. that support the learning process.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade10" name="grade10" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade10" name="grade10" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade10" name="grade10" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade10" name="grade10" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade10" name="grade10" value="5">
<label for="5">5</label>
            </div>
              
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                11.The teacher summarizes the lesson at the end Of each class.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade11" name="grade11" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade11" name="grade11" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade11" name="grade11" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade11" name="grade11" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade11" name="grade11" value="5">
<label for="5">5</label>
            </div>    
        </div> 
        <br><br>
        <div class="field0">
            <div class="field">
                12.The teacher is audible from the back benchers.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade12" name="grade12" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade12" name="grade12" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade12" name="grade12" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade12" name="grade12" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade12" name="grade12" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                13.The teacher conducts tests/assignments/activities that are appropriate with the course content.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade13" name="grade13" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade13" name="grade13" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade13" name="grade13" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade13" name="grade13" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade13" name="grade13" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                14.The teacher gives feedback on tests/assignments/activities conducted in class.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade14" name="grade14" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade14" name="grade14" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade14" name="grade14" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade14" name="grade14" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade14" name="grade14" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                15.teacher is punctual and regular in attending class.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade15" name="grade15" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade15" name="grade15" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade15" name="grade15" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade15" name="grade15" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade15" name="grade15" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                16.The teacher is always ready to assist students.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade16" name="grade16" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade16" name="grade16" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade16" name="grade16" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade16" name="grade16" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade16" name="grade16" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                17.The teacher is competent in the subject matter taught.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade17" name="grade17" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade17" name="grade17" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade17" name="grade17" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade17" name="grade17" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade17" name="grade17" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                18.The teacher encourages weak students by giving special attention.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade18" name="grade18" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade18" name="grade18" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade18" name="grade18" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade18" name="grade18" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade18" name="grade18" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                19.The teacher is helpful and provides counseling.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade19" name="grade19" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade19" name="grade19" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade19" name="grade19" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade19" name="grade19" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade19" name="grade19" value="5">
<label for="5">5</label>
            </div>    
        </div> 

        <br><br>
        <div class="field0">
            <div class="field">
                20.The teacher is able to deliver his/her teaching contents according to his/her teaching plan.
            </div>
            
            <div class="field1">
            <input type="radio" id="grade20" name="grade20" value="1">
<label for="1">1</label><br>
<input type="radio" id="grade20" name="grade20" value="2">
<label for="2">2</label><br>
<input type="radio" id="grade20" name="grade20" value="3">
<label for="3">3</label><br>
<input type="radio" id="grade20" name="grade20" value="4">
<label for="4">4</label><br>
<input type="radio" id="grade20" name="grade20" value="5">
<label for="5">5</label>
            </div>    
        </div>
        <br>
        <br>
        <!-- <button name="avg" style="background-color: rgb(27, 197, 223);" id="btn">Average</button> -->
        <?php if(isset($avg)) echo $avg; ?> 
<br>
        <div class="field2">
            Comment: <input class="box" type="text" name="comments" comment="comment" placeholder="Enter your openions">
        </div>


<br><br>




        <button type="submit" style="background-color: rgb(27, 197, 223);" id="btn" value="Submit" name="searching">Submit</button>
        <button type="reset" style="background-color: rgb(27, 197, 223);" id="btn" value="Reset">Reset</button>
        </form>
        <a href="Dashboard.php" class="previous">&laquo; Previous</a>
        <a id="logout" href="Login.php">Log out</a>
     </fieldset>
     

    </div>

</body>
</html>


<?php
  if(isset($_POST['searching'])){

    
    $comments = filter_input(INPUT_POST, 'comments');
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

        $sql = "INSERT INTO rating (Department , Course_code , Course_title , Teachers_name , Teachers_designation , avg , comments)
        values ('$Department','$Course_code','$Course_title','$Teachers_name','$Teachers_designation','$calc','$comments')";
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