<div class="container">
    <h3>Revenda de Carros</h3>
    <p>O veículo que você procura, está Aqui.</p>
</div>
<?php foreach ($veiculos as $veiculo) { ?>
    <tr>
        <td> <?= $veiculo->id ?> </td>
        <td> <?= $veiculo->modelo ?> </td>
        <td> <?= $veiculo->marca ?> </td>
        <td> <?= number_format($veiculo->preco, 2, ',', '.') ?> </td>
        <td> <?= $veiculo->cor ?> </td>
        <td> <?= $veiculo->ano ?> </td>
        <td> <?= date_format(date_create($veiculo->datacad), 'd/m/Y') ?> </td>
        <td> <img src="./fotos/<?= $veiculo->foto ?>" width=120 height=80> </td>
        <td>
            <a href="<?= base_url() . 'veiculos/alterar/' . $veiculo->id ?>">
                <span class="glyphicon glyphicon-pencil" title="Alterar"></span></a> &nbsp;&nbsp;
            <a href="<?= base_url() . 'veiculos/excluir/' . $veiculo->id ?>"
               onclick="return confirm('Confirma Exclusão do Veículo \'<?= $veiculo->modelo ?>\'?')">
                <span class="glyphicon glyphicon-remove" title="Excluir"></span></a>
        </td>
        <td>
            <input type="checkbox" name="destaque" id="destaque" value="" <?= $veiculo->destaque == 1 ? "checked" : "" ?> disabled="disabled"><br>
        </td>

    </tr>

<?php } ?>

<div class="col-sm-12"><p class="footer">Página renderizada em <strong>{elapsed_time}</strong> segundos.</p></div>
</body>
</html>

