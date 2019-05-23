/*
  Subject    : CRUD – Linguagem PHP (TECNOFIT)
  Created on : 20-May-2019, 01:48:00 PM
  Author     : Marcos Freire
*/


function confirmar(id) {
  
  if (confirm("Deseja realmente excluir?")) {
    window.location.href = "./controllers/ControllerExcluirPedido.php?id=" +id+'';
    return true;
  }
  else {
    return false;
  }
}
