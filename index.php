<?php include("cabecalho.php"); ?>

<?php
if(isset($_GET["login"]) && $_GET["login"] == true){
?>
<p class="alert-success">Logado com Sucesso!</p>
<?php 
}
?>

<?php
if(isset($_GET["login"]) && $_GET["login"] == false){
?>
<p class="alert-danger">Usuario ou Senha inválido!!</p>
<?php
}
?>

<h1>Bem vindo!</h1>

        <form class="form-horizontal" action="login.php" method="post" id="form_login">
            <div class="row">

                <div class="form-group-lg">
                    <div>
                        <label class="sr-only" id="email" for="email">Email</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="autofocus">
                    </div>
                </div>

                <div class="form-group-lg">
                    <div>
                        <label class="sr-only" for="senha">Senha</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" id="div_input">
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required="autofocus">
                    </div>
                </div>

                <div class="row form-group-lg" id="div_input">
                    <div class="col-xs-offset-4 col-xs-4 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 text-left">
                        <button class="btn btn-primary" type="submit">Logar</button>
                    </div>
                </div>  
            </div>
        </form>

    </div>
</section>
<?php include("rodape.php") ?>
