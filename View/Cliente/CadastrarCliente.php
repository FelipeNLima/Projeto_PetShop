<?php include_once("..\Topo.php"); ?>

<div class="offset-md-1 col-md-10" style="margin-top: 30px !important">
    <h3>Novo Cliente</h3>
    <hr />
</div>

<form action="../../Controller/Cliente_Controller" method="POST">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="form-group">
                <div class="row">

                    <div class="col-md-12">
                        <label>Nome:</label>
                        <input type="text" class="form-control" required name="nome" id="nome"/>
                    </div>
                    <div class="col-md-4">
                        <label>CPF:</label>
                        <input type="text" class="form-control" required name="cpf" id="cpf"/>
                    </div>
                    <div class="col-md-8">
                        <label>Endereço:</label>
                        <input type="text" class="form-control" required name="endereco" id="endereco"/>
                    </div>
                    <div class="col-md-4">
                        <label>Numero:</label>
                        <input type="numeric" class="form-control" required name="numero" id="numero"/>
                    </div>
                    <div class="col-md-8">
                        <label>Bairro:</label>
                        <input type="text" class="form-control" required name="bairro" id="bairro"/>
                    </div>
                    <div class="col-md-4">
                        <label>Cidade:</label>
                        <input type="text" class="form-control" required name="cidade" id="cidade"/>
                    </div>
                    <div class="col-md-4">
                        <label>Estado:</label>
                        <input type="text" class="form-control" required name="estado" id="estado"/>
                    </div>
                    <div class="col-md-4">
                        <label>CEP:</label>
                        <input type="text" class="form-control" required name="cep" id="cep"/>
                    </div>
                    <div class="col-md-4">
                        <label>Telefone:</label>
                        <input type="text" class="form-control" required name="telefone" id="telefone"/>
                    </div>
                    <div class="col-md-4">
                        <label>Celular:</label>
                        <input type="text" class="form-control" required name="celular" id="celular"/>
                    </div>

                    <div class="col-md-12">
                        <label>E-mail:</label>
                        <input type="email" class="form-control" required name="email" id="email"/>
                    </div>

                    <div class="col-md-2">
                        <input type="submit" value="Gravar" class="btn btn-primary" name="btcadastrar"/>
                    </div>
                    <div class="col-md-2 ">
                        <a href="PrincipalCliente.php" class="btn btn-danger preeche">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include_once("..\Fim.php"); ?>