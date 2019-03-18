<?php
 $username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
  $email = filter_input(INPUT_POST, 'email');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "quizard";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO `signup`(`username`, `password`, `email`) VALUES ('$username','$password','$email');";
$conn->query($sql);
$conn->close();
?>
