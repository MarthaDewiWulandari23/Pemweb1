<?php
$total_belanja = 250000;

if ($total_belanja >= 300000) {
    echo "Selamat, Anda mendapatkan diskon 20%!";
} elseif ($total_belanja >= 200000) {
    echo "Selamat, Anda mendapatkan diskon 10%!";
} else {
    echo "Maaf, Anda tidak mendapatkan diskon.";
}
?>