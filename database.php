<?php
  //coonnect to MySQL
  $con = mysqli_connect("localhost","root","Ogun1313","shoutit");
  //TEST Connection
  if (mysqli_connect_error()) {
      echo 'Failed to connect to MySQL:'.mysqli_connect_error();
  }

