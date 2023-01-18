<?php
try {
  $baglan = new PDO("mysql:host=127.0.0.1;dbname=basket;charset=utf8", 'root', 'secret');
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}


if (isset($_POST['gonder']))
{

$baglan
->prepare("INSERT INTO iletisim (adsoyad,eposta,konu,mesaj) VALUES (?,?, ?, ?)")
->execute([$_POST['adsoyad'], $_POST['eposta'], $_POST['konu'], $_POST['mesaj']]);

    echo "<script> alert('bilgiler başarıyla gönderildi!');
    window.location.href='../takim-detay.php'; </script>";  

}	
?>
