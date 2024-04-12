<?php 

$caminho = "./data/formas.csv";
$dados = [];

$arquivo = fopen($caminho, 'r');
if ($arquivo === false) {
  die('Não leu o arquivo ' . $caminho);
}

$cabecalho = fgetcsv($arquivo, 1000, ";");

while (($linha = fgetcsv($arquivo, 1000, ";")) !== false) {
	$dados[] = array_combine($cabecalho, $linha);
}

fclose($arquivo);

ob_start();

?>

<?php include 'partials/head.php' ?>

<body>
  <?php
  
  $contador = 1;

  // foreach ($dados as $dado) {
  //   // echo( $dado["numero"]);
  //   $forma = $dado["numero"];
  //   $descricao = $dado["descricao"];
  //   $autorias = $dado["autorias"];
  //   $links = $dado["links"];
  //   $plataformas = $dado["plataformas"];
  //   include 'partials/folha.php';
  // }

  $range = "076a100";
  for ($n = 75; $n < 100; $n++) {
    $forma = $dados[$n]["numero"];
    $descricao = $dados[$n]["descricao"];
    $autorias = $dados[$n]["autorias"];
    $links = $dados[$n]["links"];
    $plataformas = $dados[$n]["plataformas"];
    include 'partials/folha.php';   
  }

  // $n = "7";
  // $forma = $dados[$n]["numero"];
  // $descricao = $dados[$n]["descricao"];
  // $autorias = $dados[$n]["autorias"];
  // $links = $dados[$n]["links"];
  // $plataformas = $dados[$n]["plataformas"];
  // include 'partials/folha.php';

  ?>
 
</body>
</html>

<?php

  $out = ob_get_contents();
  ob_end_clean();
  echo $out;

  file_put_contents('index' . $range . '.html',$out);
