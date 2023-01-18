
<?php
session_start();
 include("ayar.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Haberler admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
   

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include 'header.php' ?>


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Admin Basketbol</span></p>
                <h1 class="mb-4">Basketbol</h1>
            </div>
 <!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>id</th>
    <th>isim</th>
    <th>yaş</th>
    <th>açıklama</th>
    <th>takım id</th>
    <th>islem</th>
  </tr>
  <?php    
        if (isset($_POST['bil'])) {
        $baslk = $_POST["isim_soyisim"];
        $knu = $_POST["dogum_tarihi"];
        $acik = $_POST["aciklama"];
        $tid = $_POST["takim_id"];
        $sorgu = $baglan->query("insert into tbl_oyuncu (isim_soyisim,dogum_tarihi,aciklama,takim_id) values ('$baslk','$knu','$acik','$tid')");
        echo "<script> alert('bilgiler başarıyla eklendi!');
        window.location.href='admin.php'; </script>";
    }

  $sec="select*from tbl_oyuncu";
  $sonuc=$baglan->query($sec);

  if($sonuc->num_rows>0)
  {
    while($cek=$sonuc->fetch_assoc())
    {
       echo "
       <tr>
       <td>".$cek['id']."</td>
       <td>".$cek['isim_soyisim']."</td>
       <td>".$cek['dogum_tarihi']."</td>
       <td>".$cek['aciklama']."</td>
       <td>".$cek['takim_id']."</td>
       <td>
       <a href=haberduzenle.php?id=".$cek['id'].">Düzenle</a> | 
       <a href=habersil.php?id=".$cek['id'].">sil</a>
       </td>
    
     </tr>
       
       ";
    }
  }
  else
  {
    echo "veri bulunamadı";
  }



?>

</table>
<div style= text-align:center; >
<br /><br />
<form method="post" action="">
	<input type="text" name="isim_soyisim" placeholder="oyuncu adı"> <br /><br />
  <input type="text" name="dogum_tarihi" placeholder="oyuncu yaş"> <br /><br />
	<textarea name="aciklama" placeholder="açiklama" style="height: 100px;"></textarea><br /><br />
  <input type="text" name="takim_id" placeholder="takım id"> <br /><br />
 <button type="submit" name="bil">ekle</button>
 </div>
 </form>
</body>

</html>
       
        </div>
    </div>
    <!-- Blog End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>