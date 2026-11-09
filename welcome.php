<?php
$name = htmlspecialchars($_POST["name"] ?? "");
$email = htmlspecialchars($_POST["email"] ?? "");
$message = htmlspecialchars($_POST["message"] ?? "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Project Inquiry</title>
</head>
<body>
  <h1>Thank you for your inquiry!</h1>
  <p>Welcome <?php echo $name; ?></p>
  <p>Your email address is: <?php echo $email; ?></p>
  <p>Your message: <?php echo $message; ?></p>
</body>
</html>