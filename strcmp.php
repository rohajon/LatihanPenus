<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berlatih PHP</title>
</head>
<body>
<?php
$passwordasli = "12345";
$passwordinput = "12345 ";
$cocok = strcmp($passwordasli, $passwordinput);
if ($cocok != 0)
  {
    echo "Password anda salah!";
  }
else
  {
    echo "Password benar";
}
?>
</body>
</html>
