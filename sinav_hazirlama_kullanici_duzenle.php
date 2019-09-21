
<?php
ob_start();
session_start(); 
require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kullanici
	</title>

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

</form>

<?php
      $bilgisor=$db->prepare("SELECT *FROM kullanici where k_id=:k_id");
      $bilgisor->execute(array('k_id'=>$_GET['k_id']
  ));
    

    $bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC);



      	?> 
      	<div align="center">
<form action="islem.php" method="POST" >
	<input type="text" name="adi" value="<?php echo $bilgicek['adi']?>">
	<input type="text" name="soyad" value="<?php echo $bilgicek['soyad']?>">
	<input type="text" name="sifre" value="<?php echo $bilgicek['sifre']?>">
	<input type="text" name="adres" value="<?php echo $bilgicek['adres']?>">
	<input type="text" name="telefon" value="<?php echo $bilgicek['telefon']?>">
	
	<button type="submit" name="kullanici_duzenle" value="<?php echo $bilgicek['k_id']?>">FORMU GONDER</button>
</form>

</div>
  

  



</body>
</html>
