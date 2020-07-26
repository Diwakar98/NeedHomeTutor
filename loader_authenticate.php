<!DOCTYPE html>
<html>
<head>
  <title>Find Your Mentor</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
  <style>
    .loader {
      position: absolute;
      top: 16%;
      left: 45%;
      border: 5px solid #f3f3f3;
      border-radius: 50%;
      border-top: 5px solid blue;
      border-bottom: 5px solid blue;
      border-left: 5px solid #4dbbe8;
      border-right: 5px solid #4dbbe8;
      width: 100px;
      height: 100px;
      float: center;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
</style>
</head>
<body>
  <div class="topnav">
    <div class="topnav_right">
      <a class="inactive" href="index.php">Home</a>
      <a class="inactive" href="mentors.php">Find Tutor</a>
      <a class="inactive" href="about.php">About</a>
      <a class="inactive" href="contact.php">Contact</a>
      <a class="inactive" href="profile.php">Profile</a>
    </div>
    <div class="topnav_left">
      <a class="logo" href="index.php"><img src="img/logo1.png"></a>
    </div>
  </div>

  <div class="loader" ></div>
  <h2 style="position: absolute; top: 30%; left: 32%; color: #2b2d2d;">Wait while we are authenticating!!!</h2>

  <?php
    function authenticate_registration($user){
        include "db_connect.php"; 
        $id="";
        $valid = 1;
          $sql = "SELECT username FROM tutor WHERE username = '".$user."'";
          $result = $mysqli -> query($sql);
          if($result -> num_rows == 1) $valid = 0;
        
          $sql = "SELECT username FROM student WHERE username = '".$user."'";
          $result = $mysqli -> query($sql);
          if($result -> num_rows == 1) $valid = 0;
        
        return $valid;
      }
    if(isset($_GET["Type"])){
      $type = $_GET["Type"];
      if(strcmp($type,"Tutor")==0){
          if(isset($_GET['FirstName'], $_GET['LastName'], $_GET['Age'], $_GET['MobileNumber'], $_GET['Username'], $_GET['Password'], $_GET['gender'], $_GET['Experience'])){

            include "db_connect.php";
            $firstname = $_GET["FirstName"];
            $lastname = $_GET["LastName"];
            $age = $_GET["Age"];
            $mobile = $_GET["MobileNumber"];
            $address = $_GET["Address"];
            $username = $_GET["Username"];
            $password = $_GET["Password"];
            $gender = $_GET["gender"];
            $subjects = $_GET['Subject'];
            $experience = $_GET['Experience'];

            $physics = (in_array("Physics", $subjects)) ? 1 : 0;
            $chemistry = (in_array("Chemistry", $subjects)) ? 1 : 0;
            $biology = (in_array("Biology", $subjects)) ? 1 : 0;
            $maths = (in_array("Maths", $subjects)) ? 1 : 0;
            $history = (in_array("History", $subjects)) ? 1 : 0;
            $geography = (in_array("Geography", $subjects)) ? 1 : 0;
            $english = (in_array("English", $subjects)) ? 1 : 0;
            $computer = (in_array("Computer", $subjects)) ? 1 : 0;
            $commerce = (in_array("Commerce", $subjects)) ? 1 : 0;
            $hindi= (in_array("Hindi", $subjects)) ? 1 : 0;
            $bengali = (in_array("Bengali", $subjects)) ? 1 : 0;
            $socialstudies = (in_array("SocialStudies", $subjects)) ? 1 : 0;
            $sanskrit = (in_array("Sanskrit", $subjects)) ? 1 : 0;
            $science = (in_array("Science", $subjects)) ? 1 : 0;
            $economics = (in_array("Economics", $subjects)) ? 1 : 0;
            $evs = (in_array("EVS", $subjects)) ? 1 : 0;
            $physicaleducation = (in_array("PhysicalEducation", $subjects)) ? 1 : 0;


            // print "<h2>$firstname</h2>";
            // print "<h2>$lastname</h2>";
            // print "<h2>$age</h2>";
            // print "<h2>$mobile</h2>";
            // print "<h2>$address</h2>";
            // print "<h2>$username</h2>";
            // print "<h2>$password</h2>";
            // print "<h2>$gender</h2>";

            
            // print "<h2>$physics $chemistry $biology $maths $history $geography $english $computer $commerce $hindi $bengali $socialstudies $sanskrit $science $economics $evs $physicaleducation</h2>";

            // print "</h2>$experience</h2>";

            if(authenticate_registration($username)==1){

              $sql = "INSERT INTO tutor (id, username, password, firstname, lastname, gender, age, mobile, address, experience, physics, chemistry, biology, maths, history, geography, english, hindi, bengali, computer, commerce, socialstudies, sanskrit, science, economics, evs, physicaleducation) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$gender', '$age', '$mobile', '$address', '$experience', '$physics' , '$chemistry', '$biology', '$maths', '$history', '$geography', '$english', '$hindi', '$bengali', '$computer', '$commerce', '$socialstudies', '$sanskrit', '$science', '$economics', '$evs', '$physicaleducation')";
              $result = $mysqli -> query($sql);
              
              // print "<h2>--DONE--</h2>";

              $redirect = "Location: index.php?Registration=Valid";
              header($redirect);
              exit();
                
            }
            else{
             // print "<h2>INVALID USERNAME TUTOR</h2>";
                $redirect = "Location: register_as_tutor.php?Registration=Invalid&Username=".$username;
                header($redirect);
                exit();
                
            }
          }
      }
      else if(strcmp($type,"Student")==0){
          // print "<h2>Student</h2>";
          if(isset($_GET['FirstName'], $_GET['LastName'], $_GET['Age'], $_GET['MobileNumber'], $_GET['Username'], $_GET['Password'], $_GET['gender'], $_GET['ClassOrYear'])){
          include "db_connect.php";

          $firstname = $_GET["FirstName"];
          $lastname = $_GET["LastName"];
          $age = $_GET["Age"];
          $mobile = $_GET["MobileNumber"];
          $schoolorcollege = $_GET["SchoolOrCollege"];
          $classoryear = $_GET["ClassOrYear"];
          $address = $_GET["Address"];
          $username = $_GET["Username"];
          $password = $_GET["Password"];
          $gender = $_GET["gender"];

          // print "<h2>$firstname</h2>";
          // print "<h2>$lastname</h2>";
          // print "<h2>$age</h2>";
          // print "<h2>$mobile</h2>";
          // print "<h2>$schoolorcollege</h2>";
          // print "<h2>$classoryear</h2>";
          // print "<h2>$address</h2>";
          // print "<h2>$username</h2>";
          // print "<h2>$password</h2>";
          // print "<h2>$gender</h2>";
          
          if(authenticate_registration($username)==1){
            $sql = "INSERT INTO student (id, username, password, firstname, lastname, gender, age, mobile, address, schoolorcollege, classoryear) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$gender', '$age', '$mobile', '$address', '$schoolorcollege', '$classoryear')";

            // print "<h2>DONE Student</h2>";
            $result = $mysqli -> query($sql);

            $redirect = "Location: index.php?Registration=Valid";
            header($redirect);
            exit();
          }
          else{
            // print "<h2>INVALID USERNAME STUDENT</h2>";
            
            $redirect = "Location: register_as_student.php?Registration=Invalid&Username=".$username;
            header($redirect);
            exit();
            
          }
        }
      } 
    }

  ?>

</body>
</html>