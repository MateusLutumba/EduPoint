<?php
include_once("../conection.php");

if (isset($_POST['update'])) {
    $nome = $_POST['nome'];
    $ensino = $_POST['ensino'];
    $endereco = $_POST['endereco'];
    $horario = $_POST['horario'];
    $contacto = $_POST['contacto'];
    $descricao = $_POST['desc_matricula'];
    $id = $_POST['id'];
    $sqlUpdate = "UPDATE escolas SET nome = '$nome', ensino = '$ensino', endereco = '$endereco', horario = '$horario', contacto = '$contacto', desc_matricula = '$descricao' WHERE id_escolas = $id";

    $resul = mysqli_query($conexao, $sqlUpdate);
    header('Location: ./escola.php');
}else{
    echo "erro: " . $conexao->error;
}
?>