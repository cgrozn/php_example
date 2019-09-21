
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

<form method="POST" action="islem.php"  enctype="multipart/form-data" onsubmit="return isValid(this)" >
    <br><br><br><br>
      <table width="600" border="0" align="center" cellpadding="5" cellspacing="5">
      <tr>
        <th width=161 scope="row">Soru</th>
        <td width="439"><label for="soru"></label>
        <input type="text" name="soru_adi" " /></td>
      </tr>
      <tr>
        <th align="right" scope="row">SEÇENEK A</th>
        <td><label for="a"></label>
        <input type="text" name="a"  /></td>
      </tr>
      <tr>
        <th align="right" scope="row">SEÇENEK B</th>
        <td><input type="text" name="b"  /></td>
      </tr>
      <tr>
        <th align="right" scope="row">SEÇENEK C</th>
        <td><input type="text" name="c"  /></td>
      </tr>
      <tr>
        <th align="right" scope="row">SEÇENEK D</th>
        <td><input type="text" name="d" " /></td>
      </tr>
      <tr>
        <th align="right" scope="row">SEÇENEK E</th>
        <td><input type="text" name="e" /></td>
        <tr>
        <th align="right" scope="row">Konu</th>
        <td><input type="text" name="konu" /></td>
      </tr>
      </tr>
       <tr>
        
        <td align="right"><input type="submit" name="soru_ekle"  value="KAYDET" /></td>
      </tr>
  </form>

<br><br><br><br>

  <form method="POST" action="islem.php" >
    <table style="width: :70%"border="1" align="center">

<tr> 
  <th>Soruların </th>
    <th>Listesi Sıranlanması</th>
   
</tr>
      <tr>
        <th>Sıra</th>
        <th>ID</td>
        <th>Adı</th>
        <th>konu</th> 
        <th>A</th>
        <th>B</th>
       <th>C</th>
       <th>D</th>
       <th>E</th>

        
          <th width="50">Silme</th>
          <th width="50">Düzenleme</th>

      </tr>

      <?php
      $bilgisor=$db->prepare("SELECT *FROM sorular ");
      $bilgisor->execute();
      $say=0;

      while($bilgicek=$bilgisor->fetch(PDO::FETCH_ASSOC)){$say++
        ?> 

     
      
<tr>
  <td><?php echo $say;?>   </td>

   <td>  <?php echo $bilgicek['soru_id']?></td>
  <td>  <?php echo $bilgicek['soru_adi']?></td>
  <td><?php echo $bilgicek['konu']?></td>
  <td><?php echo $bilgicek['a']?></td>
  <td><?php echo $bilgicek['b']?></td>
  <td><?php echo $bilgicek['c']?></td>
 <td><?php echo $bilgicek['d']?></td>
  <td><?php echo $bilgicek['e']?></td>
 <td align="center"><button  type="submit" name="soru_sil" value="<?php echo $bilgicek['soru_id']?>" width="49"><img src="sil.png"></button></td>
 

  <td  align="center"> <a  href="duzenle.php?soru_id=<?php echo $bilgicek['soru_id']?> "  ><img src="duzenle.png"></a></td>
</tr>     
  <?php } ?>
    </table>

  </form>





</div>

<div align="center"    class="alt"><h2>Yapımcı Çağrı ÖZEN</h2></div>


  


<script >
    function isValid(frm)
{
    var soru_adi = frm.soru_adi.value;
    
    

    
    
    if ( soru_adi==null || soru_adi=="" || soru_adi.length < 2 )
    {
        alert("Soru adı 4 karakterden az olamaz");
        return false;
    }


    

    return true;
}
</script>

</body>
</html>
