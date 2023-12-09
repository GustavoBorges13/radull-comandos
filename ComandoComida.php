<?php
$c1 = "comeu uma Pizza";
$c2 = "comeu um Hambúrguer";
$c3 = "comeu Sushi";
$c4 = "comeu uma Salada";
$c5 = "comeu Macarrão";
$c6 = "comeu Churrasco";
$c7 = "comeu um Sanduíche";
$c8 = "comeu Lasanha";
$c9 = "comeu um Frango Assado";
$c10 = "comeu Tacos";
$c11 = "comeu um Cachorro-quente";
$c12 = "comeu Camarão";
$c13 = "comeu um Risoto";
$c14 = "comeu Peixe Grelhado";
$c15 = "comeu Carne de Porco";
$c16 = "comeu Espaguete";
$c17 = "tomou uma Sopa";
$c18 = "comeu um Burrito";
$c19 = "comeu Salmão";
$c20 = "comeu uma Costelinha de Porco";
$c21 = "tomou Molho de Tomate";
$c22 = "comeu Feijoada";
$c23 = "comeu Batata Frita";
$c24 = "comeu um Wrap";
$c25 = "comeu Frango Frito";
$c26 = "comeu um Omelete";
$c27 = "comeu Ceviche";
$c28 = "comeu um Quiche";
$c29 = "comeu uma Torta de Maçã";
$c30 = "tomou Mousse de Chocolate";
$c31 = "comeu o @radull";
$c32 = "tomou um Açaí";
$c33 = "tomou Água";
$c34 = "comeu o proprio Computador";
$c35 = "comeu o proprio Computador";
$c36 = "comeu o proprio Computador";
$c37 = "comeu o proprio Computador";



$comidas = array($c1, $c2, $c3, $c4, $c5, $c6, $c7, $c8, $c9, $c10, $c11, $c12, $c13, $c14, $c15, $c16, $c17, $c18, $c19, $c20, $c21, $c22, $c23, $c24, $c25, $c26, $c27, $c28, $c29, $c30, $c31, $c32, $c33, $c34, $c35, $c36, $c37);

$comida_aleatoria = array_rand($comidas, 1);
echo $comidas[$comida_aleatoria];
?>
