function criaDeletar(id){
    del.modalDeletar(id,'Maquina');
  }
  function confirmaDel(){
    del.deletar();
  }
  function criaAlterar(id){
    alt.modalAlterar(id,'Maquina');
  }
  function confirmaAlt(){
    alt.putDados();
  }
  function criaVisualizar(id){
    vis.modalVisualizar(id,'Maquina');
  }
  function criaIncluir(){
    inc.modalIncluir('Maquina');
  }
  function confirmaPost(){
    inc.postDados();
  }
  Listar.dados('Cliente');