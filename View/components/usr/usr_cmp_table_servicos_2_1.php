<?php 

include("conexao_bd/conexao.php");
$consulta = "SELECT * FROM servico";
$con = $mysqli->query($consulta) or die ($mysqli->error);

?>

  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Pedidos Solicitados </h1>
<p class="mb-4">Área destinada a solicitação de ordem de serviços.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Base de Dados</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>(Cod) Servico</th>
            <th>(Cod) Tipo de Servico</th>
            <th>Observação</th>
            <th>Data Cadastrada</th>
            <th>Data Concluida</th>
            <th>Prioridade !</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
              <th>(Cod) Servico</th>
              <th>(Cod) Tipo de Servico</th>
              <th>Observação</th>
              <th>Data Cadastrada</th>
              <th>Data Concluida</th>
              <th>Prioridade !</th>
          </tr>
        </tfoot>
        <tbody>
        <?php while($dado = $con->fetch_array() ){ ?>
          <tr>
            <td><?php echo $dado['cod_servico']; ?></td>
            <td><?php echo $dado['cod_servico_tipo']; ?></td>
            <td><?php echo $dado['obs_servico']; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado['data_cadatrada'])); ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado['data_concluida'])); ?></td>
            <td></td>
          </tr>
        <?php };?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

<script>
  $('#botaenviar').on('click', function(){
    $.ajax({
      url:'Servicos.php?pegarServicos',
      method:'GET',
      succes:function(data){
        
      }
    })
  })
</script>
<!-- /.container-fluid -->