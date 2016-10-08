<div class="container">
    <h4>Cadastrar nova Marca</h4>
    <br/>
    <form method="post" action="<?= base_url('Marcas/incluir') ?>" enctype="multipart/form-data">

        <div class="col-sm-8">
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="nome" id="marcas" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-12"><br/></div>
        <div class="col-sm-11">
            <div class="form-group">
                <button type="submit" class="btn btn-success"> Enviar</button>
                <button type="reset" class="btn btn-default"> Limpar</button>
                <button type="button" id="btn_voltar" class="btn btn-danger"
                        onclick="document.location.href = '<?= base_url('Generos') ?>'">Voltar
                </button>
            </div>

        </div>
    </form>

</div>

</body>
</html>

