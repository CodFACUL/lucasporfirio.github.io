function criaDeletar(){
    switch(titulobanner.textContent){
        case 'Vendedores':
            Deletar('o vendedor ');
            break;
        case 'Máquinas':
            Deletar('a máquina');
            break;
        case 'Clientes':
            Deletar('o cliente');
            break;
        case 'Lâminas':
            Deletar('a lâmina');
            break;
    }
}

function buttonsDeletar(){
    let mfooter= document.getElementById('modal-footer');
    mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                       <button type="button" class="btn btn-danger">Deletar</button>`;
}

function Deletar(string){
    let mbody = document.getElementById('modal-body');
    buttonsDeletar();
    mbody.innerHTML=`<p>Deseja mesmo excluír o `+string+` ?</p>`;
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= 'Excluír Vendedor';
}