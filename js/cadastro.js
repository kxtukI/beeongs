var inputNome = document.querySelector("#cpf");
nome.addEventListener("keypress", function(e) {
    var keyCode = (e.keyCode ? e.keyCode : e.which);
  
  if (keyCode < 47 && keyCode > 58) {
    e.preventDefault();
  }
});