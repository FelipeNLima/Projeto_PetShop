<?php
    require_once '../Model/ClienteModel.php';
    $objCliente = new Cliente();
?>

<div class="offset-md-1 col-md-10" style="margin-top: 30px !important">
    <h3>Novo Animal</h3>
    <hr />
</div>

<form action="..\Controller\Animal_Controller.php" method="POST">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="form-group">
                <div class="row">

                    <div class="col-md-12">
                        <label>Nome:</label>
                        <input type="text" class="form-control" required name="nome" id="nome"/>
                    </div>
                    <div class="col-md-4">
                        <label>Raça:</label>
                        <input type="text" class="form-control" required name="raca" id="raca"/>
                    </div>
                    <div class="col-md-4">
                        <label>Especie:</label>
                        <input type="text" class="form-control" required name="especie" id="especie"/>
                    </div>
                    <div class="col-md-4">
                        <label>Data de Nascimento:</label>
                        <input type="text" class="form-control" required name="data" id="data"/>
                    </div>
                    <div class="col-md-4">
                        <label>Sexo:</label>
                        <input type="text" class="form-control" required name="sexo" id="sexo"/>
                    </div>
                    <div class="col-md-8">
                        <label>Dono:</label>
                        <select name="dono" id="dono" class="form-control">
                            <?php foreach($objCliente->CarregarCliente() as $rst) { ?>
                                <option value="<?=$rst['id_cliente']?>" required><?=$rst['Nome_cliente']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" value="Gravar" class="btn btn-primary" name="btcadastrar" style="margin-top: 20px;"/>
                    </div>
                    <div class="col-md-2">
                        <a href="PrincipalAnimal.php" class="btn btn-danger" style="margin-top: 20px;" >Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include_once("Fim.php"); ?>