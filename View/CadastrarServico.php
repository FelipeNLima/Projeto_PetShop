<?php include_once("Topo.php"); ?>

<div class="offset-md-1 col-md-8" style="margin-top: 30px !important">
    <h3>Novo Serviço</h3>
    <hr />
</div>

<form action="..\Controller\Servico_Controller.php" method="POST">
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <div class="form-group">
                <div class="row">

                    <div class="col-md-4">
                        <label>Serviço:</label>
                        <input type="text" class="form-control" required name="descricao" id="descricao"/>
                    </div>
                    <div class="col-md-4">
                        <label>Preço:</label>
                        <input type="text" class="form-control" required name="preco" id="preco"/>
                    </div>

                    <div class="col-md-6">
                        <input type="submit" value="Gravar" class="btn btn-primary" name="btcadastrar" style="margin-top: 20px;"/>
                    </div>
                    <div class="col-md-4" style="margin-left: -365px">
                        <a href="PrincipalServico.php" class="btn btn-danger" style="margin-top: 20px;" >Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include_once("Fim.php"); ?>