<?php
include './classes/conection.php';

if($conn){
    header('location:inicio.php');
}  else {
    header('location:erro.php');
}

