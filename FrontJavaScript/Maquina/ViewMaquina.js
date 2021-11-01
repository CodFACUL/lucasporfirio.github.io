function tabelaMaquina(){
    codigo=3;
    return `<table class="table   table-hover">
    <thead class="bg-primary">
        <tr>
            <th></th>
            <th class="col-2">Código Máquina</th>
            <th style="width:200px">Cliente</th>
            <th class="col-1">Modelo</th>
            <th class="col-1">Fases</th>
            <th class="col-1">Voltagem</th>
            <th class="col-1">Amperagem</th>
            <th class="col-1">Peso</th>
            <th class="col-1">Ações</th>
        </tr>
    </thead>
    <tbody class="table-white bg-white text-dark">
      <tr>
        <td><input class="form-check" type="radio" name="exampleRadios" id="exampleRadios1" value="`+codigo+`" ></td>
        <td>`+codmaquina+`</td>
        <td class="col-3"><div class="d-inline-block text-truncate" style="margin-left:-0.5rem; margin-right:-0.5rem; width: 200px;">`+nome+`</div></td>
        <td>`+modelo+`</td>
        <td>`+fases+`</td>
        <td>`+voltagem+`</td>
        <td>`+amperagem+`</td>
        <td>`+peso+`</td>
        <td >
          <i class="bi  bi-search"></i>
          <i class="bi ms-3 bi-pencil"></i>
          <i class="bi ms-3 bi-trash"></i>
        </td>
      </tr>  
    </tbody>
</table>`;
}

//document.querySelector('#tabela').innerHTML=tabelaMaquina();