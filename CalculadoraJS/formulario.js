var input = document.createElement("input")
input.setAttribute("id","valor")
input.setAttribute("type","text")

var divResultado = document.createElement("div")
divResultado.style.color = "blue";
var botao = document.createElement("button")
botao.addEventListener("click", () => divResultado.innerHTML = input.value)
var botaoTxt = document.createTextNode("Enviar")
botao.appendChild(botaoTxt)

container.appendChild(input)
container.appendChild(botao)
container.appendChild(divResultado)