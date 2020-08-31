<?php
$json_file_content = file_get_contents('./includes/content.json');
$json_decodes = json_decode($json_file_content);
$count = count($json_decodes[0]->about_us);
$count_our_games = count($json_decodes[0]->our_games);

error_reporting(E_ALL);
ini_set('display_errors', 1);





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="./style/main.css" />
  <link rel="stylesheet" type="text/css" href="./libraries/flickity.css" />
  <link rel="stylesheet" type="text/css" href="./libraries/flickity-fade.css" />
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <title>HEAD BYTE STUDIOS</title>
</head>

<body>


  <?php include './includes/each_parts/start.php'; ?>




  <div class="sticky_huge_container">
    <?php include './includes/each_parts/sticky_menues.php' ?>
    <div class="container_section our_games" id="our_games">
      <?php include './includes/each_parts/our_games.php' ?>
    </div>
    <div class="container_section" id="about_us">
      <?php include './includes/each_parts/about_us.php' ?>
    </div>
    <div class="container_section" id="career">
      <?php include './includes/each_parts/carrer.php' ?>
    </div>
    <div class="container_section" id="contact">

    </div>
  </div>





  <script src="./libraries/flickity.pkgd.min.js"></script>
  <script src="./libraries/flickity-fade.js"></script>
  <script src="./scripts/main.js"></script>
</body>

</html>