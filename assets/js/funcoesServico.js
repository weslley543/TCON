$("#tabelaServicos").ready(function(){
    $.ajax({
        url: "Controllers/Servicos.php",
        method: "GET",
        data: "op=servicoSolicitado",
        dataType: "json",
        success: function(response){
            console.log(response);
            let html = '';
            for(let i= 0 ;i <response.length; i++){
                html+="<tr><td>"+response[i].cod_servico+"</td>";
                html+="<td>"+response[i].cod_servico_tipo+"</td>";
                html+="<td>"+response[i].obs_servico+"</td>";
                html+="<td>"+response[i].data_cadatrada+"</td>";
                html+="<td>"+response[i].data_concluida+"</td>";
                html+="<td>"+response[i].cod_servico_tipo+"</td>";
                html+="</tr>";
            }
            $('#corpoTabela').html(html);
        }
    })
})