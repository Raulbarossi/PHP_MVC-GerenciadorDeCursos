<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__. "/../config/Routes.php";

if (!array_key_exists($caminho, $rotas)){
  http_response_code(404); die;
}

$classeControladora = $rotas[$caminho];
/** @var Alura\cursos\Controller\InterfaceControladorRequisicao */
$controlador = new $classeControladora;
$controlador->processaRequisicao();

