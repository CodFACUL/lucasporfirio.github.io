function criaDeletar(id){
    del.modalDeletar(id,'Vendedor');
  }
  function confirmaDel(){
    del.deletar();
  }
  function criaAlterar(id){
    alt.modalAlterar(id,'Vendedor');
  }
  function confirmaAlt(){
    alt.putDados();
  }
  function criaVisualizar(id){
    vis.modalVisualizar(id,'Vendedor');
  }
  function criaIncluir(){
    inc.modalIncluir('Vendedor');
  }
  function confirmaPost(){
    inc.postDados();
  }