function ModalEditCliente()
{

    $('#AtualizarCliente').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientid = button.data('whateverid') 
        var recipient = button.data('whatever')
        var recipient1 = button.data('whatever1') 
        var recipient2 = button.data('whatever2') 
        var recipient3 = button.data('whatever3') 
        var recipient4 = button.data('whatever4') 
        var recipient5 = button.data('whatever5') 
        var recipient6 = button.data('whatever6') 
        var recipient7 = button.data('whatever7') 
        var recipient8 = button.data('whatever8')
        var recipient9 = button.data('whatever9') 
        var recipient10 = button.data('whatever10')    
        var modal = $(this)
        modal.find('#id').val(recipientid);
        modal.find('#nome').val(recipient);
        modal.find('#cpf').val(recipient1);
        modal.find('#endereco').val(recipient2);
        modal.find('#numero').val(recipient3);
        modal.find('#bairro').val(recipient4);
        modal.find('#cidade').val(recipient5);
        modal.find('#estado').val(recipient6);
        modal.find('#cep').val(recipient7);
        modal.find('#telefone').val(recipient8);
        modal.find('#celular').val(recipient9);
        modal.find('#email').val(recipient10);
    });
}

function ModalDeletarCliente()
{
    $('#DeletarCliente').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientid = button.data('whateverid')
        var modal = $(this)
        modal.find('#id').val(recipientid);
    });
}