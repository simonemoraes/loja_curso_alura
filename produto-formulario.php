<?php
include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategoria($conexao);
?>


<h1>Formulário de Cadastro</h1>

<form class="form-horizontal" action="adiciona-produto.php" method="post">
    <div class="form-group formulario">
        <label for="nome" class="col-xs-2 control-label">Nome</label>
        <div class="col-xs-10">
            <input type="text" class="form-control" name="nome"/>
        </div>

    </div>

    <div class="form-group">
        <label for="preco" class="col-xs-2 control-label">Preço</label>
        <div class="col-xs-10">
            <input type="number" class="form-control" name="preco"/>
        </div>
    </div>

    <div class="form-group">
        <label for="descricao" class="col-xs-2 control-label">Descrição</label>
        <div class="col-xs-10">
            <textarea class="form-control" name="descricao"></textarea>
        </div>
    </div>
    
    <div class="form-group">
        <label for="usado" class="col-xs-2 control-label">Tipo</label>
        <div class="col-xs-10" style="text-align: left;">
            <input  type="checkbox" name="usado" value="true"/>Usado
        </div>
    </div>

    <div class="form-group">
        <label for="categoria" class="col-xs-2 control-label">Categoria</label>
        <div class="col-xs-4">    
            <select class="form-control" name="categoria_id">
                <?php foreach ($categorias as $categoria) : ?>
                    <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                <?php endforeach ?>
            </select>                             
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-2">
            <input type="submit" class="form-control btn btn-primary" value="Cadastrar" />
        </div>
    </div>

</form>

<?php include("rodape.php") ?>