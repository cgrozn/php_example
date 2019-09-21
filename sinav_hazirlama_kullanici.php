
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
<form method="POST" action="islem.php"> 

    <table border="3" align="center">
    <br>
    <br>
    <br>
    <br>
    <br>

        <tr >
            <td width="150px">Ad</td>
            <td width="150px"><input type="text" name="adi" /></td>
        </tr>

        <tr>
            <td  width="150px">Sifre</td>
          
            <td width="150px"><input type="text" name="sifre" /></td>
        </tr>
 <tr>
            <td  width="150px">Soyad</td>
          
            <td width="150px"><input type="text" name="soyad" /></td>
        </tr>
        <tr>
            <td width="150px">Telefon</td>

            <td width="150px"><input type="text" name="telefon" /></td>
        </tr>

        <tr >
            <td width="150px">Adres</td>

            <td width="150px"><input type="text" name="adres"></td>
        </tr>

           
        <tr>
            <td colspan="2" ><input type="submit"  name="k_ekle" value="Ekle" /></td>
        </tr>
    </table>
    </form>
    <br><br><br>

    <form method="POST" action="islem.php" >
    <table style="width: :70%"border="1" align="center">

<tr> 
  <th>Kullanıcı </th>
    <th>Listesi Sıranlanması</th>
   
</tr>
      <tr>
        <th>Sıra</th>
        <th>ID</td>
        <th>ad</th> 
        <th>soyad</th>
        <th>sifre</th>  

          <th>telefon</th>
          <th>adres</th>
          <th width="50">Silme</th>
          <th width="50">Düzenleme</th>

      </tr>

      <?php
      $bilgisor=$db->prepare("SELECT *FROM kullanici ");
      $bilgisor->execute();
      $say=0;

      while($bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC)){$say++?> 

     
      
<tr>
  <td><?php echo $say;?>   </td>
   <td>  <?php echo $bilgicek['k_id']?></td>
  <td>  <?php echo $bilgicek['adi']?></td>
  <td><?php echo $bilgicek['soyad']?></td>
  <td><?php echo $bilgicek['sifre']?></td>
  <td><?php echo $bilgicek['telefon']?></td>
  <td><?php echo $bilgicek['adres']?></td>

 
  <td align="center"><button  type="submit" name="kullanici_silme" value="<?php echo $bilgicek['k_id']?>" width="49"><img src="sil.png"></button></td>

  <td  align="center"> <a  href="kullaniciduz.php?k_id=<?php echo $bilgicek['k_id']?> "  ><img src="duzenle.png"></a></td>
</tr>     
</tr>     
  <?php } ?>
    </table>


</form>






</div>

<div align="center"    class="alt"><h2>Yapımcı Çağrı ÖZEN</h2></div>


    


<br>
<br>
<br>
<br>

</body>
</html>
