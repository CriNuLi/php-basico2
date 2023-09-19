<?php
echo "Olá, Mundo";
$nome  = "Cristiano Nunes";
$curso = "ADS";
$ch    = 60;
$mensalidade = 899.99;
$status = true;
// Concatenação de variáveis (unir variáveis)
echo "<br>Seja bem-vindo, ".$nome;
echo "<h3>Seu curso é $curso </h3>";
echo "<h3>O curso de $curso custa R$ $mensalidade por mês</h3>";
echo "O status atual da sua matricula é: $status";
//tipo de dados
echo "<h2>Tipos de dados:</h2>";
echo "Variável nome: " .gettype($nome) ."<br>";//o gettype identifica qual o tipo de variável, e o ponto na frente ele faz a concatenação para juntar texto com variavel e funções.
echo "Variável curso: " .gettype($curso) ."<br>";
echo "Variável ch: " .gettype($ch) ."<br>";
echo "Variável mensalidade: " .gettype($mensalidade) ."<br>";
echo "Variável status: " .gettype($status) ."<br>";
//Descrição da variável 
echo "<h2>Descrição da Variável</h2>";
echo var_dump($nome) ."<br>"; //esse comando mostra o tipo da variável e o conteudo(quantidade)
echo var_dump($curso) ."<br>";
echo var_dump($ch) ."<br>";
echo var_dump($mensalidade) ."<br>";
echo var_dump($status) ."<br>";
