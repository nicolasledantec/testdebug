<?php
session_start();
?>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Test debug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      body {
        padding-top: 20px;
      }
      .row {
        margin: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <?php
      if (isset($_SESSION["errorLogin"]) && $_SESSION["errorLogin"]) {
        ?>
        <div class="alert alert-danger">Erreur de login</div>
        <?php
      }
      ?>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">

          <form method="post" action="/listArticle.php">
            <div class="row">
              <div class="col-lg-5">
                <label class="col-form-label fw-bold d-flex justify-content-end">Login :</label>
              </div>
              <div class="col-lg-7">
                <input class="form-control" name="login" placeholder="Admin" required>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <button class="btn btn-primary">
                  <span class="fa fa-right-to-bracket"></span> Connexion
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
