<?php


// if (($handle = fopen(, "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "<p> $num fields in line $row: <br /></p>\n";
//         $row++;
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c] . "<br />\n";
//         }
//     }
//     fclose($handle);
// }


?>

<div class="folha">
    <div class="conteudo">
      <div class="secao-infos">
        <div class="infos">
          <div class="intro">
            <div class="contagem">
              <p><?php echo $forma ?></p>
            </div>
            <div class="descricao">
              <p><?php echo $descricao ?></p>
            </div>
          </div>
          <div class="creditos">
            <ul>
              <li><span>Autoria</span> <?php echo $autorias ?></li>
              <li><span>Link</span> <?php echo $links ?></li>
              <li><span>Plataforma</span> <?php echo $plataformas ?></li>
            </ul>
          </div>
        </div>
        <div class="thumb">
          <img src=<?php echo sprintf('"https://1-100.github.io/formas/%s/thumb.jpg"', $forma) ?>>
        </div>
      </div>
      <div class="secao-imagens">
        <?php
          
          for ($i = 1; $i <= 100; $i++) {
            $html = '<div class="item">';
            $html .= sprintf('<img src="https://1-100.github.io/formas/%s/%s.jpg">', $forma, $i);
            $html .= sprintf('<p>%s</p>', $i);
            $html .= '</div>';
            echo $html;
          }
          
        ?>
      </div>
    </div>
  </div>