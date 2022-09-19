var inputNome = document.querySelector("#cpf");
nome.addEventListener("keypress", function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);
  
  if (keyCode < 47 && keyCode > 58) {
    e.preventDefault();
  }
});

function backhome(){
  location.replace("index.html");
}

//         $(document).ready(function(){
//             Swal.fire({
//   icon: 'error',
//   title: 'Erro!',
//   text: 'CPF Inválido',
//   confirmButtonColor: '#E9D758',
// })
//         })

document.getElementById("cpf").onkeypress = function(e) {
   let chr = String.fromCharCode(e.which);
   if ("1234567890".indexOf(chr) < 0)
     return false;
 };

$(document).on('click','#btn-click',function(e){

var nome = $('#nome').val();
var email = $('#email').val();
var senha = $('#senha').val();
  var cpf = $('#cpf').val();

var atpos  = email.indexOf('@');
var dotpos = email.lastIndexOf('.com');
  
var result;
var soma = 0;
var resto;
if (cpf.length != 11 ||
      cpf == "00000000000" ||
      cpf == "11111111111" ||
      cpf == "22222222222" ||
      cpf == "33333333333" ||
      cpf == "44444444444" ||
      cpf == "55555555555" ||
      cpf == "66666666666" ||
      cpf == "77777777777" ||
      cpf == "88888888888" ||
      cpf == "99999999999")
      result = false;
      
  for (i=1; i<=9; i++) 
soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i);
resto = (soma * 10) % 11;

if ((resto == 10) || (resto == 11))  
resto = 0;
if (resto != parseInt(cpf.substring(9, 10)) ) 
result =  false;

soma = 0;
for (i = 1; i <= 10; i++) 
soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i);
resto = (soma * 10) % 11;

if ((resto == 10) || (resto == 11))  
resto = 0;
if (resto != parseInt(cpf.substring(10, 11) ) ) 
result =  false;
else{
result =  true;
}
if(result == false){
      Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'CPF Inválido!',
confirmButtonColor: '#E9D758',
})   
}
if(nome == ''){ 
      e.preventDefault();
      Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'Preencha todos os campos para prosseguir!',
confirmButtonColor: '#E9D758',
})
}
else if(!/^[a-z A-Z]+$/.test(nome)){
      e.preventDefault();
Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'Preencha seu nome apenas com letras!',
confirmButtonColor: '#E9D758',
})
}
else if(email == ''){
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
text: 'Digite um e-mail válido',
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
  else if(cpf == ''){ 
      e.preventDefault();
Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'Preencha todos os campos para prosseguir!',
confirmButtonColor: '#E9D758',
})
  }
  else if(cpf < 11){ 
      e.preventDefault();
Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'Preencha todos os campos para prosseguir!',
confirmButtonColor: '#E9D758',
})
  }
  else if(result = false){ 
      e.preventDefault();
Swal.fire({
icon: 'error',
title: 'Erro!',
text: 'CPF Inválido!',
confirmButtonColor: '#E9D758',
})

  }
else{			
$.ajax({
  url: '../controllers/register.php',
  type: 'post',
  data : {
      nome: nome,
          email: email,
          cpf: cpf,
          senha: senha
},
});
}
});