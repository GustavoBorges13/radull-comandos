<?php
$p1 = "Cabeça";
$p2 = "Olhos";
$p3 = "Nariz";
$p4 = "Boca";
$p5 = "Orelhas";
$p6 = "Pescoço";
$p7 = "Ombros";
$p8 = "Braços";
$p9 = "Cotovelos";
$p10 = "Mãos";
$p11 = "Dedos";
$p12 = "Pulso";
$p13 = "Peito";
$p14 = "Barriga";
$p15 = "Costas";
$p16 = "Quadris";
$p17 = "Coxas";
$p18 = "Joelhos";
$p19 = "Pernas";
$p20 = "Tornozelos";
$p21 = "Pés";
$p22 = "Dentes";
$p23 = "Língua";
$p24 = "Cabelo";
$p25 = "Sobrancelhas";
$p26 = "Pestanas";
$p27 = "Unhas";
$p28 = "Cílios";
$p29 = "Cervical";
$p30 = "Axilas";

$partes_corpo = array($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15, $p16, $p17, $p18, $p19, $p20, $p21, $p22, $p23, $p24, $p25, $p26, $p27, $p28, $p29, $p30);

$parte_corpo_aleatoria = array_rand($partes_corpo, 1);
echo $partes_corpo[$parte_corpo_aleatoria];
?>