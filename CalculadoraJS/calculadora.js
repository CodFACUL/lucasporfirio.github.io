
const botoes = ["7","8","9","*","4","5","6","/","1","2","3","+","CE","0","=","-"];
<<<<<<< HEAD
var visor = ''
var divResultado = document.createElement("div")
divResultado.setAttribute("id","dados")
container.appendChild(divResultado)
divResultado.innerHTML=''   
function Visor(valor){
    visor+=valor
    divResultado.innerHTML= visor
}

=======
var valor1=null
var valor2=null
var operador=null
var resultado=null
var divResultado = document.createElement("div")
divResultado.setAttribute("id","dados")
container.appendChild(divResultado)
divResultado.innerHTML='' 

//insere valores no visor
function Visor(numero){
    lastclick=numero
    if(resultado==divResultado.innerHTML){
        divResultado.innerHTML=numero
    }else{
    divResultado.innerHTML+= numero
    }
}
//lógica
function acao(op){
    if(lastclick!=op){
        lastclick=op
        if(valor1== null && op!="="){
            operador=op
            valor1=divResultado.innerHTML
            divResultado.innerHTML=''
        }else
        if(valor1!=null && divResultado.innerHTML!=''){
            valor2=divResultado.innerHTML
            if(operador=="+"){
                resultado=parseFloat(valor1)+parseFloat(valor2)
            }else
            if(operador=="-"){
                resultado=parseFloat(valor1)-parseFloat(valor2)
            }else
            if(operador=="*"){
                resultado=parseFloat(valor1)*parseFloat(valor2)
            }else
            if(operador=="/"){
                if(valor2=="0"){
                    resultado="Impossível dividir por zero"
                }else{
                    resultado=parseFloat(valor1)/parseFloat(valor2)               
                }
            }
            divResultado.innerHTML=resultado
            if(op=="=" ){
                valor1=null
                operador=null
            }else{
                valor1=resultado
                operador=op
            }
            valor2=null
        }
    }
}
//reset
function reset(){
    valor1=null
    valor2=null
    operador=null
    resultado=null
    divResultado.innerHTML=''
}
//gera botoes da calculadora
>>>>>>> 0abda20a94e80b27965af8e9fdc159378c27a889
for (let i = 0; i < botoes.length; i++){
    var input = document.createElement("input")
    input.setAttribute("id",`${botoes[i]}`)
    input.setAttribute("type","submit")
    input.setAttribute("name","botao")
    input.setAttribute("value",`${botoes[i]}`)
<<<<<<< HEAD
    input.setAttribute("onclick",`Visor('${botoes[i]}')`)
    if (i%4==0){
        var qtd = qtd+1
        var linha = document.createElement("div")
        linha.setAttribute("id",`${qtd}`)}
=======
    if(botoes[i] == "+" || 
       botoes[i] == "*" ||
       botoes[i] == "-"||
       botoes[i] == "/"||
       botoes[i] == "="){
        input.setAttribute("onclick",`acao('${botoes[i]}')`)
    }else 
    if(botoes[i] == "CE"){
        input.setAttribute("onclick",`reset('${botoes[i]}')`)}
    else{
        input.setAttribute("onclick",`Visor('${botoes[i]}')`)}
    if (i%4==0){
        var linha = document.createElement("div")
        linha.setAttribute("id",`${i/4}`)}
>>>>>>> 0abda20a94e80b27965af8e9fdc159378c27a889
    linha.appendChild(input)
    container.appendChild(linha)
}









