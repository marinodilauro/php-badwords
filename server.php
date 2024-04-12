<?php

var_dump($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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