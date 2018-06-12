<?php 
    require_once '../Model/ClienteModel.php';
    $objCliente = new Cliente();

?>
<html>
    <div style="margin-top: 50px !important;">   
    <form action="CadastrarVenda.php" method="GET">       
        <div class="row">
            <div class="col-md-6" style="margin-left: 156px;">
                <label>Cliente:</label>
                <select name="cliente" id="cliente" class="form-control">
                    <?php foreach($objCliente->CarregarCliente() as $rst) { ?>
                        <option value="<?=$rst['id_cliente']?>" required><?=$rst['Nome_cliente']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

            <div class="col-md-4">
                <input  type="submit" value="Vender" class="btn btn-primary" name="btcadastrar" style=" margin-left: 140px; margin-top: 10px;"/>
            </div>
            <div class="col-md-4" >
                <a href="PrincipalServico.php" class="btn btn-danger" style=" margin-left: 235px; margin-top: -37px;">Cancelar</a>
            </div>
    </form>
    </div>
</html>
<?php include("Fim.php"); ?>