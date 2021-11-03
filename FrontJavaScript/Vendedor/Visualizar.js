const mbody = document.getElementById('modal-body');

const check=[];
const altera = document.getElementById('alterar');
const visualiza =document.getElementById('visualizar');
const deleta =document.getElementById('deletar');
function rowSelected(event){
    if(event.target.checked){
        check.push(event.target.id);
    }else{
        check.splice(check.indexOf(event.target.id),1);
    } 
    if(check.length!=0){
        deleta.disabled=false;
    }else{
        deleta.disabled=true;
    }  
    if(check.length!=1){
        altera.disabled=true;
        visualiza.disabled=true;
    }else{
        altera.disabled=false;
        visualiza.disabled=false; 
    }
}

function criaVisualizar(id=null){
    switch(titulobanner.textContent){
        case 'Vendedores':
            VisualizarVendedor(id);
            break;
        case 'Máquinas':
            VisualizarMaquina(id);
            break;
        case 'Clientes':
            VisualizarCliente(id);
            break;
        case 'Lâminas':
            VisualizarLamina(id);
            break;
    }
}
function VisualizarVendedor(id){
    if(id){
        viewAjax(id,'vendedor',true);
    }else{
        viewAjax(check[0],'vendedor',true);
    }
    
    let titulo_modal= document.getElementById('titulo-modal');
    let mfooter= document.getElementById('modal-footer');
    mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>`
    titulo_modal.innerHTML= 'Visualizar Vendedor'; 
}


function viewAjax(id,modulo,disabled=false){
    fetch(`http://127.0.0.1:8000/api/vendedor/`+id,{
            method: 'GET',
            headers: headers,
        })
        .then(function(response){
            return response.json()
        })
        .then(function(response){
            const Campos = camposVendedor();
            if(disabled){
                for(let obj in Campos){
                    Campos[obj].disabled=true;
                }
            }
            switch(modulo){
                case 'vendedor':
                    Campos[0].value = response.nome;
                    Campos[1].value = response.cnpj_vend;
                    break;
                case 'maquina':
                    Campos[0].value = response.nome;
                    Campos[1].value = response.cnpj_vend;
                    break;
            }
        })    
}

