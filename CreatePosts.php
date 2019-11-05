<?php
$author = $_POST["author"];
$content = $_POST["content"];
$postID = rand(0, 999999999999);
$mysqli = new mysqli("mysql.eecs.ku.edu", "w2616329", "Eesh8i4A", "w2616329");

if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

if (empty($author))
{
  echo "Author cannot be blank!";
  exit();
}

$query = "SELECT user_id FROM users WHERE user_id = '$author'";
if ($mysqli->query($query)->num_rows == 0)
{
  echo "Author must be a valid user!";
  exit();
}
else
{
  $query = "INSERT INTO posts (author_id, content, post_id) VALUES ('$author', '$content', '$postID')";
  if($mysqli->query($query) === TRUE)
  {
    echo "Post successfully added!<br>Post ID: '$postID'";
  }
  else
  {
    echo "Error: " . $query . "<br>" . $mysqli->error;
  }
}

 ?>
