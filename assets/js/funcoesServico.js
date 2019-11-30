//JS para agendamentos:
$("#tabelaAgendamento").ready(function(){
    $.ajax({
        url: "Controllers/Servicos.php",
        method: "GET",
        data: "op=agendamentos",
        dataType: "json",        
        success: function(response){
            let html = '';
            for(let i= 0 ;i < response.length; i++){
                html+="<tr><td>"+response[i].cod_area_lazer+"</td>";
                html+="<td>"+response[i].nome_usuario+"</td>";
                html+="<td>"+response[i].data_agendou+"</td>";
                html+="<td>"+response[i].data_entrega+"</td>";
                html+="</tr>";
            }
            $('#corpoAgendamento').html(html);
        }

    });
});


$("#tabelaServicos").ready(function(){
    $.ajax({
        url: "Controllers/Servicos.php",
        method: "GET",
        data: "op=servicoSolicitado",
        dataType: "json",
        success: function(response){
            let html = '';
            for(let i= 0 ;i < response.length; i++){
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
    });
});



// Tabela liberacao de pessoas :

$('#tabelaLiberacao').ready(function(){
    $.ajax({
        url: "Controllers/Servicos.php",
        method: "GET",
        data: 'op=liberacao',
        dataType: 'json',
        success:function(response){
            let html = '';
            for(let i=0; i < response.length; i++){
                html += '<div class="row align-items-center justify-content  border border rounded-sm" style="margin-bottom: 3px;">';
                html += '<div class="col">' + response[i].nome_pessoa + '</div>';
                html += '<div class="col">' + response[i].cpf_ou_rg   + '</div>';
                html += '<div class="col">' + response[i].nome_usuario + '</div>';         
                html += '</div>';
            }
            $('#conteudoLiberacao').html(html);
        }
    });
});


//Tabela de Usuarios Cadastrados: 
$("tabelaUsuarios").ready(function(){

    $.ajax({
        url: "Controllers/Servicos.php",
        method: "GET",
        data: 'op=getusuarios',
        dataType: 'json',

        success:function(response){
            let html = '';
            for(let i=0; i < response.length; i++){
                html+="<tr><td>"+response[i].nome_usuario+"</td>";
                html+="<td>"+response[i].endereco_usuario+"</td>";
                html+="<td>"+response[i].casa_usuario+"</td>";
                html+="<td>"+response[i].email+"</td>";
                html+="<td>"+response[i].telefone_usuario+"</td>";
                html+="<td>"+response[i].celular_usuario+"</td>";
                html+="</tr>";
           }

             $("#corpoTableUsuario").html(html);              
        }
    });
}); //end usuarios cadastrados


// Tabela Servicos Realizados -- verificar quantidade de dados tabela
$("#tabelaServicos2").ready(function(){
    $.ajax({
        url: "Controllers/Servicos.php",
        method: "GET",
        data: "op=servicoSolicitado",
        dataType: "json",
        success: function(response){
            let html = '';
            for(let i= 0 ;i < response.length; i++){
                html+="<td>"+response[i].cod_servico_tipo+"</td>";
                html+="<td>"+response[i].cod_usuario+"</td>";
                html+="<td>"+response[i].obs_servico+"</td>";
                html+="<td>"+response[i].data_cadatrada+"</td>";
                html+="<td>"+response[i].data_concluida+"</td>";
                html+="</tr>";
            }
            $('#corpoServicosAdm').html(html);
        }
    });
});
