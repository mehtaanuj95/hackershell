<?php
  $link = mysqli_connect("localhost", "root", "password", "hackershell");
  if($link === false)
  {
    //die("ERROR: Could not connect. " . mysqli_connect_error());
    echo "Could not connect to database";
    // Attempt insert query execution
    
  }
  else
  {

    echo nl2br("Connected successfully\n");
    echo "Host info: " . mysqli_get_host_info($link);
    $sql = "INSERT INTO users (name, email, password) VALUES ('anuj', 'test1@gmail.com', 'abc123')";
    if(mysqli_query($link, $sql))
    {
      echo "<br>Records inserted successfully.<br>";
    }
    else
    {
      echo "<br>ERROR: Could not able to execute $sql. " . mysqli_error($link)."<br>";
    }
  }
?>