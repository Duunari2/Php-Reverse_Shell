<?php
$tiedosto="Wincent_1911.txt";
  if(!file_exists($tiedosto)) {
    $kahva=fopen($tiedosto,"w+");
    $laskuri=1;
    fwrite($kahva,$laskuri);
    fclose($kahva);
}
$kahva=fopen($tiedosto,"r");
$laskuri=fread($kahva, filesize($tiedosto));
  fclose($kahva);
$kahva=fopen($tiedosto,"w+");
  if(!$c) {
    $laskuri=$laskuri+1;
    echo "Page hits <b>$laskuri</b> started from 03.09.2026 when i started the calculator.<br>";
}
  fwrite($kahva,$laskuri);
  fclose($kahva);
?>
