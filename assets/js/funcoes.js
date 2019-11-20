$(document).ready(function(){
    $.ajax({
        method:"GET",
        url:"Controllers/Servicos.php",
        data:"op="+"pegarServicos"+ "&cod_usuario="+$("#cod_usuario")[0].value,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(response){

            $("#Solicitados").html(response.solicitados);
            $("#concluidos").html(response.concluidos);
            $("#porcentagem").html(response.concluidos+"%");
            $("#atraso").html(response.atrasados);
        }

    });
});