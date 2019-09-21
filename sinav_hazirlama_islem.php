

<?php
ob_start();
session_start();
include('baglan.php');
if(isset($_POST['k_giris'])){

	if(empty($_POST['adi']) or empty($_POST['sifre'])){

		echo "kullanici adi veya sifre bos olamaz";
		header('Refresh:2 url=login.php');
		exit();
	}

$kullanicisor=$db->prepare('SELECT * FROM kullanici where adi=:adi and sifre=:sifre');

$kullanicisor->execute(array(
':adi'=>$_POST['adi'],
':sifre'=>$_POST['sifre']
));

$say=$kullanicisor->rowCount();
if($say>0)
{
	$_SESSION['userkullanici']=$_POST['adi'];
	echo "Giriş Başarılı";
	header('Refresh:2 url=index.php');

}
else
{
	echo "giriş başarısız";
	header('Refresh:2 url=login.php');
	exit();
}

}




if(isset($_POST ['k_ekle'])){
	


	$kaydet=$db->prepare("INSERT into kullanici set
	adi=:adi,
	soyad=:soyad,
	sifre=:sifre,
	telefon=:telefon,
	adres=:adres
	");
	$insert=$kaydet->execute(array(

		'adi'=>$_POST['adi'],
		'soyad'=>$_POST['soyad'],
		'sifre'=>$_POST['sifre'],
		'telefon'=>$_POST['telefon'],
		'adres'=>$_POST['adres']
	));


if($insert){
	Header ("Location:kullanici.php");
	exit;
}
else
{

	echo "hatali";
	//Header("Location:index.php");
	exit;
}
}

//Dersekleme///////////////////////////////////////////
if(isset($_POST ['ders_ekle'])){
	


	$kaydet=$db->prepare("INSERT into dersler set
	ders_adi=:ders_adi
	

	");
	$insert=$kaydet->execute(array(

		'ders_adi'=>$_POST['ders_adi']
		
	));


if($insert){
	Header ("Location:dersler.php");
	exit;
}
else
{

	echo "hatali";
	//Header("Location:index.php");
	exit;
}
}


///konu ekleme///////////////////////////////////////////
if(isset($_POST ['konu_ekle'])){
	


	$kaydet=$db->prepare("INSERT into konular set
	konu_adi=:konu_adi
	

	");
	$insert=$kaydet->execute(array(

		'konu_adi'=>$_POST['konu_adi']
		
	));


if($insert){
	Header ("Location:konu.php");
	exit;
}
else
{

	echo "hatali";
	//Header("Location:index.php");
	exit;
}
}

/////soru ekle////////
if(isset($_POST ['soru_ekle'])){
	


	$kaydet=$db->prepare("INSERT into sorular set
		soru_adi=:soru_adi,
	     konu=:konu,
	     a=:a,
	     b=:b,
	     c=:c,
	     d=:d,
	     e=:e

	");
	$insert=$kaydet->execute(array(

		'soru_adi'=>$_POST['soru_adi'],
		'konu'=>$_POST['konu'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		
		'c'=>$_POST['c'],
		
		'd'=>$_POST['d'],
		
		'e'=>$_POST['e']

		
	));


if($insert){
	Header ("Location:sorular.php");
	exit;
}
else
{

	echo "hatali";
	//Header("Location:index.php");
	exit;
}
}


///soru silme
if(@$_POST['soru_sil'])
{
	$sil=$db->prepare("DELETE FROM sorular where soru_id=:soru_id");
	$konrol=$sil->execute(array('soru_id'=>$_POST['soru_sil']
));

	if($konrol)
	{
		//echo "başarılı";
		header("Location:sorular.php");
	}

	else
	{
		header("Location:sorular.php");
	}
}


//soru duzenleme//////////////
if(@$_POST['soru_duzenle']){

$query = $db->prepare("UPDATE sorular SET
	soru_adi=:soru_adi,
	     konu=:konu,
	     a=:a,
	     b=:b,
	     c=:c,
	     d=:d,
	     e=:e

WHERE soru_id = :soru_id");
$update = $query->execute(array(
	'soru_id'=>$_POST['soru_duzenle'],
'soru_adi'=>$_POST['soru_adi'],
		'konu'=>$_POST['konu'],
		'a'=>$_POST['a'],
		'b'=>$_POST['b'],
		
		'c'=>$_POST['c'],
		
		'd'=>$_POST['d'],
		
		'e'=>$_POST['e']
));
if ( $update ){
  header("Location:sorular.php");
}
}


if(@$_POST['kullanici_silme'])
{
	$sil=$db->prepare("DELETE FROM kullanici where k_id=:k_id");
	$konrol=$sil->execute(array('k_id'=>$_POST['kullanici_silme']
));

	if($konrol)
	{
		echo "başarılı";
		header("Location:kullanici.php");
	}

	else
	{
		header("Location:kullanici.php");
	}
}



if(@$_POST['kullanici_duzenle']){

$query = $db->prepare("UPDATE kullanici SET
	adi=:adi,
	     soyad=:soyad,
	     sifre=:sifre,
	     telefon=:telefon,
	     adres=:adres
	   

WHERE k_id = :k_id");
$update = $query->execute(array(
	'k_id'=>$_POST['kullanici_duzenle'],
		'adi'=>$_POST['adi'],
		'soyad'=>$_POST['soyad'],
		'sifre'=>$_POST['sifre'],
		'telefon'=>$_POST['telefon'],
		'adres'=>$_POST['adres']));
if ( $update ){
  header("Location:kullanici.php");
}
}

//soru sil
if(@$_POST['ders_silme'])
{
	$sil=$db->prepare("DELETE FROM dersler where ders_id=:ders_id");
	$konrol=$sil->execute(array('ders_id'=>$_POST['ders_silme']
));

	if($konrol)
	{
		//echo "başarılı";
		header("Location:dersler.php");
	}

	else
	{
		header("Location:dersler.php");
	}
}


if(@$_POST['ders_duzenle']){

$query = $db->prepare("UPDATE dersler SET
	ders_adi=:ders_adi
	   

WHERE ders_id = :ders_id");
$update = $query->execute(array(
	'ders_id'=>$_POST['ders_duzenle'],
		'ders_adi'=>$_POST['ders_adi']
	));
	
if ( $update ){
  header("Location:dersler.php");
}
}
 ?>



