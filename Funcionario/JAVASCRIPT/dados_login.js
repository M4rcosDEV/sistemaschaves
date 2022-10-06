// function cadastrarERedirecionar() {
//   //capturar dados
//    window.location.assign = 'Cadastro-funcionario-login.html';
// }
function cadastrarDados() {
    var senha = document.getElementById('senha');
    var confirmar_senha = document.getElementById('confirmar_senha');
    validarSenha(senha, confirmar_senha);
}

function validarSenha(senha, confirmar_senha) {
    var senha = document.getElementById('senha');
    var confirmar_senha = document.getElementById('confirmar_senha')
    if (senha.value != confirmar_senha.value) {
      confirmar_senha.setCustomValidity("Senhas diferentes!");
    } else {
      confirmar_senha.setCustomValidity("");
    }
  }