<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php
    include("../Cabecalho.html")
    ?>
    <form action="autentica.php" method="POST" class="form-horizontal">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="clearfix">
                    <h1 class="panel-title sml-titulo-panel">Login</h1>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="email" class="col-sm-1 controle-label">Email
                    </label>
                    <div class="col-sm-4">
                        <input type="emial" class="form-control" id="email" name="email" />
                    </div>
                </div>
                <br>
                <div class="form-group">
					<label
						for="senha" class="col-sm-1 controle-label">Senha
					</label>
					<div class="col-sm-4">
						<input type="senha" class="form-control" name="senha" required id="senha" valeu="Fazer login" />
					</div>
				</div>
                <br>
                <div class="col-sm-offset-1 col-sm-10">
                <!--<button type="submit" class="btn-primary">Salvar</button> -->
                <input type="submit" class="btn-primary" value="Fazer login" />
                </div>

    </form>
</body>

</html>