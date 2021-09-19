class NegociacaoController{

    constructor(){
        const $ = document.querySelector.bind(document);

        this._inputData = $("#data");
        this._inputQuantidade =$("#quantidade");
        this._inputValor = $("#valor");
       // this._negociacoes= new Negociacoes(model=>this._negociacoesView.update(model));
        this._negociacoesView= new NegociacoesViews('#negociacoes');
        const self=this;
        this._negociacoes = new Proxy(new Negociacoes(),{
            get(target,prop,receiver){
                if(typeof(target[prop])== typeof(Function)&&['adiciona','esvazia'].includes(prop)){
                    return function(){
                        console.log(`${prop} disparou a armadilha`);
                        target[prop].apply(target,arguments);
                        self._negociacoesView.update(target);
                    };
                }else{
                    return target[prop];
                }
            }
        });
        
        this._mensagem = new Mensagem();
        this._mensagemView= new MensagemView('#mensagemView');
        this._mensagemView.update(this._mensagem);
    }

    adiciona(event){
        event.preventDefault();

    //    let data = new Date(...this._inputData.value.split('-').map(function(item,indice){
    //       if(indice == 1){
    //           return item-1;
   //        }
      //      return item;
 //       }));
        
        this._negociacoes.adiciona(this._criaNegociacao());
        this._mensagem.texto='Negociação adicionada com sucesso!';
        this._mensagemView.update(this._mensagem);
        console.log(this._negociacoes.paraArray());
        this._limparFormulario();
      }

      _limparFormulario(){
          this._inputData.value='2020-01-01';
          this._inputQuantidade.value=1;
          this._inputValor.value=2.0;
          this._inputData.focus();
      }

      _criaNegociacao(){
        return new Negociacao(
            DateConverter.paraData(this._inputData.value),
            parseInt(this._inputQuantidade.value),
            parseFloat(this._inputValor.value)
        );
      }
      
      apaga(){
          this._negociacoes.esvazia();
          this._mensagem.texto='Negociações apagadas com sucesso!';
          this._mensagemView.update(this._mensagem);
      }
}