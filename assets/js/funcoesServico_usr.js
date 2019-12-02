//JS para agendamentos:
$("#agedamentosUsr").ready(function(){
    $.ajax({
        url: "Controllers/Servicos_usr.php",
        method: "GET",
        data: "op=agendamentos_usr",
        dataType: "json",        
        success: function(response){
            let html = '';
            for(let i= 0 ;i < response.length; i++){
                html+="<tr><td>"+response[i].desc_area+"</td>";
                html+="<td>"+response[i].data_agendou+"</td>";
                html+="<td>"+response[i].data_entrega+"</td>";
                html+="</tr>";
            }
            $('#corpoTabelaAtrasados').html(html);
        }

    });
});


// Tabela Servicos Usuarios
$("#dataServicosUsr").ready(function(){
    $.ajax({
        url: "Controllers/Servicos_usr.php",
        method: "GET",
        data: "op=servicosSolicitados",
        dataType: "json",
        success: function(response){
            $("#servicosConcluidos_usr").html(response['concluidos']);
            $("#servicosSolicitados_usr").html(response['solicitados']);
            $("#servicosPorcent_usr").html(response['porcentagem']+"%");
            $("#barraProgss_usr").css("width",response['porcentagem']+'%');
            $("#atrasos_usr").html(response['atrasados']);   
        }
    });
});



// Tabela liberacao de pessoas :

$('#liberacores_usr').ready(function(){
    $.ajax({
        url: "Controllers/Servicos_usr.php",
        method: "GET",
        data: 'op=liberacao_usr',
        dataType: 'json',
        success:function(response){
            let html = '';
            for(let i=0; i < response.length; i++){
                html += '<div class="row align-items-center justify-content  border border rounded-sm" style="margin-bottom: 3px;">';
                html += '<div class="col">' + response[i].nome_pessoa + '</div>';
                html += '<div class="col">' + response[i].cpf_ou_rg   + '</div>';
                html += '<div class="col">' + response[i].data_liberacao + '</div>';
                html += '</div>';
            }
            $('#conteudoLiberacao_usr').html(html);
        }
    });
});


//Tabela de Usuarios Cadastrados: 
$("perfilUser").ready(function(){

    $.ajax({
        url: "Controllers/Servicos_usr.php",
        method: "GET",
        data: 'op=perfil_usr',
        dataType: 'json',

        success:function(response){
            $('#nome_sobrenome').val(response[0].nome_usuario);
            $('#usr_rg').val(response[0].rg_usuario);
            $('#endereco_usr').val(response[0].endereco_usuario);
            $('#n_casa').val(response[0].casa_usuario);
            $('#email').val(response[0].email);
            $('#n_telefone').val(response[0].telefone_usuario);
            $('#n_celular').val(response[0].celular_usuario);
        
        }
    });
}); //end usuarios cadastrados


// Tabela Servicos Realizados -- verificar quantidade de dados tabela
$("#tabelaServicosUsr").ready(function(){
    $.ajax({
        url: "Controllers/Servicos_usr.php",
        method: "GET",
        data: "op=pegarServicos_usr",
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
            console.log(html);
            $('#corpoTabelaUsr').html(html);
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