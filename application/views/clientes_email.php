
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
            <h3> Envio de E-mail - Clientes Cadastrados </h3>

            <form method="post" action="<?= base_url('clientes/envia') ?>">
                <div class="form-group">
                    <label for="destinatario">Destinatário:</label>
                    <input type="text" class="form-control" id="destinatario" name="destinatario" 
                           value="<?= $cliente->nome ?>"
                           reandonly="reandonly">
                </div>
                <div class="form-group">
                    <label for="email">Email Destinatário:</label>
                    <input type="email" class="form-control" id="email"
                           name="email" class="from-control" value="<?= $cliente->email ?>"
                           reandonly="reandonly">
                </div>

                <div class="form-group">
                    <label for="assunto">Assunto:</label>
                    <input type="text" class="form-control" id="assunto"
                           name="assunto" class="from-control" value="Revenda Carros">
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <input type="password" class="form-control" id="mensagem" name="mensagem"></textarea>
                </div>

                <div class="form-group">
                    <label for="mensagem"> Password:</label>
                    <input type="password" class="form-control" id="pwd" name="senha">
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>

        </div>
    </body>
</html>