const MSG = document.createElement('div');
MSG.setAttribute('class','alert alert-danger');
MSG.innerHTML='<p>Preencha corretamente todos os campos</p>';
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
                            <input type="text" id="nome" required name="nome" class="form-control">
                        </div>
                        <div class="input-group">
                            <label for="cnpj" class="input-group-text">CNPJ</label>
                            <input type="text" onkeypress="mascaraCNPJ()" onchange="mascaraCNPJ()" maxlength="18"  id="cnpj" required name="cnpj" class="form-control">
                        </div>`;
    let titulo_modal= document.getElementById('titulo-modal');
    titulo_modal.innerHTML= 'Cadastrar Vendedor';
    
}

function mascaraCNPJ(){
    let input = document.getElementById('cnpj');
    input.value= input.value.replace(/\D/g,"");
    input.value= input.value.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5");
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
    let headers = {
            "Content-Type": "application/json",                                                                                                
            "Access-Control-Origin": "*"
         }
    if(dados.cnpj_vend.length==18 && dados.nome!=''){
        postAjax(dados,headers,'Vendedor');
    }else{
        document.getElementById('modal-body').insertAdjacentElement('afterbegin', MSG);
    }
        
}

function postAjax(dados,headers,nome){
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
    document.getElementById('modal-footer').innerHTML=`<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>`;
    modal.show();

}
