<?php

$text = $_GET["text"];
$badWord = $_GET["badWord"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>php-badwords</title>
</head>
<body>
  
<h1>Bad Word</h1>

<form action="server.php" method="get">
  <input type="text" name="badWord" id="badWord" placeholder="Enter word to hide">
  <textarea name="text" id="text" cols="30" rows="10" placeholder="Enter text here"></textarea>
  <button type="submit">Submit</button>
</form>

</body>
</html>