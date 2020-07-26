<?php
      $servername = "localhost";
      $username_db = "root";
      $password_db = "";
      $dbname = "findyourmentor";

      // Create connection
      $mysqli = new mysqli($servername, $username_db, $password_db, $dbname);

      // Check connection
      if ($mysqli->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Error Connecting to the Network, try again later!!!";
      } 
      // echo "Connected successfully";
    ?>