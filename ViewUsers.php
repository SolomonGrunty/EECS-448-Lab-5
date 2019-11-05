<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "w2616329", "Eesh8i4A", "w2616329");
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT user_id FROM users";
  $result = $mysqli->query($query);
  echo "<table><tr><th>User ID</th></tr>";
  if ($result->num_rows == 0)
  {
    echo "0 result";
  }
  else
  {
    while($row = $result->fetch_assoc())
    {
      echo "<tr><td>" . $row["user_id"] . "</td></tr>";
    }
  }

  $mysqli->close();
  echo "</table>";

?>
