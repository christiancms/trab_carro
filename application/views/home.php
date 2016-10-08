<div class="container">
    <h3>Revenda de Carros</h3>
    <p>O veículo que você procura, está Aqui.</p>
</div>

<?php foreach ($veiculos as $veiculo) { ?>

    <?= $veiculo->id ?>
    <?= $veiculo->modelo ?>
    <?= $veiculo->marca ?>
    <?= number_format($veiculo->preco, 2, ',', '.') ?>
    <?= $veiculo->cor ?>
    <?= $veiculo->ano ?>
    <?= date_format(date_create($veiculo->datacad), 'd/m/Y') ?>
    <img src="./fotos/<?= $veiculo->foto ?>" width=120 height=80>
    Teste


<?php } ?>

<div class="col-sm-12"><p class="footer">Página renderizada em <strong>{elapsed_time}</strong> segundos.</p></div>
</body>
</html>

