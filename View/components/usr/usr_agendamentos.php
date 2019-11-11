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
    <form method="POST">

     <div class="form-group">
        <label for="exampleInputEmail1">Nome e Sobrenome</label>
        <input type="input" class="form-control" name="nome_sobrenome"  placeholder="Insira seu nome e sobrenome">
     </div>

     <div class="form-group">
        <label for="exampleFormControlSelect1">Local para agendamento*</label>
        <select class="form-control" name="tipo_agendamento">
          <option>Salão I</option>
          <option>Salão II</option>
          <option>Quiosque + Churrasqueira</option>
          <option>Área de jogos</option>
          <option>Outros</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Data-Agendamento</label>
        <input class="form-control" type="date" value="2011-08-19" name="data_agendamento">
      </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Observação</label>
        <input type="input-group-text" class="form-control" name="observacao" placeholder="">
    </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->



<?php
    include("conexao_bd/conexao.php");  

    $nome_sobrenome = isset($_POST['nome_sobrenome']) ? $_POST['nome_sobrenome'] : "";

    $tipo_agendamento = isset($_POST['tipo_agendamento']) ? $_POST['tipo_agendamento'] : "" ;

    switch ($tipo_agendamento){
      case "Salão I" : $tipo_agendamento = 1;   break;
      case "Salão II" : $tipo_agendamento = 2;  break;
      case "Quiosque + Churrasqueira" : $tipo_agendamento = 3;  break;
      case "Área de jogos" : $tipo_agendamento = 4; break;
    }


    $data_agd = isset($_POST['data_agendamento']) ? date("d/m/Y", strtotime($_POST['data_agendamento']) ) : "";
    $observacao = isset($_POST['observacao']) ? $_POST['observacao'] : "";
    
    echo "<br> Observaçao:".$observacao."<br> Tipo Agd: $tipo_agendamento <br> <br>"."Error-Sql: ";

    if(isset($_POST['nome_sobrenome']) &&  isset($_POST['tipo_agendamento']) && isset($_POST['data_agendamento']) && isset($_POST['observacao'])){ 
      $insere = "CALL agd_area_lazer(2,$tipo_agendamento, $data_agd, $data_agd)";
      $mysqli->query($insere) or die ($mysqli->error);
    }

?>