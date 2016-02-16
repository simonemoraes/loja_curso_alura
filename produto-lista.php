<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php")
?>
<?php
if (array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
    ?>
    <p class="alert-success">Produto apagado com sucesso!</p>
    <?php
}
?>


<table class="table table-bordered table-hover text-center">

    <?php
    $produtos = listaProdutos($conexao);
    ?>
    <thead>
        <tr class = "active">
            <th>Produto</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Situação</th>
            <th></th>
        </tr>
    </thead>
    <?php
    foreach ($produtos as $produto):
        ?>
        <tbody>
            <tr class="success">
                <td><?= $produto['nome'] ?></td>
                <td><?= $produto['preco'] ?></td> 
                <td><?= substr($produto['descricao'], 0, 40) ?></td> 
                <td><?= $produto['categoria_nome'] ?></td> 
                <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
                <td>
                    <form action="remove-produto.php" method="post">
                        <input type="hidden" name="id" value="<?=$produto['id']?>"/>
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php
    endforeach;
    ?>
</table>

<?php include("rodape.php") ?>
