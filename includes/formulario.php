<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastrar Venda</h2>

    <form method="POST">
        <div class="row">
            <div class="form-group col-sm">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedores" id="fornecedores" required>
                    <option selected="" disabled="">Selecione</option>
                    <?php foreach ($fornecedores as $resultado) { ?>
                        <option value="<?php echo $resultado['nome']; ?>" <?php echo ($resultado['nome'] == 'fornecedores') ? 'selected="selected"' : ''; ?>>
                            <?php echo $resultado['nome']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>


            <div class="form-group col-sm">
                <label>Produto</label>
                <select class="form-control" name="produtos" id="produtos" required>
                    <option selected="" disabled="">Selecione Fornecedor Primeiro</option>
                    <option></option>
                </select>
            </div>

            <div class="form-group col-sm">
                <label>Preço</label>
                <input type="number" class="form-control" name="precos">
            </div>
        </div>
        <div class="row">

            <div class="form-group col-sm">
                <label>CEP</label>
                <input type="text" class="form-control" name="cep" required>
            </div>

            <div class="form-group col-sm">
                <label>UF</label>
                <input type="text" class="form-control" name="uf" required>
            </div>

            <div class="form-group col-sm">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" required>
            </div>

            <div class="form-group col-sm">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label>Rua</label>
                <input type="text" class="form-control" name="rua" required>
            </div>
            <div class="form-group col-sm">
                <label>Data</label>
                <input type="date" class="form-control" name="data" required>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>


    </form>
<!--
    <script type="text/javascript">
        $(document).ready(function() {
            $("#fornecedores").change(function() {
                var produto = $("#fornecedores").val();
                $.ajaxSetup({
                    headers: {
                        'csrftoken': '{{ csrf_token() }}'
                    }
                });
                $.ajax({
                    url: 'cadastrar.php',
                    method: 'post',
                    data: 'produto=' + produto
                }).done(function(produtos) {
                    console.log(produtos);
                    produtos = JSON.parse(produtos);
                    $('#produtos').empty();
                    produtos.forEach(function(produtos) {
                        $('#produtos').append('<option value="'+ produtos.nome +'">' + produtos.nome + '</option>')
                    })
                })
            })
        })
    </script>
    -->
</main>