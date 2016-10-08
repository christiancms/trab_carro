<div class="container">
    <br><br>
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="<?= base_url('Marcas/open_incluir') ?>" class="btn btn-info btn-link">
                <span class="glyphicon glyphicon-new-window"></span> Nova Marca</a>
        </div>
    </div>
   

    <?php
    //verifica se existe variavel de sessao

    if ($this->session->has_userdata('mensa')) {

        $mensa = $this->session->flashdata('mensa');
        if ($this->session->flashdata('tipo') == '1') {

            echo '<div class="alert alert-success">';
            echo '<strong>Success! </strong>' . $mensa;
            echo ' </div>';
        } else {
            echo '<div class="alert alert-danger">';
            echo '<strong>Problema! </strong>' . $mensa;
            echo ' </div>';
        }
    }
    ?>

    
    <div class="col-lg-1">
    <table class="table table-hover">
        <thead>
            <tr style="background-color: #ffffff; color: #000;">
            <th>ID</th>
            <th>Marca</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($marcas as $mar) { ?>
            <tr>
                <td> <?= $mar->id ?> </td>
                <td> <?= $mar->nome ?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>