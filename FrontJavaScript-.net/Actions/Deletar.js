class Deletar{

    id;
    modulo;

    buttonsDeletar(){
        mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-danger" onclick="confirmaDel()">Deletar</button>`;
    }

    modalDeletar(id,modulo){
        this.id=id;
        this.modulo= modulo;
        this.buttonsDeletar(this.id);
        mbody.innerHTML=`<p>Deseja mesmo excluír o `+this.modulo+` ?</p>`;
        titulo_modal.innerHTML= 'Excluír Vendedor';
    }

    deletar(){
        if(this.id){
            this.deleteAjax(this.id);
        }else{ 
            for(let ids in check){
                this.deleteAjax(check[ids])
            }
        }
    }

    deleteAjax(id,modulo=this.modulo){
        fetch(`https://localhost:44375/`+modulo+`/`+id,{
                method: 'DELETE',
                headers: headers,
            })
            .then(function(response){
                if(response.ok){
                    modalSucesso('excluído',modulo);
                }else{
                    document.getElementById('modal-body').insertAdjacentElement('afterbegin', MSGERROR);
                }
                
            })    
    }
}