<?php

    include("ayar.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
    }
?>
<html>

 <!-- Navbar Start -->
 <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
              <img src="balikesir.jpg" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="admin.php" class="nav-item nav-link active">oyuncu ekle</a>
                    <a href="admin_ekle.php" class="nav-item nav-link">admin ekle</a>
                    <a href="cikis.php" class="nav-item nav-link">Admin çıkış</a>
                    </div>
                 
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
</html>