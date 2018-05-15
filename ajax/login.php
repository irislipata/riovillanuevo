<?php
session_start();
require "../autoload.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email    = $db->real_escape_string($_POST['email']);
  $password = $db->real_escape_string($_POST['password']);
  $result   = $db->query("SELECT * FROM guest WHERE emailAddress='$email'");
  $row      = $result->fetch_assoc();
  if ($result->num_rows > 0) {
    if (password_verify($password, $row['password'])) {
      $_SESSION['account']['email'] = $email;
      $_SESSION['account']['fname'] = $row['firstName'];
      $_SESSION['account']['lname'] = $row['lastName'];
      echo true;
    }
  }
}
?>