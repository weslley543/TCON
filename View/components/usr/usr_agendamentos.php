  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Solicitação de Agendamento </h1>
<p class="mb-4"> Área destinada as reservas</p>

<!-- DataTales Example -->
    <!-- Criar Formulario para insercao de dados e nova OS
    -->
<div class="card shadow mb-4">
  <div class="card-body">
    <form id="formAgendamento">
     <div class="form-group">
      <input type="hidden" id="cod_usuario" name="cod_usuario" value="<?= $cod_logado?>">
      <input type="hidden" name="op" value="areaLazer">
        <label for="exampleFormControlSelect1">Local para agendamento</label>
        <select class="form-control" id="cod_area_lazer" name="cod_area_lazer">
          <option value="1">Salão I</option>
          <option value="2">Salão II</option>
          <option value="3">Quiosque + Churrasqueira</option>
          <option value="4">Área de jogos</option>
          <option value="5">Outros</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Data-Agendamento</label>
        <input class="form-control" id="data_agendou" type="date" value="<?= date('Y-m-d')?>" name="data_agendou">
      </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Observação</label>
        <input type="input-group-text" class="form-control" name="observacao" placeholder="">
    </div>
      
    </form>
    <button type="submit" id="botaoEnviar" class="btn btn-primary">Enviar</button>
    <span style="margin-left:10px;" id="info"></span>
  </div>
</div>

</div>


<script>
  $('#botaoEnviar').on('click', function(){
    //console.log(dados);
    $.ajax({
      method:"POST",
      url:'Controllers/Servicos.php',
      data:$('#formAgendamento').serialize(),
      dataType: "html",
      success:function(response){
        if(response){
          $('#info').html('Agendamento inserido com sucesso').css("color", "green");;
        }else{
          $('#info').html('Ocorreu um problema no agendamento');        
        }
      }
    });
  });
</script>
<!-- /.container-fluid -->