  <!-- Begin Page Content -->
  <div class="container-fluid" id="formularioRequisicoes">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Criar novo Serviço </h1>
<p class="mb-4"> Área destinada a criação de serviços </p>

<!-- DataTales Example -->
    <!-- Criar Formulario para insercao de dados e nova OS
    -->
<div class="card shadow mb-4">
  <div class="card-body">
    <form method="POST" action="Controllers/Servicos.php">

     <div class="form-group">
        <input type="hidden" name="cod_usuario" value="<?= $cod_logado?>">
        <input type="hidden" name="op" value="cadastrarSevico">
     </div>

     <div class="form-group">
        <label for="exampleFormControlSelect1">Nome do Serviço</label>
        <input type="input-group-text" class="form-control" name="nome_tipo" placeholder="Insira o nome do serviço">
    </div>

        <button type="submit" class="btn btn-success">Criar</button>

    </form>
  </div>
</div>

</div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/js/funcoesServico.js"></script>
