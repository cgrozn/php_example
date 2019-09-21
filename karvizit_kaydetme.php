<?

if($_POST)
{
$ad = $_POST['Ad'];
$email = $_POST['Email'];
$adres = $_POST['Adres'];
$tel = $_POST['tel'];


$dizin = "dosyalar";
@move_uploaded_file($_FILES['dosya']['tmp_name'],"./$dizin/{$_FILES['dosya']['name']}");

$dosya = fopen('kartvizit.txt', 'w');
fwrite($dosya, $_FILES['dosya']['name']. "\n");
fwrite($dosya, "AD SOYAD : ".$ad. "\n");
fwrite($dosya, "EMAİL : ".$email."\n");
fwrite($dosya, "ADRES : ".$adres."\n");
fwrite($dosya, "TELEFON : ".$tel."\n");
fclose($dosya);
header("location:listele.php");


}

if(isset($_FILES['dosya'])){
   $hata = $_FILES['dosya']['error'];
   if($hata != 0) {
      echo 'Yüklenirken bir hata gerçekleşmiş.';
   } 
   else {
      $boyut = $_FILES['dosya']['size'];
      if($boyut > (1024*1024*3)){
         echo 'Dosya 3MB den büyük olamaz.';
      } 
      else {
         $tip = $_FILES['dosya']['type'];
         $isim = $_FILES['dosya']['name'];
         $uzanti = explode('.', $isim);
         $uzanti = $uzanti[count($uzanti)-1];
         if($tip != 'image/jpeg' || $uzanti != 'jpg') {
            echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
         } 
         else {
            $dosya = $_FILES['dosya']['tmp_name'];
            @copy($dosya, 'dosyalar/' . $_FILES['dosya']['name']);
            echo 'Dosyanız yüklenmiştir!';
         }
      }
   }
}



?>




