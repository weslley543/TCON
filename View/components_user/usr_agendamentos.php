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
    <form>

     <div class="form-group">
        <label for="exampleInputEmail1">Nome e Sobrenome</label>
        <input type="input" class="form-control" id="nome_sobrenome"  placeholder="Insira seu nome e sobrenome">
     </div>

     <div class="form-group">
        <label for="exampleFormControlSelect1">Local para agendamento*</label>
        <select class="form-control" id="selectList">
        <option>Salão I</option>
        <option>Salão II</option>
        <option>Quiosque + Churrasqueira</option>
        <option>Área de jogos </option>
        <option>Outros</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Data-Agendamento</label>
        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
      </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Observação</label>
        <input type="input-group-text" class="form-control" id="observacao" placeholder="">
    </div>


      <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
  </div>
</div>

</div>
<!-- /.container-fluid -->