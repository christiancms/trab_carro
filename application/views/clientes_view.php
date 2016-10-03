
        <div class="container">
            <div class="row">
                <div class="col-sm-10"><h4>Revenda Carros - Cadastro de Clientes</h4></div>
                <div class="col-sm-2"><a href="<?= base_url('clientes/open_incluir') ?>"
                                         class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-new-window"></span> Novo Cliente</a></div>
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
                        <th>Nome do Cliente</th>
                        <th>E-mail</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>    
                    <?php foreach ($clientes as $cliente) { ?>
                        <tr>
                            <td> <?= $cliente->id ?> </td>  
                            <td> <?= $cliente->nome ?> </td>
                            <td> <?= $cliente->email ?> </td>
                            <td> <?= $cliente->endereco . ', ' . $cliente->num ?> </td>
                            <td> <?= $cliente->cidade ?> </td>
                            <td> 
                                <a href="<?= base_url() . 'clientes/email/' . $cliente->id ?>">
                                    <span class="glyphicon glyphicon-envelope" title="Enviar E-mail"></span></a> &nbsp;&nbsp;

                            </td>
                        </tr>    
                    <?php } ?>


                </tbody>
            </table>    
        </div>
    </body>
</html>