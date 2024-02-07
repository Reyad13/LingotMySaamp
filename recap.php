<?php include_once "includes/postSpotAPI.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/lingotsdor.png" type="image/x-icon">
  <title>
    Auchan - Commande de Lingots d'Or
  </title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Auchan - Commande de Lingots d'Or
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
        </div>
      </nav>
    </header>
   </div>
    <!-- Produits section -->
    <section class="shop_section layout_padding">
      <div class="container">
          <div class="heading_container heading_center">
              <h2>
                  Confirmation de commande
              </h2>
          </div>
          <div class="row">
              <!-- Product 2 -->
              <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                    <h6>ID de la transaction : <?php echo $clOrdId; ?></h6>
                    <p>Poids total : <?php echo $poidsTotalG; ?> G</p>
                    <p>Taux : <?php echo $rateG; ?></p>
                    <p>EXID : <?php echo $EXID; ?></p>
                  </div>
              </div>
  </section>

    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Tous droits réservés par Mysaamp
        </p>
      </div>
    </footer>

        <script>
            var pair = <?= json_encode($pair) ?>;
            var deal = <?= json_encode($deal) ?>;
            var quantity = <?= json_encode($quantity) ?>;
            var remarks = <?= json_encode($remarks) ?>;
            var tauxASK  = <?= json_encode($ask) ?>;
            var tauxBID = <?= json_encode($bid) ?>;
        </script>


    </body>
</html>
