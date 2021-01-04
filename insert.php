<?php
include 'zaednicki/konekcija.php';
$sql="INSERT INTO registration (name, email, phone)
VALUES
('$_POST[name]','$_POST[email]','$_POST[phone]')";

if ($conn->query($sql) === TRUE) {
  include 'zaednicki/head.php';
  include 'zaednicki/menu.php';
  include 'zaednicki/banner.php';
  echo'<h2 style="margin:15% 10%; text-align:center;">Thank you for your registration</h2>
  <meta http-equiv="Refresh" content="3;url=index.php">
';
  include 'zaednicki/footer.php';
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();
?>