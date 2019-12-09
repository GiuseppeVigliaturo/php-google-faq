<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-google-faq</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include 'data.php';

     ?>

  </head>
  <body>

    <!-- Riscrivere questa pagina del sito google
    https://policies.google.com/faq.
    Ci sono diverse domande con relative risposte.
    Gestire il "Database" e la visualizzazione di
    queste domande e risposte con PHP. -->
    <?php

    foreach ($faqs as $key => $value) {
      echo $value['question']."<br>"."<br>".$value['answer'];
      echo "<br>";

    }

     ?>



  </body>
</html>
