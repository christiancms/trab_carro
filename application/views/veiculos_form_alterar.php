<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Revenda Herbie </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
        <script src="<?= base_url('bootstrap/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Revenda Herbie</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url('marcas') ?>">Cadastro de Marcas</a></li>
                    <li class="active"><a href="<?= base_url('veiculos') ?>">Cadastro de Veículos</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h4>Revenda Herbie - Alteração de Veículos</h4>

            <form method="post" action="<?= base_url('veiculos/grava_alteracao') ?>"
                  enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $veiculo->id ?>">

                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="modelo"> Modelo do Veículo </label>
                        <input type="text" id="modelo" name="modelo" 
                               value="<?= $veiculo->modelo ?>"
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="ano"> Ano </label>
                        <input type="text" id="ano" name="ano" 
                               value="<?= $veiculo->ano ?>"
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="marca"> Marca </label>
                        <select name="marca_id" id="marca" class="form-control" required>
                            <?php foreach ($marcas as $marca) { ?>
                                <option value="<?= $marca->id ?>"
                                        <?= $marca->id == $veiculo->marca_id ? 'selected' : '' ?>> <?= $marca->nome ?> </option>                            
                                    <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="preco"> Preço R$: </label>
                        <input type="text" id="preco" name="preco" 
                               value="<?= $veiculo->preco ?>"
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="cor"> Cor </label>
                        <input type="text" id="cor" name="cor" 
                               value="<?= $veiculo->cor ?>"
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="foto"> Foto </label>
                        <input type="file" id="foto" name="foto" 
                               accept=".gif,.jpg,.png"
                               class="form-control">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="datacad"> Data Cad. </label>
                        <input type="date" id="datacad" name="datacad" 
                               value="<?= $veiculo->datacad ?>"
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="destaque"> Destaque </label>
                        <input type="text" id="cor" name="destaque" 
                               value="<?= $veiculo->destaque ?>"
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
