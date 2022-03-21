<?php

$arquivo = 'teste.jpg';
$maxWidth = 500;
$maxHeight = 500;

//print_r(getimagesize($arquivo));
//echo "<br/>";

list($originalWidth, $originalHeight) = getimagesize($arquivo); // 1° posição vai para a primeira variavel($originalWidth), 2° posição vai para a segunda

$ratio = $originalWidth / $originalHeight; // proporção da imagem;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

//echo $finalWidth . ' - ' . $finalHeight . "<br/>";

$imagem = imagecreatetruecolor($finalWidth, $finalHeight); // retorna um identificador de imagem representando uma imagem preta de tamanho x_size por y_size.
$originalImg = imagecreatefromjpeg($arquivo); // retorna um identificador de imagem representando a imagem obtida através do nome de arquivo dado.

imagecopyresampled( // copies a rectangular portion of one image to another image, smoothly interpolating pixel values so that, in particular, reducing the size of an image still retains a great deal of clarity.
    $imagem, 
    $originalImg,
    0, 0, 0, 0,
    $finalWidth, $finalHeight, 
    $originalWidth, $originalHeight
);

header("Content-Type: image/jpeg"); // transformando o header em uma imagem para exibir com o imagejpeg($imagem, null, 100);
imagejpeg($imagem, null, 100); // 1° parametro é a imagem, 2° parametro é onde vai salvar a imagem, 3° parametro é a qualidade da imagem
imagejpeg($imagem, 'teste2.jpg', 100);