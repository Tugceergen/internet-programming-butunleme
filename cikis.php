<?php
    session_start();
    session_destroy();
    setcookie("kullanici","",time()-1);
    header("location: ../index.php");
?>