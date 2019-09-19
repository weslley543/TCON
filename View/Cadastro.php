<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                        <a class="nav-link" target="_self" href="Cadastro.php">Cadastre-se <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </nav>
    <div class="container border" style="width:800px; heigh:600px; border-radius: 5px; padding:30px;">
        <form action="../Controllers/Usuario.php" method="POST">
             <div class=" row form-group">
                 <div class="col-lg-6">
                     <label>Nome do Usuario</label>
                     <input type="text" name="nome_usuario" class="form-control" placeholder="Ex : José da Silva">
                </div>
                <div class="col-lg-6">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" placeholder="Ex :josedasilva@tcon.com">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>Senha</label>
                     <input type="password" name="senha" class="form-control">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>Repita sua Senha</label>
                     <input type="password" class="form-control">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>RG</label>
                     <input type="number" name="rg_usuario" class="form-control">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>CPF</label>
                     <input type="text" name="cpf_usuario" class="form-control">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>Endereço</label>
                     <input type="text" name="endereco_usuario" class="form-control" placehold="Ex : Rua do Mânganes">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>Número</label>
                     <input type="text" name="casa_usuario" class="form-control" placeholder="1234">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>Telefone Residencial</label>
                     <input type="text" name="telefone_usuario" class="form-control">
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
                     <label>Telefone Celular</label>
                     <input type="text" name="celular_usuario" class="form-control" >
                
                </div>
                <div class="col-lg-12" style="margin-top:20px;">
                <button class="btn btn-primary" >Cadastrar</button>
                </div>
                
             </div>   
        </form>
    
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>