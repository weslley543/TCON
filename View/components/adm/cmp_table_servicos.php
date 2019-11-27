  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Serviços</h1>
<p class="mb-4"> Histórico de serviços solicitados pelos condôminos</p>

<!-- DataTales Example -->
<div class="card shadow mb-4 ">
  <div class="card-header py-3 ">
    <h6 class="m-0 font-weight-bold text-primary ">Base de Dados</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive" style ="overflow-y:auto;">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nome Usuário</th>
            <th>Endereço</th>
            <th>N° Casa</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Celular</th>
          </tr>
        </thead>
        <tbody>
        <?php $cont = 0; while($cont <= 8){ ?>
          <tr>
            <td><?php echo 'Gustavo Serpeloni'; ?></td>
            <td><?php echo 'Rua dois'; ?></td>
            <td><?php echo '5'; ?></td>
            <td><?php echo 'g@hotmail.com'; ?></td>
            <td><?php echo '4185-2656'; ?></td>
            <td><?php echo '98023-9102'; ?></td>
          </tr>
        <?php $cont = $cont + 1; };?>
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