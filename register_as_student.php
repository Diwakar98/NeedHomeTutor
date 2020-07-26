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
    <label style="position: relative; top:15px; padding-bottom: 20px; font-size: 25px; font-family: sans-serif; font-weight: 600; color: #525253" >REGISTER</label>
    <HR style ="border: 1px solid #dce8f1;position: relative; top:15px; width: 380px">
    <div style="text-align: center; font-size: 15px; font-weight: 600; display:inline-block; color: #cccccc;">
      <a href="register_as_tutor.php"><h2 class="inactive underlineHover" style="margin-right: 20px">AS A TUTOR </h2></a>
    <a href="register_as_student.php"><h2 class="active">AS A STUDENT </h2></a>
    </div>
    <!-- Icon -->
    <!-- <div class="fadeIn first">
      <img src="IITD_Black.jpg" id="icon" alt="User Icon" />
    </div> -->

    <!-- Login Form -->
    <form action="loader_authenticate.php">
      <input type="hidden" name="Type" value="Student">

      <?php
      if(isset($_GET["Registration"])){
        $valid = $_GET["Registration"];
        if(strcmp($valid, "Invalid")==0){
          $getname = $_GET["Username"];
          print "<p>Username: $getname, has already been taken.</p>";
          print "<p>Enter different username</p>";
        }
      }
      ?>
      <input type="text" id="FirstName" name="FirstName" placeholder="First Name" required>
      <input type="text" id="LastName" name="LastName" placeholder="LastName" required>
      <input type="text" id="Age" name="Age" placeholder="Age">
      <input type="text" id="MobileNumber" name="MobileNumber" placeholder="Mobile Number" required>
      <input type="text" id="SchoolOrCollege" name="SchoolOrCollege" placeholder="School/College">
      <input type="text" id="ClassOrYear" name="ClassOrYear" placeholder="Class/Year" required>
      <input type="text" id="Address" name="Address" placeholder="Address(in short/nearby landmark)">
      <input type="text" id="Username" name="Username" placeholder="Username" required>
      <input type="text" id="Password" name="Password" placeholder="Password" required>

      <div id="gender" style="color: #3E3E40">
        <label style="margin-right: 30px">Gender :</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male" style="margin-right: 20px">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female" style="margin-right: 20px">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
      </div>
      <input type="submit" style="margin-top: 20px" marvalue="REGISTER">
    </form>
    
  </div>
</div>


</body>
</html>