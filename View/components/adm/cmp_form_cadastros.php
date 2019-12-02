<div class="container-fluid">
    <div class="row">
        <div style="margin-top:40px" class="col-md-5">
            <h3>Cadastrar Novo Tipo de Usuário</h3>
            <form method="POST" action="Controllers/Adm.php" class="form-group">
                <label>Novo Tipo</label>
                <input name="nome_tipo" type="text" class="form-control">
                <input name="op" type="hidden" value="cadastrarNovoTipoUsuario">
                <button class="btn btn-primary" style="margin-top:20px;" id="enviarNovoTipo">Enviar</button>
            </form>
        </div>
        <div style="margin-top:40px" class="col-md-5">
            <h3>Cadastrar Novo Tipo de Serviço</h3>
            <form action="Controllers/Adm.php" method="POST" class="form-group">
                <label>Novo Tipo </label>
                <input name="nome_tipo" type="text" class="form-control">
                <input type="hidden" value="enviarNovoTipoServico" name="op">
                <label>Prioridade </label>
                <input type="number" name="prioridade" value="0" class="form-control" style="width:80px;">
                <button class="btn btn-primary" style="margin-top:20px;">Enviar</button>
        </div>
    </div>
    <div id="cadastrar" class="col-md-12">
        <h3>Cadastar Novo Servidor</h3>
        <form action="Controllers/Usuario.php" class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="">Nome do Servidor</label>
                    <input type="text" name="nome_usuario" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="">Senha</label>
                    <input type="password" name="senha" class="form-control">

                </div>
                <div class="col-md-6">
                    <label for="">Tipo de Usuário</label>
                    <select name="usuario_tipo" id="selectTipo" class="form-control">

                    </select>
                </div>
                <div class="col-md-1" style="margin-top:20px;">
                    <button class="btn btn-primary" id="botaoCadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<script>
    $('#cadastrar').ready(function() {
        $.ajax({
            url: 'Controllers/Adm.php',
            method: 'GET',
            data: 'op=pegarTipoUsr',
            dataType: "json",
            success: function(response) {
                html = "";
                for (let i = 0; i < response.length; i++) {
                    html += "<option value='" + response[i].cod_tipo + "'>" + response[i].nome_tipo + "</option>";
                }
                $("#selectTipo").append(html);
            }
        })
    })
</script>