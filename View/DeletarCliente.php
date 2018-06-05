<html>
<head><script language="JavaScript" src="../JavaScript/ClienteModal.js"></script></head>
    <div class="modal fade" id="DeletarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="DeletarCliente">Deletar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="..\Controller\Cliente_Controller.php" method="POST">
            <div class="modal-body">
            <input type="hidden" class="form-control" name="id" id="id"/>
                    <p>Deseja Realmente Deletar esse Cliente?</p>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" name="btdeletar" value="Sim">
                <button class="btn btn-danger" data-dismiss="modal">Não</button>
            </div>
        </form>
        </div>
    </div>
    </div>
</html>