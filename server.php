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
  <span><?php echo strlen($_GET["text"])?></span>
</section>


</body>
</html>