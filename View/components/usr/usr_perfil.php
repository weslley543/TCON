<?php
  include("conexao_bd/conexao.php");
  $conteudo = "SELECT * FROM usuario where usuario.cod_usuario = 1";
  $con = $mysqli->query($conteudo) or die ($mysqli->error);
  $user = $con->fetch_array();
  echo "<br> Nome Usuario: ".$user["nome_usuario"]."<br>";
?>
  
  <!-- Begin Page Content -->
  <div class="container-fluid">

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
        <input type="input" class="form-control" id="nome_sobrenome" placeholder= <?php echo $user["nome_usuario"]; ?> >
  </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Rg</label>
        <input type="input" class="form-control" id="usr_rg"  placeholder= <?php echo $user["rg_usuario"]; ?> >
  </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Endereço</label>
        <input type="input" class="form-control" id="nome_sobrenome"  placeholder=<?php echo $user["endereco_usuario"]; ?> >
  </div>

  <div class="form-group">
        <label for="exampleInputEmail1">Casa</label>
        <input type="input" class="form-control" id="n_casa"  placeholder=<?php echo $user["casa_usuario"];?>>
  </div>


  <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="input" class="form-control" id="nome_sobrenome"  placeholder=<?php echo $user["email"];?>>
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">Telefone / Celular</label>
    <div class="row">
        <input type="input" class="form-control col-md-6" id="n_telefone"  placeholder= <?php echo $user["telefone_usuario"] ; ?> >
        <input type="input" class="form-control col-md-6" id="n_celular"  placeholder=<?php echo $user["celular_usuario"] ;?> >
    </div>

</div>
  

  <div class="form-group">
        <label for="exampleInputEmail1">Senhas</label>
        <div class="row">
          <input type="input" class="form-control col-md-6" id="old_senha"  placeholder="....">
          <input type="input" class="form-control col-md-6" id="new_senha"  placeholder="Receber dados por PHP - senha nova">
        </div>
  </div>

    <button type="submit" class="btn btn-primary" data-target="#sucess_Modal">Atualizar</button>

    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->