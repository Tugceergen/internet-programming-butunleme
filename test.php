<ul>
    <?php foreach ($oyuncular as $key => $oyuncu) { ?>
        <li> <?= $oyuncu["isim_soyisim"]; ?> </li>
        <li> <?= $oyuncu["dogum_tarihi"]; ?> </li>
        <li> <?= $oyuncu["aciklama"]; ?> </li>
    <?php } ?>
</ul>