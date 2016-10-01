
<!DOCTYPE html>
<html lang="en">
    <head>
    <html lang="en">
        <title> Revenda Carros </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
        <script src="<?= base_url('bootstrap/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    </head>
    <body>



        <div class="container">
            <h4>Revenda Carros - Inclusão de Clientes</h4>

            <form method="post" action="<?= base_url('clientes/open_incluir') ?>"
                  enctype="multipart/form-data">

                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="modelo"> Nome: </label>
                        <input type="text" id="nome" name="nome" 
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="modelo"> E-mail: </label>
                        <input type="text" id="email" name="email" 
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="modelo"> Endereço: </label>
                        <input type="text" id="endereço" name="endereço" 
                               class="form-control" required>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="cidade"> Cidade: </label>
                        <input type="text" id="nome" name="cidade" 
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
