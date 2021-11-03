function criaAlterar(id=null){
    switch(titulobanner.textContent){
        case 'Vendedores':
            AlterarVendedor(id);
            break;
        case 'Máquinas':
            AlterarMaquina(id);
            break;
        case 'Clientes':
            AlterarCliente(id);
            break;
        case 'Lâminas':
            AlterarLamina(id);
            break;
    }
}
function AlterarVendedor(id){
    buttonsAlterar(id);
    if(id){
        viewAjax(id,'vendedor');
    }else{
        viewAjax(check[0],'vendedor');
    }  
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= 'Alterar Vendedor';
}

function buttonsAlterar(id){
    let mfooter= document.getElementById('modal-footer');
    mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                       <button type="button" onclick="putDados(`+id+`)" class="btn btn-warning">Alterar</button>`;
}

function putDados(id=null){
    putAjax(dadosVendedor(),'Vendedor',id);
}

function putAjax(dados,nome,id=null){
    if(!id){
        id= check[0]
    }
    fetch('http://127.0.0.1:8000/api/vendedor/'+id,{
            method: 'PUT',
            headers: headers,
            body: JSON.stringify(dados)
        })
        .then(function(response){
            return response.json()
        })
        .then(function(response){
            modalSucesso('alterado',nome)
        })
}