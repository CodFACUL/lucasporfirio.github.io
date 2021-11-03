const MSG = document.createElement('div');
MSG.setAttribute('class','alert alert-danger');
MSG.innerHTML='<p>Preencha corretamente todos os campos</p>';
const headers = {
    "Content-Type": "application/json",                                                                                                
    "Access-Control-Origin": "*"
 }

function tabelaVendedor(tabela){
    tabela.innerHTML=`<table class="table   table-hover">
                <thead class="bg-primary">
                    <tr>
                        <th></th>
                        <th class="col-1">Código</th>
                        <th style="width:200px">Vendedor</th>
                        <th class="col-6">CNPJ</th>
                        <th class="">Ações</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="table-white bg-white text-dark">
        </tbody>
    </table>`;
    body();
    let paginacao = document.createElement('nav');
    paginacao.setAttribute('class','position-relative ');
    paginacao.innerHTML=`<ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
            </ul>`;
    tabela.appendChild(paginacao);
}

function body(){
    fetch('http://127.0.0.1:8000/api/vendedor')
    .then(function(response){
        return response.json()
    })
    .then(function(response){
        response.forEach((user) => {
           let tbody = document.getElementById('tbody');
           let tr = document.createElement('tr');
           tr.innerHTML=`<td>
                            <input class="form-check" type="checkbox" onclick="rowSelected(event)" name="row" id="`+user.id+`" >
                        </td>
                        <td>`+user.id+`</td>
                        <td class="col-3"><div class="d-inline-block text-truncate" style="margin-left:-0.5rem; margin-right:-0.5rem; width: 200px;">`+user.nome+`</div></td>
                        <td>`+user.cnpj_vend+`</td>
                        <td >
                             <i onclick="criaVisualizar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="bi  bi-search"></i>
                             <i onclick="criaAlterar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-pencil"></i>
                             <i onclick="criaDeletar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-trash"></i>
                        </td>` 
            tbody.appendChild(tr);
        })
    });
}

function camposVendedor(){
    mbody.innerHTML=`<div class="input-group mb-3">
                            <label for="nome" class="input-group-text">Nome</label>
                            <input type="text" id="nome" required name="nome" class="form-control">
                        </div>
                        <div class="input-group">
                            <label for="cnpj" class="input-group-text">CNPJ</label>
                            <input type="text" onkeypress="mascaraCNPJ()" onchange="mascaraCNPJ()"  maxlength="18"  id="cnpj" required name="cnpj" class="form-control">
                        </div>`
    const nome = document.getElementById('nome');
    const CNPJ = document.getElementById('cnpj');
    return [nome,CNPJ]
}

const titulobanner= document.getElementById('titulo-banner');
titulobanner.innerHTML= 'Vendedores';
const tabela= document.querySelector('#tabela');
tabelaVendedor(tabela);

function atualizaDados(){
    tabelaVendedor(tabela);
    altera.disabled=true;
    visualiza.disabled=true;
    deleta.disabled=true;
    check.length = 0;
}