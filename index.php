
<!DOCTYPE html>
<head>
<title>Cadastro de título</title>
</head>
<body>

<?php
include ("Cabecalho.html")
?>

<section layout:fragment="conteudo">
	<form class="form-horizontal" method="POST">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="clearfix">
					<h1 class="panel-title sml-titulo-panel">Novo título</h1>
					<a class="btn btnlink sml-link-panel" href="/PesquisaTitulos.php">Voltar
						para pesqusisa</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group" >
					<label
						for="descricao" class="col-sm-2 controle-label">Descrição
					</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="descricao" />
					</div>
				</div>
				<div class="form-group" >
					<label for="dataVencimento" class="col-sm-2 controle-label">Data de Vencimento
				    </label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="dataVencimento"
							data-provide="datepicker"
							data-date-format="dd/mm/yyyy" data-date-language="pt-BR"
							data-date-autoclose="true" data-date-today-highlight="true"
							data-date-orientation="bottom" />
					</div>
				</div>
				<div class="form-group">
					<label for="valor" class="col-sm-2 controle-label">Valor</label>
					<div class="col-sm-2">
						<input type="text" class="form-control js-currency"  id="valor" />
					</div>
				</div>
				<div class="form-group">
					<label for="status" class="col-sm-2 controle-label">Status</label>
					<div class="col-sm-2">
						<select class="form-controle" name="status" > 
							<option each="status : ${todosStatusTitulo"
								value="status" text="descricao"></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn-primary">Salvar</button>
					</div>
				</div>
			</div>
		</div>
	</form>



	
	
    <script src="/JS/jquery-3.4.1.min.js"></script>
	<script src="/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	<script src="/JS/bootstrap-datepicker.min.js"></script>
	<script src="/JS/bootstrap-datepicker.pt-BR.min.js"></script>
	<script src="/JS/jquery.maskMoney.min.js"></script>
	<script src="/JS/cobranca.js"></script>

	</section>
</body>
</html>