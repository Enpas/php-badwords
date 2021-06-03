<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php badwords</title>
</head>
<body>

  <?php

    $fraseRandom = "La Lambo è il capello intessuto di un imprenditore imprevisto tuttavia va ai posteri l'ardua sentenza.";

    $censura = $_GET["censura"];

    $censura = str_replace($censura, "***", $fraseRandom);

  ?>

  <h2>Frase Random: <?php echo $fraseRandom ?></h2>
  <h2>La frase random è lunga: <?php echo strlen($fraseRandom); ?></h2>
  
  <hr>

  <h2>Frase Random censurata: <?php echo $censura; ?></h2>
  <h2>La frase random censurata è lunga: <?php echo strlen($censura); ?></h2>


</body>
</html>