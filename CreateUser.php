<?php
  $user = $_POST["user"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "w2616329", "Eesh8i4A", "w2616329");

  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  if (empty($user))
  {
    printf("Username can't be blank!");
    exit();
  }

  $query = "INSERT INTO users (user_id) VALUES ('$user')";

  if ($mysqli->query($query) === TRUE)
  {
    echo "User successfully added!";
  }
  else
  {
    echo "Error: " . $query . "<br>" . $mysqli->error;
  }



?>
