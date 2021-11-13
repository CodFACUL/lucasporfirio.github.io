class Listar{

    static dados(modulo){
       fetch('https://localhost:44375/'+modulo)
        .then(function(response){
            return response.json()
        })
        .then(function(response){
            listaDados[0]= response;
        });
        
        return listaDados[0];
    }

}
