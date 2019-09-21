<?php 
ob_start();
session_start();
include 'baglan.php';

if (isset($_SESSION['userkullanici'])){
    Header('Location:index.php');
    
}
?>
<!DOCTYPE html>

<html>
<head>
	<title>Sınav Hazırlama Otomasyonu
	</title>
	<link rel="stylesheet" type="text/css" href="tasarim2.css">
</head>
<body>
	<div class="ustgiris"><h1>Sınav Hazırlama Otomasyonu</h1></div>
<form method="post" action="islem.php"  enctype="multipart/form-data" onsubmit="return isValid(this)" >
	
	
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Kullanıcı Giriş Paneli</h2>
   <p>Lütfen Kullanici Adinizi ve Şifresiniz giriniz</p>
   </div>
   

        <div class="form-group">


            <input type="text" class="form-control" name="adi" placeholder="Kullanıcı Adi">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="sifre" placeholder="Password">

        </div>

        <button type="submit" class="btn btn-primary" name="k_giris">Login</button>


    </div>
<p class="botto-text"> Designed by Çağrı Özen</p>
</div></div></div>




   

</form>

  




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





</body>
</html>
