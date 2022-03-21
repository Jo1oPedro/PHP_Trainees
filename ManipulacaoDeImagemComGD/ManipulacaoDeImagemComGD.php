<?php

$imagem = imagecreatetruecolor(300, 300);

$cor = imagecolorallocate($imagem, 255, 0, 0);
                // x, y // x da esquerda pra direita, y de cima para baixo
imagefill($imagem, 0, 0, $cor);

header("Content-Type: image/jpeg"); // transformando o header em uma imagem para exibir com o imagejpeg($imagem, null, 100);
imagejpeg($imagem, null, 100); // 1° parametro é a imagem, 2° parametro é onde vai salvar a imagem, 3° parametro é a qualidade da imagem

imagejpeg($imagem, 'nova_imagem.jpg', 100);
imagepng($imagem, 'nova_imagem2.png');