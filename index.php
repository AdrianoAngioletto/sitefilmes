
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidade dos Filmes</title>
  
    <style>
        /* Estilos do menu e dos filmes */
        .menu {
            width: 100%;
            max-width: 350px;
            margin: auto;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: black;
            padding: 10px;
        }

        .filme-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0 auto;
            max-width: 900px;
        }

        .filme {
            width: 150px;
            margin: 10px;
            cursor: pointer;
        }

        .filme img {
            width: 100%;
            height: auto;
        }

        body {
            background-color: black;
            color: white;
        }

        #filme-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 999;
        }

        #filme-overlay-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        #filme-caption {
            color: white;
            font-size: 24px;
            margin-bottom: 20px;
        }

        #filme-video {
            width: 80%;
            height: auto;
        }

        /* Media query para dispositivos móveis */
        @media (max-width: 767px) {
            .menu {
                display: none;
            }

            .menu-icon {
                display: block;
                text-align: right;
                margin-right: 10px;
            }
        }

        /* Media query para telas maiores */
        @media (min-width: 768px) {
            .menu {
                display: block;
            }
        }

        .menu-responsive {
            text-align: center;
            margin-top: 10px;
        }

        #categoria-select {
            padding: 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
            appearance: none; /* Remove o estilo padrão do select */
        }

        #categoria-select option {
            background-color: #333;
            color: white;
        }

        #categoria-select:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        div {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        #search-input {
            padding: 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            margin-right: 10px;
            width: 300px;
        }

        #search-input:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        #search-btn {
            padding: 8px 16px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        #search-btn:hover {
            background-color: #555;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
</head>

<body>
    <div class="mendu">
        <img src="https://www.netmovies.com.br/assets/images/netmovies.webp" width="350" />
    </div>

    <div class="menu-responsive">
        <select id="categoria-select">
            <option value="todos">Todos</option>
            <option value="terror">Terror</option>
            <option value="suspense">Suspense</option>
            <option value="acao">Filmes de Ação</option>
            <option value="comedia">Filmes de Comédia</option>
            <option value="animados">Filmes Animados</option>
            <option value="erotico">Filmes Eróticos</option>
        </select>
    </div>

    <div>
        <input type="text" id="search-input" placeholder="Digite o título do filme">
        <button id="search-btn">Pesquisar</button>
    </div>

    <div class="filme-container">
        <div class="filme terror">
            <a href="https://streamtape.com/e/PZ61rR8qm0fgkD/" target="_blank">
                <img src="https://filmesonlinevizer.com/content/movies/posterPt/342/24491.webp" data-caption="Um poderoso vírus está a solta. Transmitido em uma gota de sangue e com efeito devastador em alguns segundos, o vírus mantém os infectados em um estado permanente de descontrole assassino. Dentro de 28 dias, o país está tomado e um punhado de sobreviventes inicia esforços para garantir algum futuro à raça humana, mas o que não percebem é que o vírus mortal não é única coisa que os ameaça." />
            </a>
        </div>
        <div class="filme suspense">
            <a href="https://streamtape.com/e/PZ61rR8qm0fgkD/" target="_blank">
                <img src="https://ottvsimg.ottvs.com.br/cov/mar.248815/0248815_335.jpg" data-caption="Legenda do Filme 2" />
            </a>
        </div>
        <div class="filme suspense">
            <a href="https://streamtape.com/e/PZ61rR8qm0fgkD/" target="_blank">
                <img src="https://filmesonlinevizer.com/content/series/posterPt/342/22333.webp" data-caption="Legenda do Filme 3" />
            </a>
        </div>
    </div>

    <div id="filme-overlay">
        <div id="filme-overlay-content">
            <h3 id="filme-caption"></h3>
            <iframe id="filme-video" width="800" height="600" allowfullscreen allowtransparency allow="autoplay" scrolling="no" frameborder="0"></iframe>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
      $(document).ready(function() {
    $('.filme-container .filme').hover(
        function() {
            $(this).css('cursor', 'pointer');
        },
        function() {
            $(this).css('cursor', 'auto');
        }
    );

    $('.filme-container .filme').on('click', function(e) {
        e.preventDefault();
        var caption = $(this).find('img').data('caption');
        var videoSrc = $(this).find('a').attr('href');

        $('#filme-caption').text(caption);
        $('#filme-video').attr('src', videoSrc);

        $('#filme-overlay').fadeIn();
    });

    $('#filme-overlay').on('click', function() {
        $('#filme-overlay').fadeOut();
        $('#filme-video').attr('src', ''); // Remover o atributo src do vídeo ao fechar a sobreposição
    });

    $('.filme-container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('#categoria-select').on('change', function() {
        var categoria = $(this).val();

        if (categoria === 'todos') {
            $('.filme').show();
        } else {
            $('.filme').hide();
            $('.filme.' + categoria).show();
        }
    });

    $('#search-btn').on('click', function() {
        var searchTerm = $('#search-input').val().toLowerCase();

        $('.filme').each(function() {
            var titulo = $(this).find('img').data('caption').toLowerCase();

            if (titulo.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});

    </script>
<?php


require_once('./test.class.php');

require_once('./DB.class.php');

require_once('./conecta.php');


$database = new Database($host, $username, $password, $dbname, null);

$database->Conecta_Ai_Bb();
$database->Pega_Conexao();

$conexao = $database->Pega_Conexao();



?>





</body>
</html>