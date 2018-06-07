function ModalEditServico()
{

    $('#AtualizarServico').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientid = button.data('whateverid') 
        var recipient = button.data('whatever')
        var recipient1 = button.data('whatever1') 
   
        var modal = $(this)
        modal.find('#id').val(recipientid);
        modal.find('#descricao').val(recipient);
        modal.find('#preco').val(recipient1);

    });
}

function ModalDeletarServico()
{
    $('#DeletarServico').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientid = button.data('whateverid')
        var modal = $(this)
        modal.find('#id').val(recipientid);
    });
}

