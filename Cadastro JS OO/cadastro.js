const campos = ["Nome", "Rua", "Número", "CEP","Nacionalidade","DataNascimento"]

const selecionavel = ["Regiao","UF","Municipio"]

const local=["Sul","Sudeste"]

local[i].BiArray(i,j)

function BiArray(linha,coluna,valor){
    let array=[];
    for(let i=0;i<linha;i++){
        array.push([]);
        array[i].push(new Array(coluna));
        for(let j=0;j<coluna;j++){
            array[i][j]=valor;
        }
    }
}

//gera campos de texto
for (let i = 0; i < campos.length; i++){
    let label = document.createElement("label")
    let input = document.createElement("input")
    label.setAttribute("id",`${campos[i]}`)
    label.innerHTML=`${campos[i]}`
    input.setAttribute("id",`${campos[i]}`)
    if(campos[i]=="Nacionalidade"){
        input.setAttribute("type","radio")
    }else if(campos[i]=="DataNascimento"){
        input.setAttribute("type","date")
    }else{
        input.setAttribute("type","text")
        input.setAttribute("name",`${campos[i]}`)
        input.setAttribute("value","")
    }
    container.appendChild(label)
    container.appendChild(input)

}

//gera campo selecionavel
for (let i = 0; i < selecionavel.length; i++){
    let select = document.createElement("select")
    let label = document.createElement("label")
    label.setAttribute("id",`${selecionavel[i]}`)
    label.innerHTML=`${selecionavel[i]}`
    select.setAttribute("id",`${selecionavel[i]}`)
    select.setAttribute("name","select")
    select.setAttribute("onclick",`Select('${selecionavel[i]}')`)
    container.appendChild(label)
    container.appendChild(select)
}

