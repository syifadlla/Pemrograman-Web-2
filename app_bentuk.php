<?php
require_once 'lingkaran.php';

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(10);

echo "Jari-jari lingkaran 1 = ".$lingkaran1->jari;
echo "<br>Nilai PHI " . Lingkaran::PHI; // :: adalah konstanta/static
echo "<br>Luasnya ".$lingkaran1->getLuas();
echo "<br>Kelilingnya ".$lingkaran1->getKeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();

//Class = lingkaran ; Method/Function = getLuas(), getKeliling(), cetak() ; Variable/Properties = jari, PHI ; Object = lingkaran1, lingkaran2.

?>

