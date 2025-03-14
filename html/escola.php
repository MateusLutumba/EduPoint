<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolas Públicas</title>
    <link rel="stylesheet" href="../css/escola-uni.css">
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
            <form action="">
                <div class="box-search">
                    <input type="search" name="busca" id="pesquisar" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Pesquisar">
                    <button type="submit"><i class="fa-solid fa-search" ></i></button>
                </div>
            </form>
            <div class="links">
                <ul>
                    <a href="../html/inicio.php">
                        <i class="fa-solid fa-house"></i>
                        <li>Inicio</li>
                    </a>
                    <a href="../html/escola.php">
                        <i class="fa-solid fa-school"></i>
                        <li>Escolas</li>
                    </a>
                    <a href="../html/universidade.php">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <li>Universidades</li>
                    </a>
                    <a href="#sobre">
                        <i class="fa-solid fa-book"></i>
                        <li>Sobre</li>
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
                </ul>
            </div>
            <div class="btn">
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
       <div class="lista">
        <!--liata das escolas públicas-->
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome da Escola</th>
                        <th>Ensino</th>
                        <th>Endereço</th>
                        <th>Informações</th>
                    </tr>
                    
                </table>
            <?php
                            include_once("../conection.php");
                            if(!isset($_GET['busca'])){
                                
                            }
                            $pesquisa = isset($_GET['busca']) ? $_GET['busca'] : ''; 
                             $sql = "SELECT * FROM escolas WHERE nome LIKE '%$pesquisa%' OR ensino LIKE '%$pesquisa%'
                OR endereco LIKE '%$pesquisa%'";
                             $result = $conexao->query($sql) or die("Erro ao consultar " . $conexao->error);
                             if($result->num_rows > 0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "
                                        <table>
                                            <tr>
                                                <td>$row[id_escolas]</td>
                                                <td>$row[nome]</td>
                                                <td>$row[ensino]</td>
                                                <td>$row[endereco]</td>
                                                <td><a href='./informacaoEs.php?id=$row[id_escolas]'><strong>Acessar</strong></a></td>
                                            </tr>
                                        </table>
                                         ";
                                }
                            }else {
                                    echo "Não existe nenhum registro para: " . $pesquisa;
                                }
            ?>       
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
                    <a href="../html/inicio.php">
                        <i class="fa-solid fa-house"></i>
                        <li>Inicio</li>
                    </a>
                    <a href="../html/escola.php">
                        <i class="fa-solid fa-school"></i>
                        <li>Escolas</li>
                    </a>
                    <a href="../html/universidade.php">
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