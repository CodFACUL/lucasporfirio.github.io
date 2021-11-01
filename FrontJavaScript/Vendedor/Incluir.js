function criaIncluir(){
    switch(titulobanner.textContent){
        case 'Vendedores':
            IncluirVendedor();
            break;
        case 'Máquinas':
            IncluirMaquina();
            break;
        case 'Clientes':
            IncluirCliente();
            break;
        case 'Lâminas':
            IncluirLamina();
            break;
    }
}
function IncluirVendedor(){
    let mbody = document.getElementById('modal-body');
    buttonsIncluir();
    mbody.innerHTML=`<div class="input-group mb-3">
                                <label for="nome" class="input-group-text">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                            <div class="input-group">
                                <label for="cnpj" class="input-group-text">CNPJ</label>
                                <input type="text" id="cnpj" name="cnpj" class="form-control">
                            </div>`;
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= 'Cadastrar Vendedor';
}

function buttonsIncluir(){
    let mfooter= document.getElementById('modal-footer');
    mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                       <button type="button" onclick="dadosVendedor()" class="btn btn-success">Incluir</button>`;
}

function dadosVendedor(){
    let nome = document.getElementById('nome');
    let cnpj = document.getElementById('cnpj');

    let dados= {
            cnpj_vend: cnpj.value,
            nome: nome.value
        };
        console.log(JSON.stringify(dados))
        fetch('http://127.0.0.1:8000/api/vendedor',{
            method: 'POST',
            body: JSON.stringify(dados)
        })
}
