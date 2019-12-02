  <!-- Begin Page Content -->
  <div class="container-fluid" id="perfilUser">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Perfil do Usuário</h1>
<p class="mb-4"> Área destinada atualização de dados do usuário </p>

<!-- DataTales Example -->
    <!-- Criar Formulario para insercao de dados e nova OS
    -->
<div class="card shadow mb-4">
  <div class="card-body">
    <form>

  <div class="form-group">
        <label for="exampleInputEmail1">Nome - Usuario</label>
        <input type="input" class="form-control" id="nome_sobrenome" placeholder= "" >
  </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Rg</label>
        <input type="input" class="form-control" id="usr_rg"  placeholder= "" >
  </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Endereço</label>
        <input type="input" class="form-control" id="endereco_usr"  placeholder="">
  </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Casa</label>
        <input type="input" class="form-control" id="n_casa"  placeholder="">
  </div>


  <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="input" class="form-control" id="email"  placeholder="">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">Telefone / Celular</label>
    <div class="row">
        <input type="input" class="form-control col-md-6" id="n_telefone"  placeholder="">
        <input type="input" class="form-control col-md-6" id="n_celular"  placeholder="" >
    </div>

</div>
  

  <div class="form-group">
        <label for="exampleInputEmail1">Senhas</label>
        <div class="row">
          <input type="input" class="form-control col-md-6" id="old_senha"  placeholder="">
          <input type="input" class="form-control col-md-6" id="new_senha"  placeholder="">
        </div>
  </div>

    <button type="submit" class="btn btn-primary" data-target="#sucess_Modal">Atualizar</button>

    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->