<?php
    include_once("../conection.php");
    if(!empty ($_GET['id'])){
        $id = $_GET['id'];
        $sqlSetect = "SELECT * FROM universidades WHERE id_universidadess = $id";
        $resultado = mysqli_query($conexao, $sqlSetect);
    //print_r($resultado);        
        if($resultado->num_rows > 0){
            $sqlDelete = "DELETE FROM universidades WHERE id_universidadess = $id ";
            $resultDelete = mysqli_query($conexao, $sqlDelete);
            header('Location: ./universidade.php');
        }
    }
?>