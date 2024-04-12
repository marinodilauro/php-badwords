<?php

$text = $_GET["text"];
$badWord = $_GET["badWord"];

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
  
  <section>
  <h1>Bad Word</h1>
  
  <form action="server.php" method="get">

    <div class="badWord_input">
      <label for="badWord">Enter word to hide</label>
      <input type="text" name="badWord" id="badWord" placeholder="es. ciao">
    </div>

    <div class="text_input">
      <label for="text">Enter text here</label>
      <textarea name="text" id="text" cols="30" rows="10" placeholder="Lorem ipsum dolor"></textarea>
    </div>

    <button type="submit">Submit</button>

  </form>
</section>

</body>
</html>