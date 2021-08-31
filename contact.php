<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "testing once again";
$us = $_POST['na'];
$ms = $_POST['mess'];
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
echo "";
}
$sql = "INSERT INTO messages(name,message)
VALUES ('$us','$ms')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>";
  echo "Successfully delivered";
  echo "</h1>";

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
