function criaDeletar(id){
    del.modalDeletar(id,'lamina');
  }
  function confirmaDel(){
    del.deletar();
  }
  function criaAlterar(id){
    alt.modalAlterar(id,'lamina');
  }
  function confirmaAlt(){
    alt.putDados();
  }
  function criaVisualizar(id){
    vis.modalVisualizar(id,'lamina');
  }
  function criaIncluir(){
    inc.modalIncluir('lamina');
  }
  function confirmaPost(){
    inc.postDados();
  }
  Listar.dados('maquina');