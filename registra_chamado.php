<?php
// eviando os chamados para o back-end;
session_start();
// montando o arquivo;
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);


$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

//abrindo arquivo;
$arquivo = fopen('arquivo.hd','a');

//escrevendo o arquivo;
fwrite($arquivo, $texto);

//fechando o arquivo;
fclose($arquivo);
//echo $texto;
header('Location:abrir_chamado.php');
?>