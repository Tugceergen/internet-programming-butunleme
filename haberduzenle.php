<?php
	require_once 'ayar.php';
	$tt=$_GET['id'];
	if (isset($_POST['hbilgi'])) {
		
		$isim = $_POST["isim_soyisim"];
		$dogum = $_POST["dogum_tarihi"];
		$acik = $_POST["aciklama"];
		$takim = $_POST["takim_id"];
		
		
        $baglan->prepare("UPDATE tbl_oyuncu set isim_soyisim=? , dogum_tarihi=?, aciklama=?, takim_id=? where id=?")->execute([$isim,$dogum,$acik,$takim,$tt]);
		
		echo "<script>alert('Güncelleme başarılı');
		window.location.href='admin.php'; 
		</script>";
	}
	
	$sql= $baglan->query("SELECT * FROM tbl_oyuncu WHERE id ='".$tt."'");

	$satirsay=mysqli_num_rows($sql);
	if($satirsay>0)
	{
	   $satir=mysqli_fetch_array($sql);
		
	   
	 echo " 
	 <div style= text-align:center; > <form method='post'>
	<input type=text name='isim_soyisim' value=".$satir['isim_soyisim']."> <br /><br />
	<input type=text name='dogum_tarihi' value=".$satir['dogum_tarihi']."> <br /><br />
	<textarea name='aciklama' style='height: 100px;'>".$satir['aciklama']."</textarea> <br /><br />
	<input type=text name='takim_id' value=".$satir['takim_id']."> <br /><br />
	<br /><br />
 <button type='submit' name='hbilgi'>Düzenle</button>
 
 </form></div>
 ";
	}
	
	
	
?>
