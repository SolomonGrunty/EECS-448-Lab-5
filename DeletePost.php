<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "w2616329", "Eesh8i4A", "w2616329");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  $delete = $_POST['Delete'];

  foreach($delete as $i)
  {
    $query = "DELETE FROM posts WHERE post_id = '$i'";
    if($mysqli->query($query))
    {
      echo "Post#: '$i' deleted!<br>";
    }
    else {
      echo "Error deleting post!<br>";
    }
  }

?>
