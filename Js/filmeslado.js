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
    prevArrow: '<button class="avancar" aria-label="Previous" type="button">Voltar</button>',
    nextArrow: '<button class="voltar" aria-label="Next" type="button">Frente</button>',
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