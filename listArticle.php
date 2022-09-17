<?php
session_start();
require "user.class.php";
$User = null;

$login = isset($_GET["login"]) ? $_GET["login"] : "";

$user = new User();

if (!$user->verify($login)) {
  $_SESSION["errorLogin"] = true;
  header('Location: /');
  return;
}

$list_article = array(
  "1" => "Article1",
  "2" => "Article2",
  "3" => "Article3",
  "4" => "Article4"
)

nombre_visiteur = null;

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
      <div class="row">
        <div class="col-lg-12 text-end">
          <?php echo $User->nom;?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul>
            <?php
            for($i = 1; $i < 6; $i++) {
              echo "<li>$list_article[$i]</li>";
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <?php
          if ($nombre_visiteur == 0) {
            echo "Aucun visiteur<br/>";
          }
          if ($nombre_visiteur == null) {
            echo "Pas de visiteur<br/>";
          }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>

