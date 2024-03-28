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
    // echo( $dado["Número"]);
    $forma = $dado["Número"];
    $descricao = $dado["Descrição"];
    $autorias = $dado["Autoria"];
    $links = $dado["Links"];
    $plataformas = $dado["Plataforma"];
    include 'parcials/folha.php';
  }
  ?>
 
</body>
</html>