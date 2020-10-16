<?php

require __DIR__.'/vendor/autoload.php';

//Validação do POST
if(isset($_POST['fornecedores'], $_POST['produtos'], $_POST['preco'], $_POST['cep'], $_POST['uf'], 
$_POST['cidade'], $_POST['bairro'], $_POST['rua'], $_POST['data'])){
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';