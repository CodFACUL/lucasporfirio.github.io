class ViewVendedor{

    constructor(){
        this.tabelaVendedor();
    }

    tabelaVendedor(){
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
        this.body();
    }

    body(){
        fetch('https://localhost:44375/Vendedor')
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
                            <td>`+user.cnpj_Vend+`</td>
                            <td>
                                <i onclick="criaVisualizar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="bi  bi-search"></i>
                                <i onclick="criaAlterar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-pencil"></i>
                                <i onclick="criaDeletar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-trash"></i>
                            </td>` 
                tbody.appendChild(tr);
            })
        });
    }

    static camposVendedor(){
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


    static atualizaDados(){
        new ViewVendedor();
        altera.disabled=true;
        visualiza.disabled=true;
        deleta.disabled=true;
        check.length = 0;
    }
}
