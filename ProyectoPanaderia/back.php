<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['exampleFormControlInput1'];
  $message = $_POST['exampleFormControlTextarea1'];

  echo "Email: " . $email . "<br>";
  echo "Message: " . $message;
}
?>