<?php
$umur = 25;

switch (true) {
    case ($umur >= 0 && $umur <= 12):
        echo "Kategori: Anak-anak";
        break;
    case ($umur >= 13 && $umur <= 19):
        echo "Kategori: Remaja";
        break;
    case ($umur >= 20 && $umur <= 59):
        echo "Kategori: Dewasa";
        break;
    case ($umur >= 60):
        echo "Kategori: Lansia";
        break;
    default:
        echo "Umur tidak valid.";
}
?>
