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