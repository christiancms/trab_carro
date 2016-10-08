<div class="container">
    <h4>Revenda Carros - Inclusão de Veículos</h4>

    <form method="post" action="<?= base_url('veiculos/grava_inclusao') ?>"
          enctype="multipart/form-data">

        <div class="col-sm-8">
            <div class="form-group">
                <label for="modelo"> Modelo do Veículo </label>
                <input type="text" id="modelo" name="modelo"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="ano"> Ano </label>
                <input type="text" id="ano" name="ano"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="form-group">
                <label for="marca"> Marca </label>
                <select name="marca_id" id="marca" class="form-control" required>
                    <option value=""> Selecione...</option>
                    <?php foreach ($marcas as $marca) { ?>
                        <option value="<?= $marca->id ?>"> <?= $marca->nome ?> </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="preco"> Preço R$: </label>
                <input type="text" id="preco" name="preco"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="cor"> Cor </label>
                <input type="text" id="cor" name="cor"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="foto"> Foto </label>
                <input type="file" id="foto" name="foto"
                       accept=".gif,.jpg,.png"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="datacad"> Data Cad. </label>
                <input type="date" id="datacad" name="datacad"
                       value="<?= $datacad ?>"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="usuario_id"> Usuário </label>
                <input type="text" id="usuario_id" name="usuario_id"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
