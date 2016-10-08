<div class="container">
    <div class="row">
        <div class="col-sm-10"><h4>Revenda Carros - Cadastro de Veículos</h4></div>
        <div class="col-sm-2"><a href="<?= base_url('veiculos/incluir') ?>"
                                 class="btn btn-success btn-sm">
                <span class="glyphicon glyphicon-new-window"></span> Novo Veículo</a></div>
    </div>

    <?php
    // se houver uma variável de sessão definida irá exibir a mensagem
    if ($this->session->has_userdata('mensa')) {
        // obtém os valores atribuídos às variáveis de sessão
        $mensa = $this->session->flashdata('mensa');
        $tipo = $this->session->flashdata('tipo');

        // if ($tipo==1)
        if ($tipo) {
            echo "<div class='alert alert-success'>";
            echo "<strong>Successo!! </strong>" . $mensa;
            echo "</div>";
        } else {
            echo "<div class='alert alert-danger'>";
            echo "<strong>Erro... </strong>" . $mensa;
            echo "</div>";
        }
    }
    ?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Código</th>
            <th>Modelo do Veículo</th>
            <th>Marca</th>
            <th>Preço</th>
            <th>Cor</th>
            <th>Ano</th>
            <th>Data Cad.</th>
            <th>Foto</th>
            <th>Ações</th>
            <th>Destaque</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($veiculos as $veiculo) { ?>
            <tr>
                <td> <?= $veiculo->id ?> </td>
                <td> <?= $veiculo->modelo ?> </td>
                <td> <?= $veiculo->marca ?> </td>
                <td> <?= number_format($veiculo->preco, 2, ',', '.') ?> </td>
                <td> <?= $veiculo->cor ?> </td>
                <td> <?= $veiculo->ano ?> </td>
                <td> <?= date_format(date_create($veiculo->datacad), 'd/m/Y') ?> </td>
                <td><img src="./fotos/<?= $veiculo->foto ?>" width=120 height=80></td>
                <td>
                    <a href="<?= base_url() . 'veiculos/alterar/' . $veiculo->id ?>">
                        <span class="glyphicon glyphicon-pencil" title="Alterar"></span></a> &nbsp;&nbsp;
                    <a href="<?= base_url() . 'veiculos/excluir/' . $veiculo->id ?>"
                       onclick="return confirm('Confirma Exclusão do Veículo \'<?= $veiculo->modelo ?>\'?')">
                        <span class="glyphicon glyphicon-remove" title="Excluir"></span></a>
                </td>
                <td>
                    <input type="checkbox" name="destaque" id="destaque"
                           value="" <?= $veiculo->destaque == 1 ? "checked" : "" ?> disabled="disabled"><br>
                </td>

            </tr>

        <?php } ?>
        <tr>
            <td colspan="3"> Total R$:</td>
            <td> <?= number_format($soma, 2, ',', '.') ?> </td>
            <td colspan="8"> &nbsp; </td>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html>