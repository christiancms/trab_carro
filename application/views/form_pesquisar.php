<div id="line-one"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center"> 
                <h1><b>Resultado da Pesquisa</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class='form-wrapper'>
                    <form class="form-group" method="post" 
                          action="<?= base_url('home/pesquisar') ?>">                                   
                        <input type="text" name="pesquisar" 
                               id="pesquisar" class="form-control pull-left" 
                               placeholder="Pesquisar..." 
                               required autofocus>
                        <button class="btn btn-warning pull-right" 
                                type="submit"> 
                            <span class="glyphicon glyphicon-search"></span></button>
                    </form>                    
                </div>  
            </div> 
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 id="center"><b>Veículos</b></h3>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Modelo do Veículo</th>
<!--                            <th>Marca</th>-->
                            <th>Preço</th>
                            <th>Cor</th>
                            <th>Ano</th>
<!--                            <th>Data Cad.</th>-->
                            <th id="center">Foto</th>
<!--                            <th>Destaque</th>-->
                            <th id="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php foreach ($veiculos as $veiculo) { ?>
                            <tr>
                                <td> <?= $veiculo->id ?> </td>  
                                <td> <?= $veiculo->modelo ?> </td>
    <!--                                <td> <? $veiculo->marca ?> </td>-->
                                <td> 
                                    <?=
                                    number_format($veiculo->
                                            preco, 2, ',', '.')
                                    ?> 
                                </td>
                                <td> <?= $veiculo->cor ?> </td>
                                <td> <?= $veiculo->ano ?> </td>
    <!--                                <td> 
                                    <=
                                    date_format(date_create($veiculo->
                                                    datacad), 'd/m/Y')
                                    ?> 
                                </td>-->
                                <td id="center"> <img src="./fotos/<?= $veiculo->foto ?>" 
                                                      width=120 height=80> </td>
            <!--                                <td> <? $veiculo->destaque ?> </td>-->
                                <td id="center">
                                    <p> 
                                        <a href="#" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-usd"></span> 
                                            Comprar
                                        </a>
                                    </p>
                                    <a href="#" class="btn btn-default btn-sm"
                                       data-toggle="modal" 
                                       data-target="#myModal">
                                        <span class="glyphicon glyphicon-question-sign"></span> 
                                        Proposta
                                    </a> 
                                </td>
                            </tr>                           
                        <?php } ?>                        
                    </tbody>
                </table>
                <?php
                if (empty($veiculo)) {
                    echo "<div class='alert alert-danger'>";
                    echo "<strong>Não há veículos com essa palavra!!!</strong>";
                    echo "</div>";
                }
                ?> 
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><b>AVISO</b></h4>
                            </div>
                            <div class="modal-body">
                                <p><b>Você precisa estar logado!!!</b></p>
                            </div>
                            <div class="modal-footer">
                                <a href="<?= base_url('cliente') ?>" 
                                   class="btn btn-default" 
                                   role="button">
                                    Fechar
                                </a>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>