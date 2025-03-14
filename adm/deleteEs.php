<?php
    include_once("../conection.php");
    if(!empty ($_GET['id'])){
        $id = $_GET['id'];
        $sqlSetect = "SELECT * FROM escolas WHERE id_escolas = $id";
        $resultado = mysqli_query($conexao, $sqlSetect);
    //print_r($resultado);        
        if($resultado->num_rows > 0){
            $sqlDelete = "DELETE FROM escolas WHERE id_escolas=$id ";
            $resultDelete = mysqli_query($conexao, $sqlDelete);
            header('Location: ./escola.php');
        }
    }
?>