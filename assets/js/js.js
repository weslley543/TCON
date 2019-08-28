// Funcoes de Verificaçao de erros
var senha;

function emptyEmail(){
    var email = document.getElementById("staticEmail").value;
    var password = document.getElementById("inputPassword").value;

    if( !isNaN(email) || !isNaN(password) ){
        alert("Verifique os dados de entrada");
    }else{
        console.log('email: ',email);
        verifyPassword();
    }
}

//verificando se as senhas estão corretas

$("#senha").focusout(function() {
    senha = (this).value;
});

$("#senha2").focusout(function(){
    var senha2 = (this).value;
    if(senha2!=senha){
        $('#senhaErrada').text('As senhas não correspondem').css('color', 'red');
    }else if(senha2 =='' || senha ==''){
        $('#senhaErrada').text('Esse campo não pode ser vazio').css('color', 'red');
    }else{
        $('#senhaErrada')[0].innerText=""
    }
})

$('#cpf').mask('999.999.999-99');
$('#telefone').mask('(99)9999-9999');
$('#celular').mask('(99)99999-9999');