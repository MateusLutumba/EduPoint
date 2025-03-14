<?php
   session_start();
   //print_r($_SESSION);
   if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)){
    unset( $_SESSION['email']);
    unset( $_SESSION['passe']);
    header('Location: ../index.html');
   }
   $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPoint</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <script src="./js/menu.js" defer ></script>
   </head>
<body>
    <header>
        <nav>
           <div class="logo">
            <a href="./inicio.php">
            <h2>Edu<em>Point</em>  <img src="../src/icon.jpg" alt="ícon de localização"></h2>
            </a>
           </div>
            <div class="links">
                <ul>
                    <a href="./inicio.php">
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
                <button class="mobile-btn" id="mobile-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
        <!--Links para o menu mobile-->
        <div class="menu-mobile"  id="abrir">
            <div class="fechar" >
                <i class="fa-solid fa-x"></i>
            </div>
            <div class="links-mobile">
                <ul>
                    <a href="./inicio.php">
                        <i class="fa-solid fa-house"></i>
                        <li>Inicio</li>
                    </a>
                    <a href="../html/escola.html">
                        <i class="fa-solid fa-school"></i>
                        <li>Escolas</li>
                    </a>
                    <a href="../html/universidade.html">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <li>Universidades</li>
                    </a>
                    <a href="#sobre">
                        <i class="fa-solid fa-book"></i>
                        <li>Sobre</li>
                    </a>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="mapeamento">
            <section id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126138.66866479487!2d13.273112814266236!3d-8.895076906023267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f15cdc8d2c7d%3A0x850c1c5c5ecc5a92!2sLuanda!5e0!3m2!1spt-PT!2sao!4v1741854717344!5m2!1spt-PT!2sao" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
            <aside class="card">
                <div class="cards">
                    <a href="./escola.html">
                        <i class="fa-solid fa-school"></i>
                        <span>Escolas Públicas</span>
                        <span>202</span>
                    </a>
                </div>
                <div class="cards">
                    <a href="./universidade.html">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span>Universidades Públicas</span>
                        <span>24</span>
                    </a>
                </div>
            </aside>
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