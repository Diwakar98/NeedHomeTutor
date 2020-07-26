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
      <a class="active" href="mentors.php">Find Tutor</a>
      <a class="inactive" href="about.php">About</a>
      <a class="inactive" href="contact.php">Contact</a>
      <a class="inactive" href="profile.php">Profile</a>
    </div>
    <div class="topnav_left">
      <a class="logo" href="index.php"><img src="img/logo1.png"></a>
    </div>
  </div>


  <div class="search_box">
      <form action="mentors.php">
        <label>Choose your subject from the list:</label>
        <select name="subject">
          <option value="Physics">Physics</option>
          <option value="Chemistry">Chemistry</option>
          <option value="Biology">Biology</option>
          <option value="Maths">Maths</option>
          <option value="English">English</option>
          <option value="Hindi">Hindi</option>
          <option value="Bengali">Bengali</option>
          <option value="Sanskrit">Sanskrit</option>
          <option value="History">History</option>
          <option value="Geography">Geography</option>
          <option value="Computer">Computer</option>
          <option value="Science">Science</option>
          <option value="Commerece">Commerece</option>
          <option value="Humanities">Humanities</option>
          <option value="SocialStudies">SocialStudies</option>
          <option value="EVS">EVS</option>
          <option value="Economics">Economics</option>
          <option value="PhysicalEducation">PhysicalEducation</option>

        </select>
        <input type="submit">
    </form>
    <?php
    if(isset($_GET["subject"])){
      $subject = $_GET["subject"];
      print "$subject";
      include "db_connect.php";

      print "<TABLE>";
        print "<TR><TH COLSPAN = \"6\">TUTOR<TH></TR>";
        print "<TR> <TH>No.</TH> <TH>Name</TH> <TH>Gender</TH> <TH>Age</TH> <TH>Subject</TH> <TH>Rating</TH> <TH>Contact No.</TH> </TR>";
        
        $sql = "SELECT firstname,lastname,age,mobile,gender FROM tutor WHERE ".$subject." = '1'";
        $count = 1;
          $result = $mysqli -> query($sql);
          if($result -> num_rows > 0){
            while($row = mysqli_fetch_array($result)){
              print "<TR>";
                  print "<TD>" . $count . "</TD>";
                  print "<TD>" . $row['firstname']." ".$row['lastname']. "</TD>";
                  print "<TD>" . $row['gender'] . "</TD>";
                  print "<TD>" . $row['age'] . "</TD>";
                  print "<TD>" . $subject . "</TD>";
                  print "<TD>" . $row['rating'] . "</TD>";
                  print "<TD>" . $row['mobile'] . "</TD>";
              print "</TR>";
              $count++;
            }
          }
        print "</TABLE>";
    }
  ?>
  </div>




</body>
</html>