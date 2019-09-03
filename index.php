<?php 

require "vendor/autoload.php";

// $email = new app\classes\Email;

// echo $email->send();

// $produto = new app\models\Produto;

// echo $produto->criar();

// $servico = new asw\services\Search;

// echo $servico->search();

$registro = new asw\jobs\Register;

dd($registro->register());