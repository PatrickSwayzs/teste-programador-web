
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
                <select class="form-control" name="fornecedores">
                    <option selected="" disabled="">Selecione</option>
                    <option value="teste">teste</option>
                </select>
            </div>

            <div class="form-group col-sm">
                <label>Produto</label>
                <select class="form-control" name="produtos">
                    <option selected="" disabled="">Selecione Fornecedor Primeiro</option>
                    <option value="teste">teste</option>
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
                <input type="text" class="form-control" name="cep">
            </div>

            <div class="form-group col-sm">
                <label>UF</label>
                <input type="text" class="form-control" name="uf">
            </div>

            <div class="form-group col-sm">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>

            <div class="form-group col-sm">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label>Rua</label>
                <input type="text" class="form-control" name="rua">
            </div>
            <div class="form-group col-sm">
                <label>Data</label>
                <input type="date" class="form-control" name="data">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>


    </form>

</main>