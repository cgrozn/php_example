<?php 
ob_start();
session_start();
require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Soru Hazirla</title>
	
	<link rel="stylesheet" type="text/css" href="tasarim2.css">

</head>
<body background="arka.png">
  <div class="ust"><h1>Sınav Hazırlama Otomasyonu</h1></div>




  



<div class="ana">

<br>

<div class="bosluk"></div>

<div class="solkenar"> 
    <div><button class="myButton" onclick="location.href='index.php'"> AnaSayfa</button></div>
<div class="bosluk"></div>

<div><button class="myButton" onclick="location.href='kullanici.php'"> Kullanici</button></div>
<div class="bosluk"></div>
<div><button class="myButton" onclick="location.href='sorular.php'"> Soru Hazirla</button></div>
<div class="bosluk"></div>
<div><button class="myButton" onclick="location.href='dersler.php'"> Dersler</button></div>
<div class="bosluk"></div>
<div><button class="myButton" onclick="location.href='soruhazirla.php'">SoruGöster</button></div>
<div class="bosluk"></div>
<div><button class="myButton" onclick="location.href='cikis.php'">Çıkış</button></div>

</div>


  <?php
      $bilgisor=$db->prepare("SELECT *FROM sorular");
      $bilgisor->execute();
      $say=0;

      while($bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC)){
      	?> 

     
      <div class="sorugos">
  <div  >
	<div ><?php echo $bilgicek['soru_adi']?></div>
     
        <div >A-)<?php echo $bilgicek['a']?></div>
        <div >B-)<?php echo $bilgicek['b']?></div>
        <div >C-)<?php echo $bilgicek['c']?></div>
        <div >D-)<?php echo $bilgicek['d']?></div>
        <div >E-)<?php echo $bilgicek['e']?></div>
</div>
<br><br>
</div>
  <?php } ?>



</body>
</html>
