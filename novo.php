<?php
    include_once("conexao.php");
   
    if(!isset($_POST["modelo"]))
        header("location: index.php");
    
    $modelo = $_POST["modelo"];
    $marca = $_POST["marca"];
    $km = $_POST["km"];
    $ano = $_POST["ano"];
    $cor = $_POST["cor"];
    $quantos_lugares = $_POST["quantos_lugares"];
    $combustivel = $_POST["combustivel"];
    $cambio = $_POST["cambio"];
    $motor = $_POST["motor"];
    $fk_pessoa = $_POST["fk_pessoa"];
    
$sql = "INSERT INTO carro(modelo, marca, km, ano, cor, quantos_lugares, combustivel, cambio, motor, fk_pessoa) VALUES('$modelo','$marca','$km','$ano','$cor','$quantos_lugares', '$combustivel', '$cambio', '$motor', '$fk_pessoa')";

    mysqli_query($conn, $sql);

    if(mysqli_error($conn)=="")
        header("location: index.php");
?>
