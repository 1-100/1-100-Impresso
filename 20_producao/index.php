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
  
  $nome_arquivo = "dupla-revisão-imagem";
  // gerar_paginas($dados, "sequencia", array(5, 5, 100));
  // gerar_paginas($dados, "intervalo", array(1,1));
  gerar_paginas($dados, "intervalo-dupla", array(56,56));

  ?>
 
</body>
</html>

<?php

  $out = ob_get_contents();
  ob_end_clean();
  echo $out;

  file_put_contents('index-' . $nome_arquivo . '.html',$out);
