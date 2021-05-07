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
  $kalimat = "Saya sedang belajar PHP";
  $katayangdicari = "PHP";
  $posisi = strpos($kalimat, $katayangdicari);
  echo $posisi;
  ?>
   </body>
  </html>