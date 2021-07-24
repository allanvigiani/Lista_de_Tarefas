modal = document.getElementById("myModal");
span = document.getElementsByClassName("close")[0];

// Ativa o modal
function editar_tarefa() {
  modal.style.display = "block";
}

function fechar_modal() {
  modal.style.display = "none";
}

// Fecha o modal caso clique fora
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}