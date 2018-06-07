<?php include_once("Topo.php"); ?>
<?php
    require_once '../Model/ClienteModel.php';
    require_once '../Model/AnimalModel.php';
    require_once '../Model/ServicoModel.php';
    require_once '../Model/PagamentoModel.php';
    
    $objCliente = new Cliente();
    $objAnimal = new Animal();
    $objServico = new Servico();
    $objPagamento = new Pagamento();
?>
<html>
<div class="offset-md-1 col-md-8" style="margin-top: 30px !important">
    <h3>Realizar Venda</h3>
    <hr />
</div>

<form action="..\Controller\Venda_Controller.php" method="POST">
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label>Cliente:</label>
                        <select name="cliente" id="cliente" class="form-control">
                            <?php foreach($objCliente->CarregarCliente() as $rst) { ?>
                                <option value="<?=$rst['id_cliente']?>" required><?=$rst['Nome_cliente']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label>Animal:</label>
                        <select name="animal" id="animal" class="form-control">
                            <?php foreach($objAnimal->CarregarAnimal() as $rst) { ?>
                                <option value="<?=$rst['id_animal']?>" required><?=$rst['Nome_animal']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label>Serviço:</label>
                        <select name="servico" id="servico" class="form-control">
                            <?php foreach($objServico->CarregarServico() as $rst) { ?>
                                <option value="<?=$rst['id_servico']?>" required><?=$rst['descricao']?></option>
                            <?php } ?>
                        </select>
                    </div>
                        <div class="col-md-6">
                            <label>Serviço:</label>
                            <select name="preco" id="preco" class="form-control">
                                <?php foreach($objServico->CarregarServico() as $rst) { ?>
                                    <option value="<?=$rst['id_servico']?>" required><?=$rst['preco']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>Quantidade:</label>
                            <select name="quantidade" id="quantidade" class="form-control">
                                <option value="1" required>1</option>
                                <option value="2" required>2</option>
                                <option value="3" required>3</option>
                                <option value="4" required>4</option>
                                <option value="5" required>5</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Valor Total:</label>
                            <input type="text" class="form-control" required name="valor" id="valor"/>
                        </div>
                    <div class="col-md-8">
                        <label>Forma de Pagamento:</label>
                        <select name="pagamento" id="pagamento" class="form-control">
                            <?php foreach($objPagamento->CarregarPagamento() as $rst) { ?>
                                <option value="<?=$rst['id_pagamento']?>" required><?=$rst['forma_pagamento']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Data:</label>
                        <input class="form-control" required name="data" id="data" type="text" value="<?=date('d/m/Y')?>">
                    </div>

                    <div class="col-md-8">
                        <input type="submit" value="Realizar Venda" class="btn btn-primary" name="btcadastrar" style="margin-top: 20px;"/>
                    </div>
                    <div class="col-md-4" style="margin-left: -365px">
                        <a href="PrincipalServico.php" class="btn btn-danger" style="margin-top: 20px;" >Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</html>


<script type="text/javascript" src="../JavaScript/Calcular.js"></script>
<?php include_once("Fim.php"); ?>