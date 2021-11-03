function criaDeletar(id){
    switch(titulobanner.textContent){
        case 'Vendedores':
            modalDeletar('o vendedor ',id);
            break;
        case 'Máquinas':
            modalDeletar('a máquina',id);
            break;
        case 'Clientes':
            modalDeletar('o cliente',id);
            break;
        case 'Lâminas':
            modalDeletar('a lâmina',id);
            break;
    }
}

function buttonsDeletar(id){
    let mfooter= document.getElementById('modal-footer');
    mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                       <button type="button" class="btn btn-danger" onclick="deletar(`+id+`)">Deletar</button>`;
}

function modalDeletar(string,id){
    let mbody = document.getElementById('modal-body');
    buttonsDeletar(id);
    mbody.innerHTML=`<p>Deseja mesmo excluír o `+string+` ?</p>`;
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= 'Excluír Vendedor';
}

function deletar(id=null){
    if(id){
        deleteAjax(id,'vendedor');
    }else{ 
        for(ids in check){
            deleteAjax(check[ids],'Vendedor')
        }
    }
}

function deleteAjax(id,nome){
    fetch(`http://127.0.0.1:8000/api/vendedor/`+id,{
            method: 'DELETE',
            headers: headers,
        })
        .then(function(response){
            modalSucesso('excluído',nome);
        })    
}