<?php
include_once("../conection.php");

if (isset($_POST['update'])) {
    $nome = $_POST['nome'];
    $ensino = $_POST['ensino'];
    $endereco = $_POST['endereco'];
    $horario = $_POST['horario'];
    $contacto = $_POST['contacto'];
    $descricao =$_POST['desc_matricula'];
    $id = $_POST['id'];
    $sqlUpdate = "UPDATE universidades SET nome = '$nome', ensino = '$ensino', endereco = '$endereco', horario = '$horario', contacto = '$contacto', desc_matricula = '$descricao' WHERE id_universidadess = $id";

    $resul = mysqli_query($conexao, $sqlUpdate);
    header('Location: ./universidade.php');
}else{
    echo "erro: " . $conexao->error;
}
?>