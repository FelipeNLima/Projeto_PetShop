<html>
<head><script language="JavaScript" src="../JavaScript/AnimalModal.js"></script></head>
<div class="modal fade-lg" id="AtualizarAnimal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AtualizarAnimal">Atualizar Animal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="..\Controller\Animal_Controller.php" method="POST">
    <div class="modal-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" class="form-control" name="id" id="id"/>
                                
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="nomeanimal" id="nomeanimal"/>
                            </div>
                            <div class="col-md-4">
                                <label>Raça:</label>
                                <input type="text" class="form-control"  name="raca" id="raca"/>
                            </div>
                            <div class="col-md-4">
                                <label>Especie:</label>
                                <input type="text" class="form-control"  name="especie" id="especie"/>
                            </div>
                            <div class="col-md-4">
                                <label>Data de Nascimento:</label>
                                <input type="text" class="form-control"  name="data" id="data"/>
                            </div>
                            <div class="col-md-4">
                                <label>Sexo:</label>
                                <input type="text" class="form-control"  name="sexo" id="sexo"/>
                            </div>
                            <div class="col-md-4">
                                <label>Dono:</label>
                                <input type="text" class="form-control"  name="dono" id="dono"/>
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