function tabelaVendedor(tabela){
    tabela.innerHTML=`<table class="table   table-hover">
                <thead class="bg-primary">
                    <tr>
                        <th></th>
                        <th class="col-1">Código</th>
                        <th style="width:200px">Vendedor</th>
                        <th class="col-3">CNPJ</th>
                        <th class="col-7">Ações</th>
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
                            <input class="form-check" type="radio" name="exampleRadios" id="exampleRadios1" value="`+user.id+`" >
                        </td>
                        <td>`+user.id+`</td>
                        <td class="col-3"><div class="d-inline-block text-truncate" style="margin-left:-0.5rem; margin-right:-0.5rem; width: 200px;">`+user.nome+`</div></td>
                        <td>`+user.cnpj_vend+`</td>
                        <td >
                             <i class="bi  bi-search"></i>
                             <i class="bi ms-3 bi-pencil"></i>
                             <i class="bi ms-3 bi-trash"></i>
                        </td>` 
            tbody.appendChild(tr);
        })
    });
}
let titulobanner= document.getElementById('titulo-banner');
titulobanner.innerHTML= 'Vendedores';
let tabela= document.querySelector('#tabela');
tabelaVendedor(tabela);