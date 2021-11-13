function criaDeletar(id){
    del.modalDeletar(id,'Lamina');
  }
  function confirmaDel(){
    del.deletar();
  }
  function criaAlterar(id){
    alt.modalAlterar(id,'Lamina');
  }
  function confirmaAlt(){
    alt.putDados();
  }
  function criaVisualizar(id){
    vis.modalVisualizar(id,'Lamina');
  }
  function criaIncluir(){
    inc.modalIncluir('Lamina');
  }
  function confirmaPost(){
    inc.postDados();
  }
  Listar.dados('Maquina');