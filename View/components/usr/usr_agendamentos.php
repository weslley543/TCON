  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Solicitação de Agendamento </h1>
<p class="mb-4"> Área destinada a agendamentos</p>

<!-- DataTales Example -->
    <!-- Criar Formulario para insercao de dados e nova OS
    -->
<div class="card shadow mb-4">
  <div class="card-body">
    <form id="formAgendamento">
     <div class="form-group">
      <input type="hidden" name="cod_usuario" value="<?= $cod_logado?>">
      <input type="hidden" name="op" value="areaServico">
        <label for="exampleFormControlSelect1">Local para agendamento</label>
        <select class="form-control" name="cod_area_lazer">
          <option value="1">Salão I</option>
          <option value="2">Salão II</option>
          <option value="3">Quiosque + Churrasqueira</option>
          <option value="4">Área de jogos</option>
          <option value="5">Outros</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Data-Agendamento</label>
        <input class="form-control" type="date" value="<?= date('Y-m-d')?>" name="data_agendou">
      </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Observação</label>
        <input type="input-group-text" class="form-control" name="observacao" placeholder="">
    </div>
      
    </form>
    <button type="submit" id="botaoEnviar" class="btn btn-primary">Enviar</button>
  </div>
</div>

</div>
<script>
  $('#botaoEnviar').on('click', function(){
    $.ajax({
      method:"POST",
      url:'Servico.php'
      data:$('formAgendamento').serialize(),
      success:function(data){
        console.log('adicionou')
      }
    })
  });
</script>
<!-- /.container-fluid -->