class ViewLamina{

    constructor(){
        this.tabelaLamina();
    }

    tabelaLamina(){
        tabela.innerHTML=`<table class="table   table-hover">
                    <thead class="bg-primary">
                        <tr>
                            <th class="col-1"></th>
                            <th class=" justify-content-start col-2">Código</th>
                            <th style="width:200px">Lâmina</th>
                            <th style="width:200px">Valor</th>
                            <th class="col-2">Código Maquina</th>
                            <th class="col-3">Modelo Maquina</th>
                            <th class=" justify-content-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tbody" class="table-white bg-white text-dark">
            </tbody>
        </table>`;
        this.body();
    }

    body(){
        fetch('https://localhost:44375/Lamina')
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
                            <td><div class="d-inline-block text-truncate" style="margin-left:-0.5rem; margin-right:-0.5rem; width: 200px;">`+user.modelo+`</div></td>
                            <td>R$ `+user.valor+`</td>
                            <td>`+user.maquina.id+`<div class="d-inline-block text-truncate" style="margin-left:-0.5rem; margin-right:-0.5rem; width: 200px;"></div></td>
                            <td>`+user.maquina.modelo+`</td>
                            <td class="col-1">
                                <i onclick="criaVisualizar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="bi  bi-search"></i>
                                <i onclick="criaAlterar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-pencil"></i>
                                <i onclick="criaDeletar('`+user.id+`')" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="bi ms-3 bi-trash"></i>
                            </td>` 
                tbody.appendChild(tr);
            })
        });
    }

    static camposLamina(){
        mbody.innerHTML=`<div class="input-group mb-3">
                                <label for="modelo" class="input-group-text">Lamina</label>
                                <select id="modelo" class="form-select">
                                <option value="Lisa">Lisa</option>
                                <option value="Serrilhada">Serrilhada</option>
                                <option value="Curva">Curva</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label for="valor" class="input-group-text">Valor R$</label>
                                <input type="text"  id="valor" required name="valor" class="form-control">
                            </div>
                            <div class="input-group mb-3">
                                <label for="maquina" class="input-group-text">Maquina</label>
                                <select id="maquina" class="form-select">
                                </select>
                            </div>`
        const maquina = document.getElementById('maquina');
        for(let vend in listaDados[0]){
            const option = document.createElement('option');
            option.value = listaDados[0][vend].id;
            option.innerHTML = listaDados[0][vend].modelo;
            maquina.appendChild(option);
        }

        const valor     = document.getElementById('valor');
        const modelo     = document.getElementById('modelo');

        return [valor,modelo,maquina];
    }

    static atualizaDados(){
        new ViewLamina();
        altera.disabled=true;
        visualiza.disabled=true;
        deleta.disabled=true;
        check.length = 0;
    }
}