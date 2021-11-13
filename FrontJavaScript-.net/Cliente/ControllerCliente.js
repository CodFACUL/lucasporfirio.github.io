function criaDeletar(id){
    del.modalDeletar(id,'Cliente');
  }
  function confirmaDel(){
    del.deletar();
  }
  function criaAlterar(id){
    alt.modalAlterar(id,'Cliente');
  }
  function confirmaAlt(){
    alt.putDados();
  }
  function criaVisualizar(id){
    vis.modalVisualizar(id,'Cliente');
  }
  function criaIncluir(){
    inc.modalIncluir('Cliente');
  }
  function confirmaPost(){
    inc.postDados();
  }
  Listar.dados('Vendedor');