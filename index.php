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
      <a class="active" href="index.php">Home</a>
      <a class="inactive" href="mentors.php">Find Tutor</a>
      <a class="inactive" href="about.php">About</a>
      <a class="inactive" href="contact.php">Contact</a>
      <a class="inactive" href="profile.php">Profile</a>
    </div>
    <div class="topnav_left">
      <a class="logo" href="index.php"><img src="img/logo1.png"></a>
    </div>
  </div>

    <?php
  if(isset($_GET['Registration'])){
    if(strcmp($_GET['Registration'],"Valid")==0){
      echo "<script>"; echo "alert('Registration Successfull!');"; echo "</script>";
    }
  }
  ?>

  <div class="wrapper">
    <div id="formContent" style="background: #599ffc">
      <h1>NEED HOME TUTOR</h1>
    </div>
    <BR>
    <BR>
    <div style="background-color:powderblue; font-size:100%; text-align: center; border: 1px solid #dce8f1; margin: 0 auto; -webkit-border-radius: 5px 5px 5px 5px; border-radius: 5px 5px 5px 5px; width: 200px;">

        <a href="decideregister.php" class="underlineHover" style="margin-right: 10px"><p style="color:blue;">Sign Up</p></a>
        <a href="login.php" class="underlineHover"><p style="color:blue;">Sign In</p></a>
    </div>
  </div>

</body>
</html>