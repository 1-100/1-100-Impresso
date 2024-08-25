<?php

function carregar_dados($caminho) {
  $arquivo = fopen($caminho, 'r');
  if ($arquivo === false) {
    die('Não leu o arquivo ' . $caminho);
  }

  $cabecalho = fgetcsv($arquivo, 1000, ";");
  $dados = [];
  while (($linha = fgetcsv($arquivo, 1000, ";")) !== false) {
    $dados[] = array_combine($cabecalho, $linha);
  }

  fclose($arquivo);
  return $dados;
}

function gerar_paginas($dados, $modo, $opcoes) {
  if ($modo == "unico") {
    $n = $opcoes;
    $forma = $dados[$n]["numero"];
    $descricao = $dados[$n]["descricao"];
    $autorias = $dados[$n]["autorias"];
    $links = $dados[$n]["links"];
    $plataformas = $dados[$n]["plataformas"];
    include 'partials/folha.php';
  }

  if ($modo == "intervalo") {
    $inicio = $opcoes[0] - 1;
    $fim = $opcoes[1];
    for ($n = $inicio; $n < $fim; $n++) {
      $forma = $dados[$n]["numero"];
      $descricao = $dados[$n]["descricao"];
      $autorias = $dados[$n]["autorias"];
      $links = $dados[$n]["links"];
      $plataformas = $dados[$n]["plataformas"];
      include 'partials/folha.php';   
    }
  }

  if ($modo == "intervalo-dupla") {
    $inicio;
    $fim;
    if( sizeof($opcoes) > 1) {
      $inicio = $opcoes[0] - 1;
      $fim = $opcoes[1];
    } else {
      $inicio = $opcoes[0] - 1;
      $fim = $opcoes[0];
    }
    
    for ($n = $inicio; $n < $fim; $n++) {
      $forma = $dados[$n]["numero"];
      $descricao = $dados[$n]["descricao"];
      $autorias = $dados[$n]["autorias"];
      $links = $dados[$n]["links"];
      $plataformas = $dados[$n]["plataformas"];
      include 'partials/folha-2.php';   
    }
  }

  if ($modo == "sequencia") {
    $inicio = $opcoes[0] - 1;
    $passo = $opcoes[1];
    $fim = $opcoes[2];
    for ($n = $inicio; $n < $fim; $n += $passo) {
      $forma = $dados[$n]["numero"];
      $descricao = $dados[$n]["descricao"];
      $autorias = $dados[$n]["autorias"];
      $links = $dados[$n]["links"];
      $plataformas = $dados[$n]["plataformas"];
      include 'partials/folha.php';   
    }
  }

  if ($modo == "sequencia-dupla") {
    $inicio = $opcoes[0] - 1;
    $passo = $opcoes[1];
    $fim = $opcoes[2];
    for ($n = $inicio; $n < $fim; $n += $passo) {
      $forma = $dados[$n]["numero"];
      $descricao = $dados[$n]["descricao"];
      $autorias = $dados[$n]["autorias"];
      $links = $dados[$n]["links"];
      $plataformas = $dados[$n]["plataformas"];
      include 'partials/folha-2.php';   
    }
  }

  // return echo "Modo invalido"
}