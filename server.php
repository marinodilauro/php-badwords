<?php

// var_dump($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS link -->
  <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Google fonts link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <title>php-badwords</title>
</head>
<body>
  
<section class="text">
  <h2>Text</h2>
  <p><?php echo $_GET["text"]?></p>
  <span>Characters in text: <?php echo strlen($_GET["text"])?></span>
</section>

<section class="text_with_badword_replaced">
  <h2>Text with badword replaced</h2>
  <span>Badword to replace: <?php echo $_GET["badWord"]?></span>
  <p><?php echo str_replace($_GET["badWord"], "***", $_GET["text"])?></p>
  <span>Characters in text: <?php echo strlen($_GET["text"])?></span>
</section>


</body>
</html>