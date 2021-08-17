function Pessoa(pNome,pSobrenome,pIdade){
    this.primeiroNome=pNome;
    this.segundoNome=pSobrenome;
    this.idade=pIdade;

    this.nomeCompleto =function(){
        return this.primeiroNome+this.segundoNome;
    }

    this.salvar = function(){
        localStorage.setItem("Nome",this.primeiroNome);
    }
    this.recuperar=function(){
        console.log(localStorage.getItem("nome"));
    }
}

const pessoa = new Pessoa("Lucas","Porfírio","21");

const nomeCompleto = pessoa.nomeCompleto();

let container = document.getElementById("container");
container.innerHTML = nomeCompleto;