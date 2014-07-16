<?php

include './classes/conection.php';
extract($_POST);
$pergunta1;
$pergunta2;
$pergunta3;
$pergunta4;
$pergunta5;
$pergunta6;
$pergunta7;
$i = 0;

if ($conn) {
    // insere as respostas da questão 3
    foreach ($pergunta3 as $key => $value) {
        $sql3 = mysql_query("INSERT INTO `$BD`.`$respostasCheck` (`id`, `adjetivo`) VALUES (NULL, '$value'); ");
        if ($sql3) {
            echo 'sucesso no radio';
        } else {
            echo 'falhou na sintaxe d radio';
            break;
        }
    }

      // insere as demais questões questão 3
    $sql = "INSERT INTO `$BD`.`$respostasRadio` (`id`, `1`, `2`, `3`, `4`, `5`, `6`) VALUES (NULL,'$pergunta1', '$pergunta2', '$pergunta4', '$pergunta5', '$pergunta6', '$pergunta7');";
    $query1 = mysql_query($sql);
    if ($query1) {
        echo 'sucesso no radio';
    } else {
        echo 'falhou na sintaxe d radio';
        mysql_error();
    }
} else {
    header('location:../erro.php');
}


var_dump($pergunta3);
var_dump($pergunta1);
var_dump($pergunta2);
var_dump($pergunta4);
var_dump($pergunta5);
var_dump($pergunta6);
var_dump($pergunta7);

