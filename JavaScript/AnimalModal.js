function ModalEditarAnimal()
{

    $('#AtualizarAnimal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientId = button.data('a') 
        var recipient0 = button.data('b')
        var recipient11 = button.data('c') 
        var recipient12 = button.data('d') 
        var recipient13 = button.data('e') 
        var recipient14 = button.data('f') 
        var recipient15 = button.data('g') 
        var modal = $(this)
        modal.find('#id').val(recipientId);
        modal.find('#nomeanimal').val(recipient0);
        modal.find('#raca').val(recipient11);
        modal.find('#especie').val(recipient12);
        modal.find('#data').val(recipient13);
        modal.find('#sexo').val(recipient14);
        modal.find('#dono').val(recipient15);

    });
}

function ModalDeletarAnimal()
{
    $('#DeletarAnimal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientid = button.data('whateverid')
        var modal = $(this)
        modal.find('#id').val(recipientid);
    });
}