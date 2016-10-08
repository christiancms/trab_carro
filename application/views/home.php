<div class="container">
    <h3>Revenda de Carros</h3>
    <p>O veículo que você procura, está Aqui.</p>
</div>
<?php foreach ($veiculos as $veiculo) { ?>
    <div class="col-sm-4" style="text-align:center">
        <h3><?= $veiculo->marca ?>-<?= $veiculo->modelo ?></h3>
        <img src="./fotos/<?= $veiculo->foto ?>" style="width: 120px; height: 80px;">
        <h5>R$ <?= number_format($veiculo->preco, 2, ',', '.') ?></h5>
        <h6>Ano: <?= $veiculo->ano ?></h6>
        <div class="w3-section">
            <button class="w3-btn w3-green">Proposta</button>
        </div>
    </div>
<?php } ?>
</body>
</html>

