<?php

header("Access-Control-Allow-Origin: *"); // permite que outros sites requisitem a api
header("Access-Control-Allow-Methods: GET, POST , PUT, DELETE, OPTIONS"); // permite todos os tipos de requisição para a api
header("Content-Type: application/json"); // explicita qual o tipo de retorno da api
echo json_encode($array); // json_encode transforma um array em json
exit;