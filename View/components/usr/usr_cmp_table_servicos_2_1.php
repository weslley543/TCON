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
    <div class="table-responsive" id="tabelaServicosUsr">
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
        <tbody id="corpoTabelaUsr">
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