$(document).ready(function(){
    $.ajax({
        method:"GET",
        url:"Controllers/Servicos.php",
        data:"op="+"pegarServicos",
        datatype:'json',
        succes:function(data){
            console.log(data);
        }

    })
});