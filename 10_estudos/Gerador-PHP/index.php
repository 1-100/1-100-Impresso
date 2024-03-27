<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>12</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://1-100.github.io/css/normalize.css">
  <style>
    


  </style>
</head>
<body>
  <div class="folha">
    <div class="conteudo">
      <div class="secao-infos">
        <div class="infos">
          <div class="intro">
            <div class="contagem">
              <p>100</p>
            </div>
            <div class="descricao">
              <p>Em um primeiro código pega uma imagem aleatoria de cada uma das contagens de 1 a 99 e atribui um valor de brilho para imagem, quanto mais pixels claros mais brilho a imagem tem. Em um segundo utiliza as informações do primeiro para reticular com as imagens da contagem um vídeo de uma pessoa batendo palmas. Esta contagem é também um agradecimento a todos que participaram desse projeto.</p>
            </div>
          </div>
          <div class="creditos">
            <ul>
              <li><span>Autoria</span> Guilherme Vieira</li>
              <li><span>Link</span> guilhermevieira.info</li>
              <li><span>Plataforma</span> Processing, Python</li>
            </ul>
          </div>
        </div>
        <div class="thumb">
          <img src="https://1-100.github.io/formas/100/thumb.jpg" alt="">
        </div>
      </div>
      <div class="secao-imagens">
        
      </div>
    </div>
  </div>
  <script>
    let imagens = document.getElementsByClassName("secao-imagens")[0];
    let baseurl = "https://1-100.github.io/formas/100/";

    for(let i = 1; i <= 100; i++) {
      let item = document.createElement("div");
      let img = document.createElement("img");
      let n = document.createElement("p");
      n.innerText = i;

      img.setAttribute("src", `${baseurl}/${i}.jpg`);
      item.append(img);
      item.append(n);
      imagens.append(item);
    }
  </script>
</body>
</html>