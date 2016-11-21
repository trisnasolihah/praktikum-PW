<?php
$nilai=80;

switch($nilai){
    case $nilai<=50 : $nilai_huruf="D";
    break;
    case $nilai<=60 : $nilai_huruf="C";
    break;
    case $nilai<=70 : $nilai_huruf="B";
    break;
    case $nilai<=80 : $nilai_huruf="A";
    break;
    default : $nilai_huruf="Tidak Valid";
    break;
}
echo"Nilai : $nilai_huruf";
?>
