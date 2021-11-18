class Visualizar{

    id;
    modulo;

    modalVisualizar(id,modulo){
        this.id= id;
        this.modulo = modulo;
        if(id){
            Visualizar.viewAjax(id,modulo,true);
        }else{
            Visualizar.viewAjax(check[0],modulo,true);
        }
        
        mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>`
        titulo_modal.innerHTML= 'Visualizar '+modulo; 
    }


    static viewAjax(id,modulo,disabled=false){
        fetch(`https://localhost:44375/`+modulo+`/`+id,{
                method: 'GET',
                headers: headers,
            }).then(function(response){
                return response.json()
            })
            .then(function(response){
                function desabilitado(Campos){
                    if(disabled){
                        for(let obj in Campos){
                            Campos[obj].disabled=true;
                        }
                    }
                }
                switch(modulo){
                    case 'Vendedor':
                        const CamposVend = ViewVendedor.camposVendedor();
                        desabilitado(CamposVend);
                        CamposVend[0].value = response.nome;
                        CamposVend[1].value = response.cnpj_Vend;
                        break;
                    case 'Cliente':
                        const CamposCli = ViewCliente.camposCliente();
                        desabilitado(CamposCli);
                        CamposCli[0].value = response.result.nome;
                        CamposCli[1].value = response.result.cnpj_cli;
                        CamposCli[2].value = response.result.vendedorId;
                        break;
                    case 'Maquina':
                        const CamposMaq = ViewMaquina.camposMaquina();
                        desabilitado(CamposMaq);
                        CamposMaq[0].value = response.result.modelo;
                        CamposMaq[1].value = response.result.fases;
                        CamposMaq[2].value = response.result.amperagem;
                        CamposMaq[3].value = response.result.voltagem;
                        CamposMaq[4].value = response.result.peso;
                        CamposMaq[5].value = response.result.clienteId;
                        break;
                    case 'Lamina':
                        const CamposLam = ViewLamina.camposLamina();
                        desabilitado(CamposLam);
                        CamposLam[0].value = response.result.valor;
                        CamposLam[1].value = response.result.modelo;
                        CamposLam[2].value = response.result.maquinaId;
                        break;
                }
            })    
    }
}

