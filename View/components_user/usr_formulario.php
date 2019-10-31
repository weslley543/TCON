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
    <form method="POST">

     <div class="form-group">
        <label for="exampleInputEmail1">Nome e Sobrenome</label>
        <input type="input" class="form-control" name="nome_sobrenome"  placeholder="Insira seu nome e sobrenome">
     </div>

     <div class="form-group">
        <label for="exampleFormControlSelect1">Selecione o tipo de serviço:</label>
        <select class="form-control" name="lista_servicos">
        <option>Segurança</option>
        <option>Elétrica</option>
        <option>Manutenção</option>
        <option>Administrativo</option>
        <option>Outros</option>
        </select>
    </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Observação</label>
        <input type="input-group-text" class="form-control" name="observacao" placeholder="Comente sobre o ocorrido !">
    </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->




<!--  Insercao de dados via PHP  -->


<?php
  include("conexao_bd/conexao.php");

  $nome_sobrenome = isset($_POST['nome_sobrenome']) ? $_POST['nome_sobrenome']: null;
  $usuario = 1;
  
  $tipo_servico = isset($_POST['lista_servicos']) ? $_POST['lista_servicos'] : null;
 
  switch ($tipo_servico) {
        case "Elétrica": $tipo_servico = 1; break; 
        case "Segurança": $tipo_servico = 2; break; 
        case "Manutenção": $tipo_servico = 3; break; 
        case "Administrativo": $tipo_servico = 4; break; 

    }

  $observacao = isset($_POST['observacao']) ? $_POST['observacao'] : "";

  echo "<br> Nome: $nome_sobrenome <br> Usuario: $usuario <br> Tipo Servico: $tipo_servico <br>Obs: $observacao <br> Erro-SQL:   ";


//  $insert = "CALL insere_servicos($tipo_servico,$observacao,usuario_id,data_cadastrada,data_concluida)";
  

  if(isset($_POST['nome_sobrenome']) && isset($_POST['lista_servicos']) && isset($_POST['observacao'])){
    if( $usuario != null && $tipo_servico != null && $observacao != null ){
        $data = date("Y/m/d");
        $inserir_servico = "CALL insere_servicos($tipo_servico,'$observacao',$usuario,CURDATE(),CURDATE())";

        $mysqli->query($inserir_servico) or die ($mysqli->error);

        echo "<br> <br> !! Serviço cadastrado com sucesso !";
    }
    else{
        echo "Error ! - adicionar uma alert modal ";
    }


  }


?>