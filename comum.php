<?php
include_once 'defines.php';

class Comum
{
    /**
     * essa classe reune as funfoões usadas no site
     */
    private $titulo_site;

    function __construct(){
    }

    function setTitulo(){
        $this->titulo_site = '';
    }

    function getTitulo(){
        return($this->titulo_site);
    }

    function getCabecalho(){
        return ("
            <meta charset='utf-8'>
            <meta content='width=device-width, initial-scale=1.0' name='viewport'>

            <!-- Metas fixo-->
            <meta name='author' content='". _AUTOR ."'>
            <meta name='copyright' content='". _COPYRINGHT ."'/>
            <meta http-equiv='content-type' content='text/html; charset=UTF-8'/>
            <meta http-equiv='content-language' content='pt-br, en-US'/>
            <meta name='generator' content='Visual Studio Code'/>
            <meta name='description' content='Site institucional, empresa Bruno Alves Construções,'/>
            <meta name='keywords' content='sites, web, institucional, empresa, portifolio, artigo, html, inicio, index, apresentação, serviço, projeto, contato, download'>
            <meta name='rating' content='general'/>
            <meta http-equiv='expires' content='0'/>
            <meta http-equiv='pragma' content='no-cache'/>
            <meta name='robots' content='all'>
            <link rel='canonical' href='". _CANONICAL ."'> <!-- ENDEREÇO DO SITE -->
            
            <!-- Favicons -->
            <link href='assets/img/igeti2.jpg' rel='icon'> <!-- logo16x16 -->
            <link href='assets/img/igeti2.jpg' rel='apple-touch-icon'> <!-- logo16x16 -->

            <!-- Google Adsense -->
            <script data-ad-client='ca-pub-7972995086715645' async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
            <!-- fim Adsense -->

            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i' rel='stylesheet'>

            <!-- Vendor CSS Files -->
            <link href='assets/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
            <link href='assets/vendor/icofont/icofont.min.css' rel='stylesheet'>
            <link href='assets/vendor/boxicons/css/boxicons.min.css' rel='stylesheet'>
            <link href='assets/vendor/venobox/venobox.css' rel='stylesheet'>
            <link href='assets/vendor/remixicon/remixicon.css' rel='stylesheet'>
            <link href='assets/vendor/owl.carousel/assets/owl.carousel.min.css' rel='stylesheet'>
            <link href='assets/vendor/aos/aos.css' rel='stylesheet'>

            <!-- Template Main CSS File -->
            <link href='assets/css/style.css' rel='stylesheet'>

            <title>". _TITULO ."</title>
        ");
    }

    function getMenu(){
        return ("
            <header id='header' class='fixed-top d-flex align-items-center  header-scrolled'>
                <div class='container d-flex align-items-center'>

                <div class='logo mr-auto'>
                    <!-- <h1 class='text-light'><a href='index.html'><span>HMC Empreendimentos</span></a></h1>
                    a linha abaixo é para por imagem da logo no cabeçalho -->
                    <a href='index.html'><img src='assets/img/igeti2.jpg' alt='HMC Empreedimentos' class='img-fluid'></a> <!-- logo-mono.png -->
                </div>

                <nav class='nav-menu d-none d-lg-block'>
                    <ul>
                    <li class='active'><a href='index.php'>HOME</a></li>
                    <li><a href='#about'>SOBRE NÓS</a></li>
                    <li><a href='#features'>SERVIÇOS</a></li>
                    <li><a href='#gallery'>NOSSAS OBRAS</a></li>
                    <li><a href='#team'>PARCEIROS</a></li>
                    <li><a href='#pricing'>PREÇOS</a></li> 
                    <li><a href='#contact'>CONTATO</a></li>
                    </ul>
                </nav><!-- .nav-menu -->

                </div>
            </header>
        ");
    }

    function getVendorTemplateJS(){
        return ("
            <!-- Vendor JS Files -->
            <script src='assets/vendor/jquery/jquery.min.js'></script>
            <script src='assets/vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
            <script src='assets/vendor/jquery.easing/jquery.easing.min.js'></script>
            <script src='assets/vendor/php-email-form/validate.js'></script>
            <script src='assets/vendor/venobox/venobox.min.js'></script>
            <script src='assets/vendor/waypoints/jquery.waypoints.min.js'></script>
            <script src='assets/vendor/counterup/counterup.min.js'></script>
            <script src='assets/vendor/owl.carousel/owl.carousel.min.js'></script>
            <script src='assets/vendor/aos/aos.js'></script>

            <!-- Template Main JS File -->
            <script src='assets/js/main.js'></script>
        ");
        

  
    }

    function getFooter(){
        return ("
            <footer id='footer'>
                <div class='footer-top'>
                <div class='container'>
                    <div class='row'>

                    <div class='col-lg-4 col-md-6'>
                        <div class='footer-info'>
                        <h3>Igor Gomes</h3>
                        <p class='pb-3'><em>Tenha seu site, fale comigo</em></p>
                        <p>
                            Fortaleza, Ce.<br>
                            <strong>Phone:</strong> <a href='tel:5585920006476'>(85) 92000-6476</a><br>
                            <strong>Email:</strong> <a href='mailto:contato@igorgomes.eeti.br'>contato@igorgomes.eti.br</a><br>
                        </p>
                        <div class='social-links mt-3'>
                            <a href='#' class='twitter'><i class='bx bxl-twitter'></i></a>
                            <a href='#' class='facebook'><i class='bx bxl-facebook'></i></a>
                            <a href='#' class='instagram'><i class='bx bxl-instagram'></i></a>
                            <a href='#' class='google-plus'><i class='bx bxl-skype'></i></a>
                            <a href='#' class='linkedin'><i class='bx bxl-linkedin'></i></a>
                        </div>
                        </div>
                    </div>

                    <div class='col-lg-2 col-md-6 footer-links'>
                        <h4>Links Uteis</h4>
                        <ul>
                        <li><i class='bx bx-chevron-right'></i> <a href='#'>Home</a></li>
                        <li><i class='bx bx-chevron-right'></i> <a href='#'>Sobre Nós</a></li>
                        <li><i class='bx bx-chevron-right'></i> <a href='#'>Serviços</a></li>
                        <li><i class='bx bx-chevron-right'></i> <a href='#'>Termos de Serviços</a></li>
                        <li><i class='bx bx-chevron-right'></i> <a href='#'>Politica de Privacidade</a></li>
                        </ul>
                    </div>

                    <div class='col-lg-2 col-md-6 footer-links'>
                        <h4>Outros serviços</h4>
                        <ul>
                        <li><i class='bx bx-chevron-right'></i> <a href='#'>Web Design</a></li>
                        <li><i class='bx bx-chevron-right'></i> <a href='#'>Web Development</a></li>
                        </ul>
                    </div>

                    <div class='col-lg-4 col-md-6 footer-newsletter'>
                        <h4>Nosso boletim informativo</h4>
                        <p>Receba informações no seu e-mail</p>
                        <form action=' method='post'>
                        <input type='email' name='email'><input type='submit' value='se inscrever'>
                        </form>
                    </div>

                    </div>
                </div>
                </div>

                <div class='container'>
                <div class='copyright'>
                    &copy; Copyright <strong><span>Igor Gomes ETI</span></strong>. Direitos reservados
                </div>
                <div class='credits'>
                    Designed by <a href='https:/igorgomes.eti.br/'>igorgomes.eti.br</a>
                </div>
                </div>

                ".$this->getVendorTemplateJS()."
            </footer>
        ");
    }
}
