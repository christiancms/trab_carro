<div class="container">
    <h3>Revenda de Carros</h3>
    <p>O veículo que você procura, está Aqui.</p>


    <?php foreach ($veiculos as $veiculo) { ?>

        <div class="col-sm-2" style="text-align:center; background-color: lightgray; color: black">
            <h3><?= $veiculo->marca ?>-<?= $veiculo->modelo ?></h3>
            <img src="./fotos/<?= $veiculo->foto ?>" style="width: 120px; height: 80px;">
            <h5>R$ <?= number_format($veiculo->preco, 2, ',', '.') ?></h5>
            <h6>Ano: <?= $veiculo->ano ?></h6>
            <button data-toggle="collapse" data-target="#opcoes" class="btn btn-success">Enviar Proposta</button>
            <div id="opcoes" class="collapse">
                <a href="<?= base_url('proposta') ?>" class="btn btn-default" role="button"> Com Cadastrado </a>
                <a href="<?= base_url('clientes/open_incluir') ?>" class="btn btn-success" role="button">  Sem Cadastro  </a>
                &nbsp;
            </div>

        </div>
    <?php } ?>
</div>
</body>
</html>

