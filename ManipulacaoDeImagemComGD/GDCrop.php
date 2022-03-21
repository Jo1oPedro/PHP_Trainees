<?php

$arquivo = 'teste.jpg';
$width = 300;
$height = 300;

//print_r(getimagesize($arquivo));
//echo "<br/>";

list($originalWidth, $originalHeight) = getimagesize($arquivo); // 1° posição vai para a primeira variavel($originalWidth), 2° posição vai para a width
$ratio = $originalWidth / $originalHeight; // proporção da imagem;
$ratioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if($ratioDest > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
} else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

if($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width/$ratio;

    $finalY = -(($finalHeight - $height) / 2);
} else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);
}

$imagem = imagecreatetruecolor($width, $height); // retorna um identificador de imagem representando uma imagem preta de tamanho x_size por y_size.
$originalImg = imagecreatefromjpeg($arquivo); // retorna um identificador de imagem representando a imagem obtida através do nome de arquivo dado.

imagecopyresampled( // copies a rectangular portion of one image to another image, smoothly interpolating pixel values so that, in particular, reducing the size of an image still retains a great deal of clarity.
    $imagem, 
    $originalImg,
    $finalX, $finalY, 0, 0,
    $finalWidth, $finalHeight, 
    $originalWidth, $originalHeight
);

header("Content-Type: image/jpeg"); // transformando o header em uma imagem para exibir com o imagejpeg($imagem, null, 100);
imagejpeg($imagem, null, 100); // 1° parametro é a imagem, 2° parametro é onde vai salvar a imagem, 3° parametro é a qualidade da imagem
imagejpeg($imagem, 'teste2.jpg', 100);