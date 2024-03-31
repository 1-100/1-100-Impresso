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
// echo '<pre>' , var_dump($dados) , '</pre>';

?>

<?php include 'parcials/head.php' ?>

<body>
  <?php
  
  foreach ($dados as $dado) {
    // echo( $dado["numero"]);
    $forma = $dado["numero"];
    $descricao = $dado["descricao"];
    $autorias = $dado["autorias"];
    $links = $dado["links"];
    $plataformas = $dado["plataformas"];
    include 'parcials/folha.php';
  }

  // $n = "7";
  // $forma = $dados[$n]["numero"];
  // $descricao = $dados[$n]["descricao"];
  // $autorias = $dados[$n]["autorias"];
  // $links = $dados[$n]["links"];
  // $plataformas = $dados[$n]["plataformas"];
  // include 'parcials/folha.php';

  ?>
 
</body>
</html>