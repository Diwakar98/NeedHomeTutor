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
      <a class="active" href="profile.php">Profile</a>
    </div>
    <div class="topnav_left">
      <a class="logo" href="index.php"><img src="img/logo1.png"></a>
    </div>
  </div>

  
  <?php
      include "db_connect.php";
      if(isset($_GET["Type"])){
        $type_index = $_GET["Type"];
        $type;
        if($type_index==1) $type = "tutor";
        else if($type_index==2) $type = "student";
        $username = $_GET["Username"];
        // print "<BR>$username<BR>";
        $sql = "SELECT * FROM ".$type." WHERE username = '".$username."'";
        // print "<BR><h2>$sql</h2>";
        $result = $mysqli -> query($sql);
        if($result -> num_rows == 1){
          $row = $result -> fetch_assoc();
          echo "username = ".$row["username"]." password = ".$row["password"]."<br>";
      }
      else{
        echo "0 result<br>";
      }
    }
  ?>

</body>
</html>