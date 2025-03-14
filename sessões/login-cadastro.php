<?php
include_once ('../conection.php'); 

//sessão para os usuarios
session_start();
    if(!isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['passe'])){ 
        $email = $_POST['email'];
        $passe = $_POST['passe'];

        //print_r('email: ' . $email);
        //print_r('passe: ' . $passe);
        $sqli = "SELECT * FROM contas where email = '$email' and passe = '$passe'";
        $sql = "SELECT * FROM adms where email = '$email' and passe = '$passe'";
        $result = mysqli_query($conexao, $sqli);
        $resul = mysqli_query($conexao, $sql);
    }
    //print_r($result);
    if(mysqli_num_rows($result) != 0){
        $_SESSION['email'] = $email;
        $_SESSION['passe'] = $passe;
        header('Location: ../html/inicio.php');
    }elseif (mysqli_num_rows($resul) != 0) {
        $_SESSION['email'] = $email;
        $_SESSION['passe'] = $passe;
        header('Location: ../adm/inicio.php');
    }else {
        //usuário não caddastrado
        if(mysqli_num_rows($result, $resul) == 0){
            unset( $_SESSION['email']);
            unset( $_SESSION['passe']);
            header('Location: ../html/login-cadastro.php');
        }
    }
?>