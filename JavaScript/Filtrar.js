$('.cadastrar').on('click',function(){ 

    var id = $("#cliente option:selected").value();
    alert(id);
    $.ajax({ 
        url: 'CadastrarVenda.php', 
        type: 'GET', 
        data: { action: 'cliente', ID: id },
        success: function(data) { 
            
            window.location.reload(); 
        } 
    }); 

    $("#cadastrar").change(function(){
        alert(data);
    });

});
