<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <title>Landing Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="<?php echo BASE_URL; ?>assets/css/template.css" rel="stylesheet" >
        
        <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" >
        <style>
            .main-slider {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
        </style>
    </head>
    <body style="">
        <header class="container header-container">
            <nav class="navbar navbar-default">
                <div class="container-fluid navbar-container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
                            <figure class="logo-fig">
                                <img src="<?php echo BASE_URL; ?>assets/images/health-clinic-logo.svg" alt="Logotipo da empresa">
                            </figure>
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="link-page"><a href="#">Quem Somos</a></li>
                            <li class="link-page"><a href="#">Equipe</a></li>
                            <li class="link-page"><a href="#">Espaço</a></li>
                            <li class="link-page"><a href="#">Contato</a></li>
                            <li> <img class="search-header" src="assets/images/icon-feather-search.svg" alt="Pesquisar algo"> </li>
                        </ul>
                        <div class="form-search-box">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default search-btn" id="search-form" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Digite a busca" name="search-term" id="search-term">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>   
        </header>
        <section class="container-fluid slide-container">
            <div class="w3-content w3-display-container" style="width:100%">
                <img class="main-slider" src="<?php echo BASE_URL; ?>assets/images/img_nature_wide.jpg">
                <img class="main-slider" src="<?php echo BASE_URL; ?>assets/images/img_snow_wide.jpg">
                <img class="main-slider" src="<?php echo BASE_URL; ?>assets/images/img_mountains_wide.jpg">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
                <div class="w3-display-middle w3-large w3-container w3-padding-16">
                    <div class="slid-title" style="">Lorem ipsum dolor sit amet</div>
                    <div class="slid-subtitle">Lorem ipsum dolor sit amet</div>
                </div>
            </div>
        </section>
        <main class="container-fluid" id="template-main">
            <?php
                $this->loadViewInTemplate($viewName, $viewData);
            ?>
        </main>

        <footer class="container-fluid">
            <div class="container">
                <div class="container" style="align-items: center max-width: 1228x; height: 155px; padding-top: 50px; justify-content: center; flex-direction: column;position: relative;">
                    <nav style="display:flex; justify-content: center; max: 350px; margin-top: 0px;margin-bottom: 50px;">
                        <div class="content-rodape">
                             <a href="#">Quem somos</a>
                        </div>
                        <div class="content-rodape">
                            <a href="#">Especialidades</a>
                        </div>

                        <div class="content-rodape">
                            <a href="#">Blog</a>
                        </div>

                        <div class="content-rodape">
                            <a href="#">Contato</a>
                        </div>
                    </nav>
                    <div class="social-links" style="padding-top:  inherit;margin-right:15px;width:79px;display:flex;justify-content:center; align-items:center;position: absolute;top: 0px;right: 0;">
                        <a href="#">
                            <div class="icon-link" style="margin-left: 10px">
                                <img class="" src="<?php echo BASE_URL; ?>assets/images/icon-awesome-linkedin-in.svg">
                            </div>
                        </a>
                        <a href="#">
                            <div class="icon-link" style="margin-left: 10px">
                                <img class="" src="<?php echo BASE_URL; ?>assets/images/icon-awesome-facebook-f.svg">
                            </div>
                        </a>
                        <a href="#">
                            <div class="icon-link" style="margin-left: 10px">
                                <img class="" src="<?php echo BASE_URL; ?>assets/images/icon-awesome-instagram.svg">
                            </div>
                        </a>
                    </div>
                    <hr style="1px solid red; width: 100%">
                    <div class="text-copyright">
                        <div class="" style="width: 100%; display: flex; justify-content: center;margin-top:40px">
                            <p>Health Clinic São Paulo - Todos os Direitos Reservados</p>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </footer>
    </body>
</html>
