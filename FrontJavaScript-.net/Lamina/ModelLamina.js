class ModelLamina{
    static dadosLamina(){
        let nome    = document.getElementById('modelo');
        let valor    = document.getElementById('valor');
        let maquina = document.getElementById('maquina');

        let dados= {
                valor: valor.value,
                modelo: nome.value,
                maquinaId: maquina.value                
            };

        if(dados.valor!='' && dados.valor.length<20){
            return dados;
        }else{
            document.getElementById('modal-body').insertAdjacentElement('afterbegin', MSG);
        }      
    }
}