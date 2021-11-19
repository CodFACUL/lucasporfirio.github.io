class Incluir{

    modulo;

    buttonsIncluir(){
        mfooter.innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" onclick="confirmaPost()" class="btn btn-success">Incluir</button>`;
    }

    postDados(){
        switch (this.modulo){
            case 'Vendedor':
                let dadosVend = ModelVendedor.dadosVendedor();
                if(dadosVend){ 
                    this.postAjax(dadosVend,this.modulo);
                }
                break;
            case 'Cliente':
                let dadosCli = ModelCliente.dadosCliente();
                if(dadosCli){ 
                    this.postAjax(dadosCli,this.modulo);
                }
                break;
            case 'Maquina':
                let dadosMaq = ModelMaquina.dadosMaquina();
                if(dadosMaq){ 
                    this.postAjax(dadosMaq,this.modulo);
                }
                break;
            case 'Lamina':
                let dadosLam = ModelLamina.dadosLamina();
                if(dadosLam){ 
                    this.postAjax(dadosLam,this.modulo);
                }
                break;
        }
    }

     postAjax(dados,nome){
        fetch('https://localhost:44375/'+this.modulo,{
                method: 'POST',
                headers: headers,
                body: JSON.stringify(dados)
            })
            .then(function(response){
                console.log(response)
                if(response.ok){
                    modalSucesso('incluido',nome)
                }else{
                    document.getElementById('modal-body').insertAdjacentElement('afterbegin', MSG);
                }                  
            })
    }

    modalIncluir(modulo){
        this.modulo = modulo;
        this.buttonsIncluir();
        switch(modulo){
            case 'Vendedor':
                ViewVendedor.camposVendedor();
                titulo_modal.innerHTML= 'Cadastrar Vendedor';
                break;
            case 'Cliente':
                ViewCliente.camposCliente();
                titulo_modal.innerHTML= 'Cadastrar Cliente';
                break;
            case 'Maquina':
                ViewMaquina.camposMaquina();
                titulo_modal.innerHTML= 'Cadastrar Máquina';
                break;
            case 'Lamina':
                ViewLamina.camposLamina();
                titulo_modal.innerHTML= 'Cadastrar Lâmina';
                break;    
        } 
         
    }
}

