<?php
    include_once("../conection.php");
    if(!empty ($_GET['id'])){
        $id = $_GET['id'];
        $sqlSetect = "SELECT * FROM escolas WHERE id_escolas = $id";
        $resultado = mysqli_query($conexao, $sqlSetect);
    //print_r($resultado);        
        if($resultado->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($resultado)){
                $nome = $user_data['nome'];
                $ensino = $user_data['ensino'];
                $endereco = $user_data['endereco'];
                $horario = $user_data['horario'];
                $contacto = $user_data['contacto'];
                $descricao = $user_data['desc_matricula'];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações das Escolas</title>
    <link rel="stylesheet" href="../css/funcionamento.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
</head>
<body>
    <header>
        <nav>
           <div class="logo">
            <a href="../html/inicio.php">
            <h2>Edu<em>Point</em>  <img src="../src/icon.jpg" alt="ícon de localização"></h2>
            </a>
           </div> 
            
            <div class="links">
                <ul>
                    <a href="./inicio.php">
                        <i class="fa-solid fa-house"></i>
                        <li>Inicio</li>
                    </a>
                    <a href="./escola.php">
                        <i class="fa-solid fa-school"></i>
                        <li>Escolas</li>
                    </a>
                    <a href="./universidade.php">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <li>Universidades</li>
                    </a>
                    <a href="#sobre">
                        <i class="fa-solid fa-book"></i>
                        <li>Sobre</li>
                    </a>
                    <a href="./cadastrarEs.php">
                        <i class="fa-solid fa-pen"></i>
                        <li>Cadastrar</li>
                    </a>
                </ul>
                <div class="btn">
                    <a href="../sessões/logout.php">
                        <button type="submit">
                            <i class="fa-regular fa-user"></i>
                            Logout
                        </button>
                    </a>
                </div>
            </div>
        </nav>
        <!--Links para o menu mobile-->
        <div class="menu-mobile"  id="abrir">
            <div class="fechar" >
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="links-mobile">
                <ul>
                    <a href="./html/inicio.php" onclick="alerta()">
                        <i class="fa-solid fa-house"></i>
                        <li>Inicio</li>
                    </a>
                    <a href="./html/escola.php" onclick="alerta()">
                        <i class="fa-solid fa-school"></i>
                        <li>Escolas</li>
                    </a>
                    <a href="./html/universidade.php" onclick="alerta()">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <li>Universidades</li>
                    </a>
                    <a href="#sobre" onclick="alerta()">
                        <i class="fa-solid fa-book"></i>
                        <li>Sobre</li>
                    
                    </a>
                    <a href="./cadastrarEs.php">
                        <i class="fa-solid fa-pen"></i>
                        <li>Cadastrar</li>
                    </a>
                </ul>
            </div>
            <div class="btn-mobile">
                <a href="./html/login-cadastro.php">
                    <button type="submit">
                        <i class="fa-regular fa-user"></i>
                        Login
                    </button>
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <!--informação de cada escola/universidade-->
            <div class="top">
                <div class="imag"></div>
                <div class="inf-top">
                    <h2 ><?php echo $nome; ?></h2>
                    <p><?php echo $ensino; ?></p>
                    <p><?php echo $endereco; ?></p>
                </div>
            </div>
            <div class="baixo">
                <div class="hora-contacto">
                    <div class="hora">
                        <h3>Horario</h3>
                        <span><?php echo $horario; ?></span>
                    </div>
                    <div class="contacto">
                        <h3>Contacto</h3>
                        <span><?php echo $contacto; ?></span>
                    </div>
                </div>
                <div class="inf">
                    <h3>Informações para a matrícula</h3>
                    <p><?php echo $descricao; ?></p>
                </div>
            </div>
        </div>
    </main>
    <footer id="sobre">
        <div class="foot">
            <section class="sobre">
                <h3>Sobre</h3>
                <p>
                    Edu<em>Point</em> foi desenvolvido para facilitar o acesso a informações sobre as escolas e universidades públicas,
                    incluindo Horarios de funcionamento e localização. Nosso objectivo é melhorar a trasparência e acessibilidade
                    dos serviços públicos da educação. ML map foi desenvolvido por Mateus Rufino Lutumba como parte de um projeto do estágio no CFP Mundo da Tecnologia
                </p>
            </section>
            <section class="msg">
                <h3>Links</h3>      
                 <span>
                 <ul>
                    <a href="./inicio.php">
                        <i class="fa-solid fa-house"></i>
                        <li>Inicio</li>
                    </a>
                    <a href="./escola.php">
                        <i class="fa-solid fa-school"></i>
                        <li>Escolas</li>
                    </a>
                    <a href="./universidade.php">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <li>Universidades</li>
                    </a>
                    <a href="#sobre">
                        <i class="fa-solid fa-book"></i>
                        <li>Sobre</li>
                    </a>
                </ul>
                </span>
            </section>
            <section class="contact">
                <h3>Contacto</h3>
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    Viana, Luanda, Angola
                </span>
                <span>
                    <i class="fa-solid fa-envelope"></i>
                    schoolpoint@gmail.com
                </span>
                <span>
                    <i class="fa-solid fa-phone"></i>
                    (+244) 937 684 112
                </span>
            </section>
            <section class="redes">
                <h3>Redes Sociais</h3>
                <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                    SchoolPoint
                </a>
                <a href="#">
                    <i class="fa-brands fa-linkedin"></i>
                    SchoolPoint
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                    Mapeamento.SchoolPoint
                </a>
            </section>
        </div>
        <div class="cop">
            &copy 2025 All Rights Reserved. Design by Lutumba ML Dev
        </div>
    </footer>
</body>
</html>