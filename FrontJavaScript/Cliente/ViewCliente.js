function tabelaCliente(tabela){
    tabela.innerHTML=`<table class="table   table-hover">
                <thead class="bg-primary">
                    <tr>
                        <th></th>
                        <th class="col-1">Código</th>
                        <th style="width:200px">Cliente</th>
                        <th class="col-2">CNPJ Cliente</th>
                        <th style="width:200px">Vendedor</th>
                        <th class="col-2">CNPJ Vendedor</th>
                        <th class="">Ações</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="table-white bg-white text-dark">
        </tbody>
    </table>`;
    bodyCli();
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

function bodyCli(){
    fetch('http://127.0.0.1:8000/api/cliente')
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
                        <td>`+user.cnpj_cli+`</td>
                        <td class="col-3"><div class="d-inline-block text-truncate" style="margin-left:-0.5rem; margin-right:-0.5rem; width: 200px;"></div></td>
                        <td></td>
                        <td >
                             <i onclick="criaVisualizar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="bi  bi-search"></i>
                             <i onclick="criaAlterar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-pencil"></i>
                             <i onclick="criaDeletar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-trash"></i>
                        </td>` 
            tbody.appendChild(tr);
        })
    });
}
function abaCliente(){
    titulobanner.innerHTML= 'Clientes';
    const tabela= document.querySelector('#tabela');
    tabelaCliente(tabela);
}