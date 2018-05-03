<!DOCTYPE html>
<html>
  <head>
    <title>SÃO MIGUEL ARCANJO</title>
    <meta charset="utf-8" />
    <link type="image/png" href="../logo.png" rel="shortcut icon" />
    <meta name="description" content="Página dedicada à cidade de São Miguel Arcanjo" />
    <meta name="keywords" content="são miguel arcanjo, santuário, capital da uva, parque, preservação, fauna, flora, ecoturismo" />
    <meta name="author" content="Luan" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Crete+Round|Macondo" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/8ecc1aa731.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
  </head>
  <body>
    <?php include ("../includes/menu.html"); ?>
    <section class="galeria bg-light py-5">
      <div class="container-fluid">
        <div class="ampliarImg">
          <div class="row">
            <div class="col-sm-12 mb-3 col-md-4">
              <div class="container bg-white py-3 rounded">
                <a class="lightbox" href="../img/slide-topo/bemvindo.jpg">
                  <img class="w-100" src="../img/slide-topo/bemvindo.jpg" alt="1">
                </a>
                <div class="caption">
                  <p>Legenda da Foto</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="container bg-white py-3 rounded">
                <a class="lightbox" href="../img/slide-topo/estrada-serra.jpg">
                  <img class="w-100" src="../img/slide-topo/estrada-serra.jpg" alt="2">
                </a>
                <div class="caption">
                  <p>Legenda da Foto</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="container bg-white py-3 rounded">
                <a class="lightbox" href="../img/slide-topo/colonia.jpg">
                  <img class="w-100" src="../img/slide-topo/colonia.jpg" alt="3">
                </a>
                <div class="caption">
                  <p>Legenda da Foto</p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="container bg-white py-3 rounded">
                <a class="lightbox" href="../img/slide-topo/matriz.jpg">
                  <img class="w-100" src="../img/slide-topo/matriz.jpg" alt="4">
                </a>
                <div class="caption">
                  <p>Legenda da Foto</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="container bg-white py-3 rounded">
                <a class="lightbox" href="../img/slide-topo/prefeitura.jpg">
                  <img class="w-100" src="../img/slide-topo/prefeitura.jpg" alt="5">
                </a>
                <div class="caption">
                  <p>Legenda da Foto</p>
                </div>
              </div>
            </div> 
            <div class="col-sm-6 col-md-4">
              <div class="container bg-white py-3 rounded">
                <a class="lightbox" href="../img/slide-topo/capital-uva.jpg">
                  <img class="w-100" src="../img/slide-topo/capital-uva.jpg" alt="6">
                </a>
                <div class="caption">
                  <p>Legenda da Foto</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Gallery section --> 
  
  <!-- JS FILES Galeria -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.ampliarImg');
  </script>

  <!-- Footer section -->
    <?php include ("../includes/footer.html"); ?>
  
</body>
</html>