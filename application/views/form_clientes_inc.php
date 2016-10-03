<div class="container">
    <h4>Revenda Carros - Inclusão de Clientes</h4>

    <form method="post" action="<?= base_url('clientes/grava_inclusao') ?>"
          enctype="multipart/form-data">

        <div class="col-sm-8">
            <div class="form-group">
                <label for="nome"> Nome: </label>
                <input type="text" id="nome" name="nome"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="form-group">
                <label for="email"> E-mail: </label>
                <input type="text" id="email" name="email"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="form-group">
                <label for="endereco"> Endereço: </label>
                <input type="text" id="endereco" name="endereco"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="form-group">
                <label for="cidade"> Cidade: </label>
                <input type="text" id="cidade" name="cidade"
                       class="form-control" required>
            </div>
        </div>


        <div class="col-sm-12">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-default">Limpar</button>
        </div>
    </form>
</div>
</body>
</html>
