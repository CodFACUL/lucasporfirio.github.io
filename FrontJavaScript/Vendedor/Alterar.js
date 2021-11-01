function criaAlterar(){
    switch(titulobanner.textContent){
        case 'Vendedores':
            AlterarVendedor();
            break;
        case 'Máquinas':
            AlterarMaquina();
            break;
        case 'Clientes':
            AlterarCliente();
            break;
        case 'Lâminas':
            AlterarLamina();
            break;
    }
}
function AlterarVendedor(){
    let mbody = document.getElementById('modal-body');
    buttonsAlterar();
    mbody.innerHTML=`<div class="input-group mb-3">
                                <label for="nome" class="input-group-text">Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                            <div class="input-group">
                                <label for="cnpj" class="input-group-text">CNPJ</label>
                                <input type="text" name="cnpj" class="form-control">
                            </div>`;
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= 'Alterar Vendedor';
}

function buttonsAlterar(){
    let mfooter= document.getElementById('modal-footer');
    mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                       <button type="button" class="btn btn-warning">Alterar</button>`;
}
