<?php 

include 'partials/functions.php';

$caminho = "./data/formas.csv";
$dados = carregar_dados($caminho);
$range = "076a100";

ob_start();

?>

<?php include 'partials/head.php' ?>

<body>
  <?php
  
  $nome_arquivo = "branco";
  gerar_paginas($dados, "sequencia", array(5, 5, 100));

  ?>
 
</body>
</html>

<?php

  $out = ob_get_contents();
  ob_end_clean();
  echo $out;

  file_put_contents('index-' . $nome_arquivo . '.html',$out);
