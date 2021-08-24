const campos = ["Nome", "Rua", "Número", "CEP","Nacionalidade","DataNascimento"]

const selecionavel = ["Regiao","UF","Municipio"]

const locais=[{
                regiao:"Sul",
                UF:"SC",
                cidade:"Rio do Sul"
            },{
                regiao:"Sul",
                UF:"SC",
                cidade:"Florianóplos"
            },{
                regiao:"Sul",
                UF:"PR",
                cidade:"Curitiba"
            },{
                regiao:"Sul",
                UF:"PR",
                cidade:"Foz do Iguaçu"
            },{
                regiao:"Sudeste",
                UF:"SP",
                cidade:"São Paulo"
            },{
                regiao:"Sudeste",
                UF:"SP",
                cidade:"Guarujá"
            },{
                regiao:"Sudeste",
                UF:"RJ",
                cidade:"Rio do Janeiro"
            },{
                regiao:"Sudeste",
                UF:"RJ",
                cidade:"Niterói"
            }]
//campos unicos array regiao
const arrayRegiao = locais.map((object)=>object.regiao)
const uniqueRegiao = [...new Set(arrayRegiao)]
//campos unicos array UF
const arrayUF = locais.map((object)=>object.UF)
const uniqueUF = [...new Set(arrayUF)]
//campos unicos array cidade
const arrayCidade = locais.map((object)=>object.cidade)
const uniqueCidade = [...new Set(arrayCidade)]
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

//option regiao
function OptionRegiao(select){
    for(let j=0;j<uniqueRegiao.length;j++){
        let option = document.createElement("option")
        option.setAttribute("value",`${uniqueRegiao[j]}`)
        option.innerHTML=`${uniqueRegiao[j]}`
        select.appendChild(option)
    }
}
//option UF
function OptionUF(select){
    for(let j=0;j<uniqueUF.length;j++){
        let option = document.createElement("option")
        option.setAttribute("value",`${uniqueUF[j]}`)
        option.innerHTML=`${uniqueUF[j]}`
        select.appendChild(option)
    }
}
//option UF
function OptionCidade(select){
    for(let j=0;j<uniqueCidade.length;j++){
        let option = document.createElement("option")
        option.setAttribute("value",`${uniqueCidade[j]}`)
        option.innerHTML=`${uniqueCidade[j]}`
        select.appendChild(option)
    }
}

//gera campo selecionavel
for (let i = 0; i < selecionavel.length; i++){
    let select = document.createElement("select")
    let label = document.createElement("label")
    label.setAttribute("id",`${selecionavel[i]}`)
    label.innerHTML=`${selecionavel[i]}`
    select.setAttribute("id",`${selecionavel[i]}`)
    select.setAttribute("name","select")
    if(selecionavel[i]=="Regiao"){
        OptionRegiao(select);
    }
    if(selecionavel[i]=="UF"){
        OptionUF(select);
    }
    if(selecionavel[i]=="Municipio"){
        OptionCidade(select);
    }
    container.appendChild(label)
    container.appendChild(select)
}

