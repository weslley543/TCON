// Funcoes de Verificaçao de erros


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


//Verificar a senha de entrada: 

function verifyPassword(paswword){
}

$('#cpf').mask('999.999.999-99');
$('#telefone').mask('(99)9999-9999');
$('#celular').mask('(99)99999-9999');