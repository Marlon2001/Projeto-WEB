<?php
    $loja1 = array("https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1829.312828962674!2d-46.896323983400464!3d-23.509989243783927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-23.5104151!2d-46.896316399999996!5e0!3m2!1spt-BR!2sbr!4v1551395298112",
                    "R. Prudente de Morais, 244 - Jardim Belval - Barueri");
    $loja2 = array("https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d117031.65554567646!2d-46.75434977022439!3d-23.559849797353504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-23.5226577!2d-46.684322599999994!5e0!3m2!1spt-BR!2sbr!4v1551396492117", 
                    "R. Carlos Vicari, 306 - Barra Funda - SP");
    $loja3 = array("https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d58520.29934951326!2d-46.84556090125594!3d-23.54980697030891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-23.509270299999997!2d-46.7835958!4m5!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!3m2!1d-23.550519899999998!2d-46.633309399999995!5e0!3m2!1spt-BR!2sbr!4v1552768795427", 
                    "Av. Passaredo, 11 - Aliança - Osasco");
    $loja4 = array("https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d58520.577337770876!2d-46.96821583644371!3d-23.549182496109825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x94cf0605de97e6bd%3A0x5312706bb5ec989f!2sItapevi%2C+SP!3m2!1d-23.5492651!2d-46.9331962!4m3!3m2!1d-23.5434329!2d-46.926159399999996!5e0!3m2!1spt-BR!2sbr!4v1552769037795", 
                    "R. Arlete, 12 - Vila Sao Francisco - Itapevi");
    $loja5 = array("https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d7316.174759967551!2d-46.90334251867873!3d-23.529359421412853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x94cf0137fe73bf4d%3A0x5ed73649c1d6f14d!2sJandira%2C+SP%2C+Brasil!3m2!1d-23.5280281!2d-46.9027629!4m3!3m2!1d-23.5265558!2d-46.8981284!5e0!3m2!1spt-BR!2sbr!4v1552769229174", 
                    "R. Jaguaré Mirim, 123 - Centro - Jandira");
    
    if(isset($_GET['loja']) && $_GET['loja'] == 1){
        $linkAtual = $loja1[0];
        $lojaAtual = $loja1[1];
    }else if(isset($_GET['loja']) && $_GET['loja'] == 2){
        $linkAtual = $loja2[0];
        $lojaAtual = $loja2[1];
    }else if(isset($_GET['loja']) && $_GET['loja'] == 3){
        $linkAtual = $loja3[0];
        $lojaAtual = $loja3[1];
    }else if(isset($_GET['loja']) && $_GET['loja'] == 4){
        $linkAtual = $loja4[0];
        $lojaAtual = $loja4[1];
    }else if(isset($_GET['loja']) && $_GET['loja'] == 5){
        $linkAtual = $loja5[0];
        $lojaAtual = $loja5[1];
    }else{
        $linkAtual = $loja1[0];
        $lojaAtual = $loja1[1];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Nossas Lojas</title>
        <link rel="shortcut icon" href="./imagens/icones/icone_principal.png" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header id="header">
            <?php include('./recursos/menu.php') ?>
        </header>
        <!-- Div para afastar o menu do conteudo, pois o menu esta fixed e fica sobre o conteudo -->
        <div style="width: 100%; height: 110px;"></div>
        <div id="caixa_conteudo_nossas_lojas" class="center">
            <div id="institucional_box">
                <div id="institucional_titulo">
                    institucional
                </div>
                <div id="institucional_conteudo">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="sobre.php">Quem Somos</a></li>
                        <li><a href="noticias.php">Noticias</a></li>
                        <li><a href="promocoes.php">Promoções</a></li>
                        <li><a href="eventos.php">Eventos</a></li>
                        <li><a href="nossaslojas.php">Nossas Lojas</a></li>
                        <li><a href="faleconosco.php">Fale Conosco</a></li>
                    </ul>
                </div>
            </div>
            <div id="content_box">
                <p class="box_titulo titulo_lojas">Nossas Lojas</p>
                <p class="titulo_mapa"><?php echo($lojaAtual) ?></p>
                <div id="box_mapa">
                    <div id="mapa">
                        <iframe src="<?php echo($linkAtual) ?>" width="928" height="700" frameborder="0" style="border:0; margin-left: 10px" allowfullscreen></iframe>
                    </div>
                </div>
                <div id="box_links">
                    <a href="nossaslojas.php?loja=1">
                        <div class="link_loja">
                            <i class="icone_location">&nbsp;</i>
                            <p class="nome_loja">
                                R. Prudente de Morais, 244 - Jardim Belval
                            </p>
                        </div>
                    </a>
                    <a href="nossaslojas.php?loja=2">
                        <div class="link_loja">
                            <i class="icone_location">&nbsp;</i>
                            <p class="nome_loja">
                                R. Carlos Vicari, 306 - Barra Funda, São Paulo
                            </p>
                        </div>
                    </a>
                    <a href="nossaslojas.php?loja=3">
                        <div class="link_loja">
                            <i class="icone_location">&nbsp;</i>
                            <p class="nome_loja">
                                Av. Passaredo, 11 - Aliança - Osasco
                            </p>
                        </div>
                    </a>
                    <a href="nossaslojas.php?loja=4">
                        <div class="link_loja">
                            <i class="icone_location">&nbsp;</i>
                            <p class="nome_loja">
                                R. Arlete, 12 - Vila Sao Francisco, Itapevi
                            </p>
                        </div>
                    </a>
                    <a href="nossaslojas.php?loja=5">
                        <div class="link_loja">
                            <i class="icone_location">&nbsp;</i>
                            <p class="nome_loja">
                                R. Jaguaré Mirim, 123 - Centro - Jandira
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <footer id="rodape">
            <?php include('./recursos/rodape.php') ?>
        </footer>
    </body>
</html>