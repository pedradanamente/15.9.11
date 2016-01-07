<?php include("banco.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <title>Scripting Studios Art</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/andremachado.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/lightbox.css">
</head>
<body >
    <div class="container">
        <header class="row">
         <ul class="nav nav-tabs sans">
            <li class="active">
            <a data-toggle="tab" href="#home">
                Início
            </a></li>
            <li><a data-toggle="tab" href="#menu1">Institucional</a></li>
            <li><a data-toggle="tab" href="#menu2">Tecnologias</a></li>
            <li><a data-toggle="tab" href="#menu3">Serviços</a></li>
            <li><a data-toggle="tab" href="#menu4">Produtos</a></li>
            <li><a data-toggle="tab" href="#menu5">Faq</a></li>
            <li style="background-color:#3B5998;"><a class="social" data-toggle="tab" href="#menu6">Portfólio</a></li>
            <li style="background-color:#2FCC73;"><a class="social" data-toggle="tab" href="#menu7">Orçamento</a></li>
            <li style="background-color:#DD4B39;"><a class="social" data-toggle="tab" href="#menu8">Contato</a></li>
        </ul>
        </header>
        <div class="row" >
            <div role="main" class="col-md-12" >
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div style="min-height:300px;background-image:url('images/slide.jpg');">
                        </div>
                        <h3>Conectando o mundo com você</h3>
                        <p>Criação de Sites e Sistemas Internos para sua Empresa ? Faça um orçamento sem compromisso!</p>

                        <div class="box-content">
                            <?php include("inc/frontpage.php"); ?>                                                    
                        </div>

                    </div>
                    <div id="menu1" class="tab-pane fade">
                            <?php @include("pagina/institucional.php"); ?>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="boxtop-subpage">
                            <img class="subpage-image fl" src="images/tecnologias.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Tecnologias</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content">
                            <?php @include("pagina/tecnologias.php"); ?>

                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="boxtop-subpage">
                            <img class="subpage-image fl" src="images/servicos.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Serviços</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content">
                            <?php @include("pagina/servicos.php"); ?>
                        </div>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <div class="boxtop-subpage">
                            <img class="subpage-image fl" src="images/produtos.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Produtos</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content">
                            <?php @include("pagina/produtos.php"); ?>
                        </div>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <div class="boxtop-subpage">
                            <img class="subpage-image fl" src="images/faq.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Faq</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content">
                            <?php @include("pagina/faq.php"); ?>
                        </div>
                    </div>
                    <div id="menu6" class="tab-pane fade">
                        <div class="boxtop-subpage">
                            <img class="subpage-image fl" src="images/portfolio.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Portfólio</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content">
                            <?php @include("pagina/portfolio.php"); ?>
                             <div style="clear:both;height:30px;"></div>
                        </div>
                    </div>
                    <div id="menu7" class="tab-pane fade">
                        <div class="boxtop-subpage">
                            <img class="subpage-image fl" src="images/orcamento.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Orçamento</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content">
                            <?php @include("pagina/orcamento.php"); ?>
                        </div>
                    </div>
                    <div id="menu8" class="tab-pane fade">
                        <div class="boxtop-subpage">
                            <img class="subpage-image fl" src="images/contato.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Contato</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content">
                            <?php @include("pagina/contato.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <footer class="row">
       <?php include("inc/footer.php"); ?>
    </footer>
    <div class="footerbottom row">
        E-mail: contato@scripting.com.br
       <p>Scripting Studios Art</p>
    </div>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>