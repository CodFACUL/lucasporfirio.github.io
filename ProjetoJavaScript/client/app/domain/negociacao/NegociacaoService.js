class NegociacaoService{
    obterNegociacoesDaSemana(callback){
        const xhr = new XMLHttpRequest();
        xhr.open('GET','negociacoes/semana');

        xhr.onreadystatechange= ()=>{
            //0 requisição ainda não iniciada
            //1 conexão com o servido estabelecida
            //2 requisição recebida
            //3 processando requisição
            //4 requisição está concluída e a resposta está pronta
            if(xhr.readyState==4){
                if(xhr.status==200){
                    const negociacoes= JSON.parse(xhr.responseText).
                    map(objeto=>new Negociacao(new Date(objeto.data),objeto.quantidade,objeto.valor));
                    callback(null,negociacoes);
                }else{
                    console.log(xhr.responseText);
                    callback('Não foi possível obter as negociações da semana',null);
                }
            }
        };
        xhr.send();
    }
}