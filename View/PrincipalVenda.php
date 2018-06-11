<?php 
    require_once '../Model/VendaModel.php';
    $objVenda = new Venda();

    $pesquisa = isset($_POST["pesquisa"]) ? $_POST["pesquisa"] : "";
?>
    <div style="margin-top: 50px !important;">          
            <div class="row">
                <div class="col-md-6">
                <form action="../Controller/Venda_Controller" method="post">
                    <input type="text" class="form-control" name="pesquisa" id="pesquisa" placeholder="Pesquisar" value="<?php echo $pesquisa; ?>" style="margin-left: 35px;" />                                 
                </form>
                </div>
                <div class="offset-md-4 col-md-2">
                    <a href="CadastrarVenda.php" class = "btn btn-primary preeche">
                        <i class="fas fa-plus" style="margin-right: 5px;"></i>
                        Venda
                    </a>
                </div>
            </div>

            <div class="row espaco">
                <div class="col-md-12" style="margin-top: 30px">
                    <div class="form-group">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" width="120px">Data</th>
                                <th scope="col" width="120px">Valor Total</th>
                                <th scope="col" width="200px">Forma de Pagamento</th>
                                <th scope="col" width="120px">Serviço</th>
                                <th scope="col" width="120px">Animal</th>
                                <th scope="col" width="120px">Cliente</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($objVenda->CarregarVenda() as $item){ ?>
                                <tr>
                                    <td style="display:none"><?=$item['id_venda']?></td> 
                                    <td><?=$item['data_pagamento']?></td>
                                    <td><?=$item['valor_total']?></td>  
                                    <td><?=$item['pagamento']?></td> 
                                    <td><?=$item['servico']?></td>
                                    <td><?=$item['animal']?></td>  
                                    <td><?=$item['cliente']?></td> 
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </form>
    </div>

<?php include_once("Fim.php"); ?>