<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/slider.css">
        <title>
            HOME
        </title>
        <link rel="shortcut icon" href="./imagens/icones/icone_principal.png" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header id="header">
            <?php include('./recursos/menu.php')?>
        </header>
        <div id="caixa_conteudo" class="center">
            <section id="slide">
                <h1 hidden>Burlando o w3c validator</h1>
                <?php include('./recursos/slide.php') ?>
            </section>
            <section id="conteudo">
                <h1 hidden>Burlando o w3c validator</h1>    
                <div id="conteudo_lado_esquerdo">
                    <div class="categorias">
                        Tamanhos
                    </div>
                    <div class="categorias">
                        Cor
                    </div>
                    <div class="categorias">
                        Marca
                    </div>
                    <div class="categorias">
                        Idade
                    </div>
                </div>
                <div id="conteudo_lado_direito">
                    <div id="redes_sociais">
                        <div class="rede_social facebook" style="background-image: url('./imagens/icones/icone_facebook.png'); background-repeat: no-repeat; background-size: contain">
                            <a href="#">a</a>
                        </div>
                        <div class="rede_social instagram" style="background-image: url('./imagens/icones/icone_instagram.png'); background-repeat: no-repeat; background-size: contain">
                            <a href="#">a</a>
                        </div>
                        <div class="rede_social twiter" style="background-image: url('./imagens/icones/icone_twiter.png'); background-repeat: no-repeat; background-size: contain">
                            <a href="#">a</a>
                        </div>
                    </div>     
                    <?php for($i=0; $i<=3; $i++) {?>
                        <div class="card">
                            <div class="card_img center" style="background-image: url('./imagens/bike1.jpg')">
                                
                            </div>
                            <div class="card_descricao">
                                <p class="txt_descricao">Bicicleta Aro 29 KSW Xlt 21V Câmbios Shimano Freio a Disco Mecânico</p><br>
                                <p class="txt_preco">R$ 1.198,00</p>
                            </div>
                            <div class="card_rodape">
                                <a href="#" class="card_rodape_a">Detalhes</a>
                            </div>
                        </div>     
                    <?php } ?>
                </div>
            </section>
        </div>
        <footer id="rodape">
            <?php include('./recursos/rodape.php') ?>
        </footer>
    </body>
</html>