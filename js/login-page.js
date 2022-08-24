$(document).on('click','#btn-click',function(e){
			
    var email = $('#email').val();
    var senha = $('#senha').val();
        
    var atpos  = email.indexOf('@');
    var dotpos = email.lastIndexOf('.com');
        
    if(email == ''){
        e.preventDefault();
        Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'Preencha todos os campos para prosseguir!',
confirmButtonColor: '#E9D758',
}) 
    }
    else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){
        e.preventDefault();
        Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'Digite um email valido',
confirmButtonColor: '#E9D758',
})
    }
    else if(senha == ''){ 
        e.preventDefault();
        Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'Preencha todos os campos para prosseguir!',
confirmButtonColor: '#E9D758',
})
    }
    else{			
        $.ajax({
            url: '../controllers/login.php',
            type: 'post',
            data : {
            email: email,
            senha: senha
    },
        });
    }
});