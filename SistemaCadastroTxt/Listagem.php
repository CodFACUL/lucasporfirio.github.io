
<?php



$resultados= '';
foreach ($produtos as $produto){
    $resultados.='<tr>
                    <td>'.$produto->id.'</td>
                    <td>'.$produto->nome.'</td>
                    <td>'.$produto->valor.'</td>
                    <td>'.$produto->quantidade.'</td>
        
                  </tr>';
}
$resultados = strlen($resultados) ? $resultados:'<tr>
                                                    <td colspan="6" class="text-center">Nenhum produto encontrado</td>
                                                </tr>';
?>
<main>

    <section>
        <a class="btn btn-success"href="Cadastrar.php">
            Novo Produto
        </a>
    </section>

    <section>
        <table class="table bg-light text-dark mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                </tr>           
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>

        </table>

    </section>
</main>