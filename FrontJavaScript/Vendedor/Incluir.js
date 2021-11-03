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

function buttonsIncluir(){
    let mfooter= document.getElementById('modal-footer');
    mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                       <button type="button" onclick="postDados()" class="btn btn-success">Incluir</button>`;
}

function postDados(){
    postAjax(dadosVendedor(),'Vendedor');
}

function postAjax(dados,nome){
    fetch('http://127.0.0.1:8000/api/vendedor',{
            method: 'POST',
            headers: headers,
            body: JSON.stringify(dados)
        })
        .then(function(response){
            return response.json()
        })
        .then(function(response){
            modalSucesso('incluido',nome)
        })
}

function modalSucesso(tipo,nome){
    let myModalEl = document.getElementById('staticBackdrop');
    let modal = bootstrap.Modal.getInstance(myModalEl);
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= titulobanner.textContent;
    let mbody = document.getElementById('modal-body');
    mbody.innerHTML= '<p>'+nome+' '+tipo+' com sucesso!</p>';
    document.getElementById('modal-footer').innerHTML=`<button type="button" onclick="atualizaDados()" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>`;
    modal.show();
}

function IncluirVendedor(){
    buttonsIncluir();
    camposVendedor();
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= 'Cadastrar Vendedor'; 
}

