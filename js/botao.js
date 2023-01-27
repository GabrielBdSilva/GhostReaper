//Botão do membro
var btPF = document.querySelector("#btPF");

btPF.addEventListener("click", function() {
  var aparecerPf = document.querySelector(".PF-MEMBROS");
  aparecerPf.style.display = 'none';
});
  
//por enquanto deixar assim e colocar uma margem maior para não aparecer o conteudo de baixo