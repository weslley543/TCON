  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Solicitação de Pedidos </h1>
<p class="mb-4"> Área destinada a solicitação de serviços </p>

<!-- DataTales Example -->
    <!-- Criar Formulario para insercao de dados e nova OS
    -->
<div class="card shadow mb-4">
  <div class="card-body">
    <form>

     <div class="form-group">
        <label for="exampleInputEmail1">Nome e Sobrenome</label>
        <input type="input" class="form-control" id="nome_sobrenome"  placeholder="Insira seu nome e sobrenome">
     </div>

     <div class="form-group">
        <label for="exampleFormControlSelect1">Selecione o tipo de serviço:</label>
        <select class="form-control" id="selectList">
        <option>Segurança</option>
        <option>Elétrica</option>
        <option>Manutenção</option>
        <option>Administrativo</option>
        <option>Outros</option>
        </select>
    </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Observação</label>
        <input type="input-group-text" class="form-control" id="observacao" placeholder="Comente sobre o ocorrido !">
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->