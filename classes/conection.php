<?php
$server = "127.0.0.1";
$user = "root";
$pass = "";
$respostasRadio = 'respostas';
$respostasCheck = 'questao3';
$BD = 'questionario';
$conn = mysql_connect($server,$user,$pass);
$DB = mysql_select_db($BD, $conn);