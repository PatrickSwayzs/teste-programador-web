<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Venda;

$fornecedores = Venda::getFornecedores();

//Validação do POST
if (isset($_POST['fornecedores'], $_POST['produtos'], $_POST['precos'], $_POST['cep'], $_POST['uf'],
$_POST['cidade'], $_POST['bairro'], $_POST['rua'], $_POST['data'])) {
    $obVenda = new Venda;
    $obVenda->fornecedores  = $_POST['fornecedores'];
    $obVenda->produtos      = $_POST['produtos'];
    $obVenda->precos        = $_POST['precos'];
    $obVenda->precoTotal    += $_POST['precos'];
    $obVenda->cep           = $_POST['cep'];
    $obVenda->uf            = $_POST['uf'];
    $obVenda->cidade        = $_POST['cidade'];
    $obVenda->bairro        = $_POST['bairro'];
    $obVenda->rua           = $_POST['rua'];
    $obVenda->data          = $_POST['data'];
    $obVenda->cadastrar();
    //echo "<pre>"; print_r($obVenda); echo "</pre>"; exit;

    header('location: index.php?status=success');
    exit;
}

if (isset($_POST['impressora'])) {
    
    $query =  "SELECT p.nome FROM produtos as p 
    Inner Join produtos_fornecedores as pf on p.id = pf.produtos_id 
    Inner Join fornecedores as f on pf.fornecedores_id = f.id 
    WHERE f.nome =" . $_POST['produto'] . " order by p.nome asc";

    $queryProdutos->execute($query);
    $produtos = $queryProdutos->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($produtos);
}
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';
