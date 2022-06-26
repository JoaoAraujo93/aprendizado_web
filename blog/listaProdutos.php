<?php 

echo "Calculos Estatico";

$total = 0;

$total = 10+5;
echo '<br> soma 10+5 ='. $total;


$total = 0;

$total = 10-5;
echo '<br> subtracao 10-5 ='. $total;


$total = 0;

$total = 5*4;
echo '<br> multiplicacao 5*4 ='. $total;

$total = 0;

$total = 20/2;
echo '<br> divisao 20/2 ='. $total;


echo "<br><br>Calculos Dinamicos";

$valor1 = 0;
$valor2 = 0;
$valor3 = 0;

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valor3= $_GET['valor3'];
$valorx= $valor1+$valor2+$valor3;
echo '<br> soma '.$valor1.'+'.$valor2.'+'.'='.$valorx;

/*
TEMA PRA CASA: 

Fazer subtracao, multiplicacao e divisao com numeros que recebidos via URL, valor1 e valor2 printando a mesma formatação de apresentação do Calculos Estaticos 

*/

$valor1 = 0;
$valor2 = 0;

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valorx = $valor1-$valor2;
echo '<br> subtracao '.$valor1.'-'.$valor2.'='.$valorx;


$valor1 = 0;
$valor2 = 0;

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valorx = $valor1*$valor2;
echo '<br> multiplicacao  '.$valor1.'*'.$valor2.'='.$valorx;


$valor1 = 0;
$valor2 = 0;

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valorx = $valor1/$valor2;
echo '<br> divisao  '.$valor1.'/'.$valor2.'='.$valorx;

$valor1 = 0;
$valor2 = 0;

$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valorx = $valor1*$valor2;
echo '<br> multiplicacao  '.$valor1.'*'.$valor2.'='.$valorx;




?>