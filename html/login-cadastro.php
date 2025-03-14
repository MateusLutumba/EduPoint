<?php
include_once ('../conection.php');
if(!empty($_POST)) { 
    /* print($_POST['nome']);
     print($_POST['apelido']);
     print($_POST['email']);*/

     $nome = $_POST['nome'];
     $apelido = $_POST['apelido'];
     $email = $_POST['email'];
     $passe = $_POST['passe'];
     $sql = "INSERT INTO contas(nome, apelido, email, passe)
     VALUES ('$nome','$apelido','$email','$passe')";
     $res = mysqli_query($conexao, $sql);
 }
 ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/login-cadastro.css">
    <script src="../js/login-cadastro.js"></script>
    <script src="../jav.js"></script>
</head>
<body>
    <form action="../sessões/login-cadastro.php" method="post" name="formulario-login" >
        <div id="logar">
        <H1>Login</H1>
        <div class="input-login">
            <input type="email" name="email" id="email" placeholder="email" required maxlength="30">
            <input type="password" name="passe" id="passe" placeholder="palavra-passe" required maxlength="12">
            <input type="submit" id="btn" value="Entrar" onclick="logado()" >
        </div>
        <span>
            Já tens uma conta?
            <a href="#cadastrar" onclick="showCadastro()" >Criar Conta</a>
        </span>
        </div>
    </form>
    <form action="" method="post" >
        <div id="cadastrar">
            <H1>Criar Conta</H1>
            <div class="input-cadastro">
                <input type="text" name="nome" id="nome" placeholder="primeiro nome" required maxlength="12">
                <input type="text" name="apelido" id="apelido" placeholder="apelido" required maxlength="12">
                <input type="email" name="email" id="email" placeholder="email" required maxlength="30">
                <input type="password" name="passe" id="passe" placeholder="palavra-passe" required maxlength="12" minlength="4" >
                <input type="submit" id="btn" value="Criar Conta">
            </div>
            <span>
                Já tens uma conta?
                <a href="#logar" onclick="showLogin()" >Entrar</a>
            </span>
            </div>
    </form>
    <script>
        let cadastrar = document.querySelector('#logar')
        let logar = document.querySelector('#cadastrar')

function showCadastro() {
    cadastrar.style.display = 'none'
    logar.style.display = 'block'
    document.querySelector('.input-cadastro').style.padding = '5px 25px 30px 25px'
     document.querySelector('span').style.padding = '5px 80px 80px 80px'
}

function showLogin() {
    cadastrar.style.display = 'block'
    logar.style.display = 'none'
    document.querySelector('.input-login').style.padding = '0px 25px 0px 25px'
     document.querySelector('span').style.padding = '0px 80px 80px 80px'
}

function logado(){
            alert('Seja bem vido ao EduPoint');
        }
    </script>
   
</body>
</html>