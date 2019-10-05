<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TCON - Seja Bem Vindo</title>
</head>

<body>
    <nav class="nav">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top" id="navBar">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href=""> Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="">MVV</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item">
                        <a class="nav-link" target="_self" href="View/Cadastro.php">Cadastre-se <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <button id ="botaoLogin"class="btn btn-primary">
                            Login
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
    <div class="container">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde incidunt rerum laborum voluptatum voluptatibus corrupti reiciendis in odio iste aspernatur explicabo sed doloremque dolorem alias ducimus iusto, provident architecto saepe?
    </div>

    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginSobre" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLoginSobre">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formlogin">
        <div class="modal-body">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">

            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
            
            </div>
         </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="login">Logar</button>
        <span id="erro"></span>  
    </div>
    </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src ="assets/js/js.js"></script>
<script>
    $('#login').on('click', function(e){
        e.preventDefault;
        //console.log($('#formlogin').serialize()+'&op=login');
        $.ajax({
            type:'POST',
            url:'Controllers/Usuario.php',
            data : $('#formlogin').serialize()+'&op=login',
            success:function(result){
                
                    if(result){
                        window.location.href = 'View/Pagina_parabens.html'
                    }else{
                        $('#erro').html('Senha ou usuário incorretos, você pode restaurar sua senha clicando <a href="../View/recuperacaoSenha.html">aqui</a>')
                    }
            }
        })
        
    })
</script>
</html>