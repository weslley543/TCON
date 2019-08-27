<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href = "../assets/style/style.css">
    </head>
    <body>
        <div class="container" id="containerCadastro">
            <div class="row">
                <form action="<?= base_url('Cadastro/cadastrar')?>" method="POST">
                    <div class="form-group col-md-12 border" style="border-radius : 4px; padding : 10px; background-color:#F8F8FF;">
                        
                        Nome :
                        <input type="text" name="Nome"  class="form-control" maxlenght="60" minlenght="4" placeholder="Ex : José da Silva">
                        Email : 
                        <input type="text" class="form-control" maxlenght="60" minlenght="12" placeholder="Ex : josedasilva@algumemail.com">
                        Senha :
                        <input type="password" class="form-control" placeholder="123456">
                        Repita sua senha : 
                        <input type="password" class="form-control" placeholder="123456">
                        <div class="row">
                            <div class="col-md-6">
                                CPF : 
                                <input type="text" class="form-control" id="cpf" maxlenght="14" minlenght="14" placeholder="Ex : 222.222.222-22">
                            </div>
                            <div class="col-md-6">
                                RG :
                                <input type="text" maxlenght="20" class="form-control" placeholder="Ex : 123456789">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-8">
                            Endereço : 
                            <input type="text" maxlenght="80" class="form-control" placeholder="Ex : Rua do Mânganes">
                        </div>
                        <div class="col-md-4">
                            Numero : 
                            <input type="text" maxlenght="80" class="form-control" placeholder="1234">
                        </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                Telefone Residencial :
                                <input type="text" class="form-control" id="telefone" placeholder = "Colocar o telefone com o DDD"> 
                            </div>
                            <div class="col-md-6">
                                Telefone Celular :
                                <input type="text" class="form-control" id="celular" placeholder = "Colocar o telefone com o DDD"> 
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.mask.js"></script>
    <script src="../assets/js/js.js"></script>
</html>