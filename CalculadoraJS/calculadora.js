
const botoes = ["7","8","9","*","4","5","6","/","1","2","3","+","CE","0","=","-"];
var visor = ''
var divResultado = document.createElement("div")
divResultado.setAttribute("id","dados")
container.appendChild(divResultado)
divResultado.innerHTML=''   
function Visor(valor){
    visor+=valor
    divResultado.innerHTML= visor
}

for (let i = 0; i < botoes.length; i++){
    var input = document.createElement("input")
    input.setAttribute("id",`${botoes[i]}`)
    input.setAttribute("type","submit")
    input.setAttribute("name","botao")
    input.setAttribute("value",`${botoes[i]}`)
    input.setAttribute("onclick",`Visor('${botoes[i]}')`)
    if (i%4==0){
        var qtd = qtd+1
        var linha = document.createElement("div")
        linha.setAttribute("id",`${qtd}`)}
    linha.appendChild(input)
    container.appendChild(linha)
}









