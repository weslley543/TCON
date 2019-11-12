  <!-- Begin Page Content -->
  <div class="container-fluid" id="formularioRequisicoes">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Solicitação de Pedidos </h1>
<p class="mb-4"> Área destinada a solicitação de serviços </p>

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
        <label for="exampleFormControlSelect1">Selecione o tipo de serviço:</label>
        <select class="form-control" name="cod_servico_tipo">
          <option value="2">Segurança</option>
          <option value="1">Elétrica</option>
          <option value="3">Manutenção</option>
          <option value="4">Outros</option>
        </select>
    </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Observação</label>
        <input type="input-group-text" class="form-control" name="obs_servico" placeholder="Comente sobre o ocorrido !">
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
  </div>
</div>

</div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/js/funcoesServico.js"></script>
