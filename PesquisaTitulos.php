<!DOCTYPE html>
<head>
	<title>Pesquisa de títulos</title>
</head>

<?php
include ("Cabecalho.html")
?>

<section layout:fragment="conteudo">
	<div layout:insert="MensagemGeral"></div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="clearfix">
				<h1 class="panel-title sml-titulo-panel">Pesquisa títulos</h1>
				<a class="btn btnlink sml-link-panel" href="/index.php">Novo título </a>
			</div>
		</div>
		<div class="table-responsive">
			<div class="panel-body">
				<form method="GET" class="form-horizontal" th:action="@{/titulos}" th:object="${filtro}">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-4">
								<div class="input-group">
									<input class="form-control" placeholder="Qual título você esta procurando?"
										autofocus="autofocus" th:field="*{descricao}"></input> <span
										class="input-group-btn">
										<button type="submit" class="btn btn-default">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</form>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th class="text-center col-md-1">#</th>
							<th>Descrição</th>
							<th class="text-center col-md-2">Data de vencimento</th>
							<th class="text-right col-md-2">Valor</th>
							<th class="text-center col-md-2">Status</th>
							<th class="text-center col-md-1">Ação</th>
							<!--  <th class=" col-md-1"></th>  -->
						</tr>
					</thead>
					<tbody>
						<tr th:each="titulo : ${titulos}">
							<td class="text-center" th:text="${titulo.codigo}">1</td>
							<td th:text="${titulo.descricao}"></td>
							<td class="text-center" th:text="${{titulo.dataVencimento}}"></td>
							<td class="text-right" th:text="|R$ ${{titulo.valor}}|"></td>
							<td class="text-center" th:attr="data-role=${titulo.codigo}">
								<!--tag td que identifica o codigo do titulo para atualizar via ajax apenas o status ao clicar no botão de atualizar status-->
								<span class="label" th:text="${titulo.status.descricao}"
									th:classappend="${(titulo.pendente ? 'label-warning' : titulo.cancelado ? 'label-danger':'label-success') }">
									<!-- th:classappend="${(titulo.pendente ? 'label-warning' : titulo.cancelado ? 'label-danger' : 'label-success') }" > ou -->
									<!-- <td th:if="${shop.shopId == order.shopId}"><a th:text="${shop.shopName}" th:href="'/shops/'+${shop.shopId}">Bling</a></td>
									<td th:if="${objeto.atributo =='algo'}"> Alguma coisa aqui </td> -->
								</span>
							</td>
							<td class="text-center"><a class="btn btn-link btn-xs"
									th:href="@{/titulos/{codigo}(codigo=${titulo.codigo})}" title="Editar" rel="tooltip"
									data-placemnt="top">
									<!--  th:href="@{/titulos/{codigo}(codigo=${titulo})}"-->
									<span class="glyphicon glyphicon-pencil"></span>
								</a> <a class="btn btn-link btn-xs" data-toggle="modal"
									data-target="#confirmacaoExclusaoModal"
									th:attr="data-codigo=${titulo.codigo}, data-descricao=${titulo.descricao}"
									title="Excluir" rel="tooltip" data-placemnt="top"> <span
										class="glyphicon glyphicon-floppy-remove"> </span>
								</a> <a class="btn btn-link btn-xs js-atualizar-status" th:if="${titulo.pendente}"
									title="Receber" rel="tooltip" data-placemnt="top"
									th:attr="data-codigo=${titulo.codigo}"
									th:href="@{/titulos/{codigo}/receber(codigo=${titulo.codigo})}">

									<span class="glyphicon glyphicon-check"></span>
								</a></td>
						</tr>
						<tr>
							<td colspan="6" th:if="${#lists.isEmpty(titulos)}">Nenhum
								título foi encontrado</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div layout:insert="DialogoConfirmacaoExclusao"></div>
	</div>
</section>

	<script src="/JS/jquery-3.4.1.min.js"></script>
	<script src="/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	<script src="/JS/bootstrap-datepicker.min.js"></script>
	<script src="/JS/bootstrap-datepicker.pt-BR.min.js"></script>
	<script src="/JS/jquery.maskMoney.min.js"></script>
	<script src="/JS/cobranca.js"></script>
</html>