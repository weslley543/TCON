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
            //console.log(response);
            for(let i= 0 ;i < response.length; i++){
                //html+="<tr><td>"+response[i].cod_servico+"</td>";
                html+="<tr data-id="+"'"+response[i].cod_servico+"'><td>"+response[i].cod_servico+"</td>";
                html+="<td>"+response[i].cod_servico_tipo+"</td>";
                html+="<td>"+response[i].obs_servico+"</td>";
                html+="<td>"+response[i].data_cadatrada+"</td>";
                html+="<td>"+response[i].data_concluida+"</td>";
                html+="<td>"+response[i].cod_servico_tipo+"</td>";
                html+="<td><button class='btn btn-warning'><i class='fas fa-edit'></i></button> <button style='margin-top:3px;' class='btn btn-primary'"+"onclick="+"funcaoConcluir("+response[i].cod_servico+")>"+"<i class='fas fa-check'></i></button></td>"
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
                html+="<tr><td>"+response[i].cod_servico_tipo+"</td>";
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


//- Qtd de Pedidos Diversos (Dashboard)
$("#dataServicos").ready(function(){

    $.ajax({
        url: 'Controllers/Servicos.php',
        method: "GET",
        data:"op=pegarServicos",
        dataType: "json",
        success:function(response){
            $("#servicosConcluidos").html(response['concluidos']);
            $("#servicosSolicitados").html(response['solicitados']);
            $("#servicosPorcent").html(response['porcentagem']+"%");
            $("#barraProgss").css("width",response['porcentagem']+'%');
            $("#atrasos").html(response['atrasados']);             
        }
    }); 

});

function funcaoConcluir(codServico){
    $.ajax({
        url:'Controllers/Servicos.php',
        method:'POST',
        data:"op=concluir&cod_servico="+codServico,
        success:function(response){
            console.log(response);
        }
    });
}