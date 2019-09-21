<?php 
ob_start();
session_start();

if(!isset($_SESSION['userkullanici']))
{

Header('Location:login.php?durum=fake');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sınav Hazırlama Otomasyonu
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
<div   align="center" ><img src="ortasay.jpg" width="500px" height="500px" ></div>





</div>

<div align="center"    class="alt"><h2>Yapımcı Çağrı ÖZEN</h2></div>
<!-- <table border="3" align="center">
    <br>
    <br>
    <br>
    <br>
    <br>
        <tr >
            <td width="150px">KullaniciAdi</td>
            <td width="150px"><input type="text" name="adi" /></td>
        </tr>

        <tr>
            <td  width="150px">Şifre</td>
          
            <td width="150px"><input type="password" name="sifre" /></td>
        </tr>
        <tr>

            <td colspan="2" ><input type="submit" value="Giris" name="k_giris" /></td>
        </tr>
 





   
</table>
</form>
</div>
<script >
    function isValid(frm)
{
    var adi = frm.adi.value;
    var sifre=frm.sifre.value;
    

    
    
    if ( adi==null || adi=="" || adi.length < 3 )
    {
        alert("Kullanıcı adı 4 karakterden az olamaz");
        return false;
    }

      if ( sifre==null || sifre=="" || sifre.length < 4 )
    {
        alert("Sifre 4 karakterden az olamaz");
        return false;
    }

    

    return true;
}
</script>


-->


</body>
</html>
