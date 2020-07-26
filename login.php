<!DOCTYPE html>
<html>
<head>
  <title>Find Your Mentor</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
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


  <div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->
    <a href="login.php"><h2 class="active"> Sign In </h2></a>
    <a href="decideregister.php"><h2 class="inactive underlineHover">Sign Up </h2></a>

    <!-- Icon -->
    <!--
    <div class="fadeIn first">
      <img src="IITD_Black.jpg" id="icon" alt="User Icon" />
    </div> -->

    <!-- Login Form -->
    <form action="login.php">
      <input type="text" id="Username" name="Username" placeholder="Username" required>
      <input type="text" id="Password" name="Password" placeholder="Password" required>
      <input type="submit" class="fadeIn third" value="Log In">
    </form>

    <?php
      function authenticate($user,$pass){
        include "db_connect.php";
        $username = $user;
        $password = $pass;
        $id="";
        $valid = 0;
        {
          $sql = "SELECT username,password FROM tutor WHERE username = '".$username."' AND password = '".$password."'";
          $result = $mysqli -> query($sql);
          if($result -> num_rows == 1){
            // print "A";
            $valid = 1;
          }
        }
        {
          $sql = "SELECT username,password FROM student WHERE username = '".$username."' AND password = '".$password."'";
          $result = $mysqli -> query($sql);
          if($result -> num_rows == 1){
            // print "B";
            $valid = 2;
          }
        }
        return $valid;
      }
      if(isset($_GET["Username"],$_GET["Password"])){
        $valid = authenticate($_GET["Username"],$_GET["Password"]);
        if($valid!=0){
          $redirect = "Location: profile.php?Type=".$valid."&Username=".$_GET["Username"];
          // print "$valid";
          header($redirect);
          exit();
        }
        else{
          print "<BR>Enter correct Username and Password"; 
        }
      }
    ?>
    <!-- Remind Passowrd 
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>

</body>
</html>