<?php
	require_once 'ayar.php';
		
	$baglan
		->prepare("DELETE FROM tbl_oyuncu WHERE id = ?")
		->execute([$_GET['id']]);
		echo "<script> alert('kayıt silindi!');
	 window.location.href='admin.php'; </script>";
?>