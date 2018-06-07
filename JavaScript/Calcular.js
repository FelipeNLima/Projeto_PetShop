var calcular = function() {
    $qtd = $("#quantidade option:selected").text();
    $preco = $("#preco option:selected").text();
    $total = $qtd * $preco;
    $("#valor").val(($total).toFixed(2));
}

$("#quantidade, #preco").change(function(){
    calcular();
});

$(document).ready(function() {
    calcular();
});
