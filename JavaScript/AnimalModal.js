function ModalEditAnimal()
{

    $('#AtualizarAnimal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipientId = button.data('whateverId') 
        var recipient0 = button.data('whatever0')
        var recipient11 = button.data('whatever11') 
        var recipient12 = button.data('whatever12') 
        var recipient13 = button.data('whatever13') 
        var recipient14 = button.data('whatever14') 
        var recipient15 = button.data('whatever15') 
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
        var recipientid = button.data('whateverId')
        var modal = $(this)
        modal.find('#id').val(recipientid);
    });
}