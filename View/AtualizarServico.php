<html>
<head><script language="JavaScript" src="../JavaScript/ServicoModal.js"></script></head>
<div class="modal fade-lg" id="AtualizarServico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AtualizarServico">Atualizar Servico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="..\Controller\Servico_Controller.php" method="POST">
    <div class="modal-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" class="form-control" required name="id" id="id"/>
                                <label>Serviço:</label>
                                <input type="text" class="form-control" required name="descricao" id="descricao"/>
                            </div>
                            <div class="col-md-4">
                                <label>Preço:</label>
                                <input type="text" class="form-control" required name="preco" id="preco"/>
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