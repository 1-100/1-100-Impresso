<div class="forma-folhas">
  <div class="folha l-dupla">
    <div class="conteudo">
      <div class="secao-infos">
        <div class="infos">
            <div class="contagem">
              <p><?php echo $forma ?></p>
            </div>
            <div class="descricao">
              <p><?php echo $descricao ?></p>
              <ul class="creditos">
                <li><span>Autoria</span>: <?php echo $autorias ?></li>
                <li><span>Link</span>: <?php echo $links ?></li>
                <li><span>Plataforma</span>: <?php echo $plataformas ?></li>
              </ul>
            </div>
        </div>
      </div>
      <div class="secao-imagens">
        <div class="thumb">
          <div class="img-wrapper" style="background-image: url(<?php echo sprintf('images/%s/thumb.jpg', $forma) ?>)">
            <img src=<?php echo sprintf('"images/%s/thumb.jpg"', $forma) ?>>
          </div>
        </div>
        <div class="galeria">
        <?php 
        for ($i = 1; $i <= 50; $i++) {
          $html = '<div class="item">';
          $html .= sprintf('<div class="img-wrapper" style="background-image: url(images/%s/%s.jpg)">', $forma, $i);
          $html .= sprintf('<img src="images/%s/%s.jpg">', $forma, $i);
          $html .= '</div>';
          $html .= sprintf('<p>%s</p>', $i);
          $html .= '</div>';
          echo $html;
        }
        ?>
        </div>   
      </div>
    </div>
  </div>
  <div class="folha l-dupla verso">
    <div class="conteudo">
      <div class="secao-imagens">
        <div class="galeria">
        <?php
        for ($i = 51; $i <= 100; $i++) {
          $html = '<div class="item">';
          $html .= sprintf('<div class="img-wrapper" style="background-image: url(images/%s/%s.jpg)">', $forma, $i);
          $html .= sprintf('<img src="images/%s/%s.jpg">', $forma, $i);
          $html .= '</div>';
          $html .= sprintf('<p>%s</p>', $i);
          $html .= '</div>';
          echo $html;
        }
        ?>
        </div>
      </div>
    </div>
  </div>
</div>


