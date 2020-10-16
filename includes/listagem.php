<?php 
$resultados = '';
foreach($vendas as $v){
    $resultados .= '<tr>
                        <td>'.$v->produtos.'</td>
                        <td>'.$v->fornecedores.'</td>
                        <td>'.$v->precoTotal.'</td>
                        <td>'.date('d/m/Y à\s H:i:s', strtotime($v->data)).'</td>
                        <td>'.$v->cep.'<br>'
                        .$v->uf.'<br>'
                        .$v->cidade.'<br>'
                        .$v->bairro.'<br>'
                        .$v->rua.'<br>'.
                        '</td>
                    </tr>';    
}

?>

<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Venda</button>
        </a>
    </section>

    <section>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Produtos</th>
                    <th>Fornecedores</th>
                    <th>Preço Total</th>
                    <th>Data</th>
                    <th>Endereço Completo</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>
    </section>
</main>