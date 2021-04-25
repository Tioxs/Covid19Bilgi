<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 Bilgi</title>
    <center>
      <h1>Covid-19 Bilgi</h1>
    </center>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
    body {  
      font-size: 19px;
      background-color: #232B32;
      font-family: 'Ubuntu', sans-serif;
      padding: 2rem;
      line-height: 1.5em;
      font-weight: 400;
    }
    h4 {
      color: rgb(151, 151, 151);
      font-size: 19px;
    }
    p {
      color: rgb(255, 255, 255);
    }
    a {
      color: rgb(173, 173, 151);
    }
    a:hover {
      color:#046779;
    }
    h1 {
      color: rgb(255, 6, 6);
    }
    footer{
        font-size: 15px;
        position:absolute;
        bottom:0;
        width:95%;
        height:120px;
        text-align:center;
    }
    </style>
</head>
<body>
<footer>
  <a href="https://t.me/GundelikCorona"><b>t.me/GundelikCorona</b></a><br><br>
  <a href="http://tiox.tech/api/">API</strong></a>&nbsp;&nbsp;
  <a href="https://github.com/Tioxs/Covid-19-Information">Kaynak Kod</strong></a>&nbsp;&nbsp;
  <a href="http://t.me/bosluk">İletişim</a>
</footer>
</body>
</html>


<?php
 
 $cveri = file_get_contents("http://tiox.tech/api/covidapi.php", "");
 $veri = json_decode($cveri);
 
 echo '<p>Bugünkü Test: ', $veri->gunluk_test,"<br>",'Günlük Vaka: ', $veri->gunluk_vaka,"<br>",'Günlük Vefat: ', $veri->gunluk_vefat,"<br>",'Günlük İyileşen: ', $veri->gunluk_iyilesen,"<br><br>";
 echo 'Toplam Test: ',$veri->toplam_test,"<br>", 'Toplam Vaka: ', $veri->toplam_hasta,"<br>", 'Toplam Vefat: ', $veri->toplam_vefat,"<br>", 'Toplam İyileşen: ', $veri->toplam_iyilesen, '<h4>Son güncelleme: ', $veri->tarih;

?>