class ModelCliente{
    static dadosCliente(){
        let nome    = document.getElementById('nome');
        let cnpj    = document.getElementById('cnpj');
        let maquina = document.getElementById('vendedor');

        let dados= {
                cnpj_cli: cnpj.value,
                nome: nome.value,
                maquinaId: maquina.value                
            };

        if(dados.cnpj_cli.length==18 && dados.nome!='' && dados.maquinaId!=''){
            return dados;
        }else{
            document.getElementById('modal-body').insertAdjacentElement('afterbegin', MSG);
        }      
    }
}