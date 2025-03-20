<?php
#compras_adc.php#
require('inc/banco.php');

$item = $_POST['item'] ?? null;

if ($item) {
    $query= $pdo->prepare('INSERT INTO compras (item) VALUES (:it)');
    //associa os valores dentro da consulta
    $query->bindValue (':it',$item);
     
    $query->execute();
}

header('location:compras.php');