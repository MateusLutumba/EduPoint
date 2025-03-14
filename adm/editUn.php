<?php
    include_once("../conection.php");
    if(!empty ($_GET['id'])){
        $id = $_GET['id'];
        $sqlSetect = "SELECT * FROM universidades WHERE id_universidadess = $id";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cadas-actua.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <title>Actualizando universidades</title>
</head>
<body>
<header>
        <nav>
           <div class="logo">
            <a href="./inicio.php">
            <h2>Edu<em>Point</em>  <img src="../src/icon.jpg" alt="ícon de localização"></h2>
            </a>
           </div>
            <div class="box-search">
                <input type="search" name="busca" id="pesquisar" placeholder="Pesquisar">
                <button type="submit"><i class="fa-solid fa-search" ></i></button>
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
    <div class="info">
    <div class="fre">
    <h1>Actualizar Universidade</h1>
       <form action="./actualizadoUn.php" method="POST">
        <!--<input type="file" name="arquivo" id="">-->
        <div class="preechimento">
                <input type="text" name="nome" id="" placeholder="Nome da instituição" value="<?php echo $nome; ?>" required><br>
                <input type="text" name="ensino" id="" placeholder="Nível de ensino" value="<?php echo $ensino; ?>" required><br>
                <input type="text" name="endereco" id="" placeholder="Endereço da instituição" value="<?php echo $endereco; ?>" required><br>
                <input type="text" name="horario" id="" placeholder="ex: 07:00 - 18:00" value="<?php echo $horario; ?>" required><br>
                <input type="tel" name="contacto" id="" placeholder="ex: 999 999 999" value="<?php echo $contacto; ?>"><br>
                <textarea name="desc_matricula" id="" cols="80" rows="12"  placeholder="Descrição da matrícula" ><?php echo $descricao; ?></textarea><br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="botao">
              <input type="submit" name="update" value="editar">
            </div>
        </div>
        </form>
    </div></div>
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