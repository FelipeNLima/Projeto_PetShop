<html>
<head><script language="JavaScript" src="../JavaScript/ClienteModal.js"></script></head>
<div class="modal fade-lg" id="AtualizarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AtualizarCliente">Atualizar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="..\Controller\Cliente_Controller.php" method="POST">
    <div class="modal-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" class="form-control" name="id" id="id"/>
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="nome" id="nome"/>
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
                        </div>
                    </div>
                </div>
            </div>
    </div>
      <div class="modal-footer">
        <input class="btn btn-success" type="submit" name="bteditar" value="Salvar">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
      </div>

      </form>
    </div>
  </div>
</div>
</html>