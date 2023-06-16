
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidade dos Filmes</title>
    
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
</head>

<body>
    <div class="mendu">
        <img src="./imgs/pipoca.png" />
    </div>

    <div class="menu-responsive">
        <select id="categoria-select">
            <option value="todos">Escolha Categorias</option>
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
            <a href="https://streamtape.com/e/kWW9Z7G626uYeL/" target="_blank">
                <img src="https://s2-gshow.glbimg.com/srEPJBTXJB3_KKThSe0zUSBdlz8=/0x0:1080x1351/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2023/Q/g/IPSDQ1SVKCAFBEjZsj0w/vin-diesel-poster.jpg" data-caption="Um poderoso vírus está a solta. Transmitido em uma gota de sangue e com efeito devastador em alguns segundos, o vírus mantém os infectados em um estado permanente de descontrole assassino. Dentro de 28 dias, o país está tomado e um punhado de sobreviventes inicia esforços para garantir algum futuro à raça humana, mas o que não percebem é que o vírus mortal não é única coisa que os ameaça." />
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
        <div class="filme suspense">
            <a href="https://streamtape.com/e/PZ61rR8qm0fgkD/" target="_blank">
                <img src="https://filmesonlinevizer.com/content/series/posterPt/342/22333.webp" data-caption="Legenda do Filme 3" />
            </a>
        </div>
        <div class="filme suspense">
            <a href="https://streamtape.com/e/PZ61rR8qm0fgkD/" target="_blank">
                <img src="https://filmesonlinevizer.com/content/series/posterPt/342/22333.webp" data-caption="Legenda do Filme 3" />
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
            <iframe id="filme-video" width="800" height="400" allowfullscreen allowtransparency allow="autoplay" scrolling="no" frameborder="0"></iframe>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="Js/filmeslado.js"> </script>
    
<?php




?>





</body>
</html>