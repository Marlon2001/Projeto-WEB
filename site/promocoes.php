<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/slider.css">
        <title>
            Noticias
        </title>
        <link rel="shortcut icon" href="./imagens/icones/icone_principal.png" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header id="header">
            <?php include('./recursos/menu.php')?> 
        </header>
        <div id="caixa_conteudo_promocoes" class="center">
            <div id="institucional_box" style="width: 260px;">
                <div id="institucional_titulo" style="width: 245px;">
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
            <section id="bikes_list">
                <h1>Bicicletas - Bike</h1>
                <div id="box_content">
                    As bicicletas e os equipamentos de bikes das grandes marcas estão disponíveis nas versões feminina, masculina e infantil, oferecendo a pedalada certa para garantir a diversão de toda a família...
                </div>
                <span id="block_exibindo">
                    Exibindo: 1 - xx de xxxx resultados
                </span>
                <span id="block_ordenar">
                    Ordenar por
                    <select name="slc_sort" id="slc_sort">
                        <option value="1">Mais vendidos</option>
                        <option value="2">Lançamentos</option>
                        <option value="3">Ofertas</option>
                        <option value="4">Maior preço</option>
                        <option value="5">Menor preço</option>
                    </select>
                </span>
                <div id="block_bikes">
                    <?php for($i=0; $i<10; $i++){ ?>
                        <div class="card_bike">
                            <div class="card_bike_img">
                                <div class="desconto">-33%</div>
                                <div class="like"></div>
                                <span class="btn_conferir">Conferir</span>
                            </div>
                            <div class="card_bike_descricao">
                                <p class="desc">Bicicleta Gts Feel Aro 29 Freio À Disco 21 Marchas - Preto</p>
                                <p class="preco_antigo">R$ 1.499,00</p>
                                <p class="preco_novo">R$ 1.199,00</p>
                                <p class="parcelas">10x de R$ 119,90</p>
                                <a href="#">Ver semelhantes</a>
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