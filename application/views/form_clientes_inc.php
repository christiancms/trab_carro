<div class="container">
    <h4>Revenda Carros - Inclusão de Clientes</h4><br>

    <form method="post" action="<?= base_url('clientes/grava_inclusao') ?>"
          enctype="multipart/form-data">

        <div class="col-sm-8">
            <div class="form-group">
                <label for="nome"> Nome: </label>
                <input type="text" id="nome" name="nome"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="email"> E-mail: </label>
                <input type="text" id="email" name="email"
                       class="form-control" required>
            </div>
        </div>


        <div class="col-sm-8">
            <div class="form-group">
                <label for="endereco"> Endereço: </label>
                <input type="text" id="endereco" name="endereco"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="num"> Número: </label>
                <input type="text" id="num" name="num"
                       class="form-control">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="cidade"> Cidade: </label>
                <input type="text" id="cidade" name="cidade"
                       class="form-control" required>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="bairro"> Bairro: </label>
                <input type="text" id="bairro" name="bairro"
                       class="form-control">
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="cep"> CEP: </label>
                <input type="text" id="cep" name="cep" class="form-control">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="estado"> UF: </label>
                <select class="form-control" name="estado">
                    <option value="AC"> Acre </option>
                    <option value="AL"> Alagoas </option>
                    <option value="AP"> Amapá </option>
                    <option value="AM"> Amazonas </option>
                    <option value="BA"> Bahia </option>
                    <option value="CE"> Ceará </option>
                    <option value="DF"> Distrito Federal </option>
                    <option value="ES"> Espírito Santo </option>
                    <option value="GO"> Goiás </option>
                    <option value="MA"> Maranhão </option>
                    <option value="MT"> Mato Grosso </option>
                    <option value="MS"> Mato Grosso do Sul </option>
                    <option value="MG"> Minas Gerais </option>
                    <option value="PA"> Pará </option>
                    <option value="PB"> Paraíba </option>
                    <option value="PR"> Paraná </option>
                    <option value="PE"> Pernambuco </option>
                    <option value="PI"> Piauí </option>
                    <option value="RJ"> Rio de Janeiro </option>
                    <option value="RN"> Rio Grande do Norte </option>
                    <option value="RS"> Rio Grande do Sul </option>
                    <option value="RO"> Rondônia </option>
                    <option value="RR"> Roraima </option>
                    <option value="SC"> Santa Catarina </option>
                    <option value="SP"> São Paulo </option>
                    <option value="SE"> Sergipe </option>
                    <option value="TO"> Tocantins </option>
                </select>
            </div>
        </div>

        <input type="hidden" id="ativo" name="ativo" value="1">

        <div class="col-sm-12">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-default">Limpar</button>
        </div>

        </body>
        </html>
