<html>
<body>

Welcome <b><?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?>!</b><br>
Your email address is: <b><?php echo $_POST["email"]; ?></b><br>
Your password has <b><u><?php echo strlen($_POST["password"]); ?></u></b> characters<br>
<?php
  if ($_POST["password"] == $_POST["confirmpassword"]) {
      echo 'The password is <b>matched</b> with the confirmed password.';
  }
  else {
      echo 'The password is <b>not matched</b> with the confirmed password.';
  }
?>

</body>
</html> 