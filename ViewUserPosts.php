<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "w2616329", "Eesh8i4A", "w2616329");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $user = $_POST["user"];
  $query = "SELECT author_id, content, post_id FROM posts WHERE author_id = '$user'";
  $result = $mysqli->query($query);
  echo "<table><tr><th>| Author |</th><th>| Post Content |</th><th>| Post ID |</th></tr>";
  if ($result->num_rows == 0)
  {
    echo "No Posts Found!";
  }
  else {
    while($row = $result->fetch_assoc())
    {
      echo"<tr><td>" . $row["author_id"] . "</td><td>" . $row["content"] . "</td><td>" . $row["post_id"] . "</td></tr>";
    }
  }

  $mysqli->close();
  echo "</table>";
?>
