<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "testing once again";
$us = $_POST['blog'];
$ms = $_POST['mes'];
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
echo "";
}
$sql = "INSERT INTO sent(name,message)
VALUES ('$us','$ms')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>";
  echo "The Post is delivered";
  echo "</h1>";
  echo "<p>";
  echo "Posts cannot be deleted by the user. If you want to delete a specific post, contact us to remove it";
  echo "</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<html>
<style>
h1{
  color:navy;
  font-size:40px;
  font-family:Century Gothic;
  padding-left: 1%;
}
a{
  background-color:powderblue;
  color:black;
  font-size:35px;
  text-decoration: none;
  font-family: Century Gothic;
}
</style>
<a href = 'index.html'>Go to Home Page</a>
</html>
