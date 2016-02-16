<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);

$categorias = listaCategoria($conexao);

$usado = $produto['usado'] ? "checked='checked'" : "";
?>


<h1>Alterando Produtos</h1>

<form class="form-horizontal" action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>"/>
    <div class="form-group formulario">
        <label for="nome" class="col-xs-2 control-label">Nome</label>
        <div class="col-xs-10">
            <input class="form-control" type="text"  name="nome" value="<?=$produto['nome']?>"/>
        </div>

    </div>

    <div class="form-group">
        <label for="preco" class="col-xs-2 control-label">Preço</label>
        <div class="col-xs-10">
            <input type="number" class="form-control" name="preco" value="<?=$produto['preco']?>"/>
        </div>
    </div>

    <div class="form-group">
        <label for="descricao" class="col-xs-2 control-label">Descrição</label>
        <div class="col-xs-10">
            <textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
        </div>
    </div>
    
    <div class="form-group">
        <label for="usado" class="col-xs-2 control-label">Tipo</label>
        <div class="col-xs-10" style="text-align: left;">
            <input  type="checkbox" name="usado" value="true" <?=$usado?>/>Usado
        </div>
    </div>

    <div class="form-group">
        <label for="categoria" class="col-xs-2 control-label">Categoria</label>
        <div class="col-xs-4">    
            <select class="form-control" name="categoria_id">
                <?php foreach ($categorias as $categoria) : 
                    $essaEhACategoria = $produto['categoria_id'] == $categoria_id['id'];
                    $selecao = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                <option value="<?= $categoria['id'] ?>" <?=$selecao?>><?= $categoria['nome'] ?></option>
                <?php endforeach ?>
            </select>                             
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <input type="submit" class="form-control btn btn-primary" value="Alterar" />
        </div>
    </div>

</form>

<?php include("rodape.php") ?>