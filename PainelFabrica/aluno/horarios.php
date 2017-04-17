
</!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/awe/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/awe/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../css/estilo.css">
	<title>Painel Fábrica</title>
</head>
<body>
	<header id="header">
		<!--<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand" href="#">TopCasaFina</a>
				 </div>
				 
				<div class="collapse navbar-collapse" id="collapse-navbar">
					<ul class="nav navbar-collapse">
						<li><a href="#depoimentos">Sobre nós</a></li>
						<li><a href="#sobre-nos">Sobre nós</a></li>
						<li><a href="#sobre-nos">Sobre nós</a></li>
						<li><a href="#sobre-nos">Sobre nós</a></li>
					</ul>
				</div>
			</div>
			
		</nav>-->
                <?php require_once '../menu.php';?>
	</header>
	<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Planilha de Horas</h1>
			<div class="border-dotted"></div>
			<div class="row">
				<table class="table table-bordered">
					<tr>
						<th>Data</th>
						<th>Dia da semana</th>
						<th>Descrição</th>
						<th>Hora inicial</th>
						<th>Hora final</th>
						<th>Total de horas</th>
					</tr>
					<tr>
						<td>25/03/2017</td>
						<td>Sábado</td>
						<td>Planejamento das tarefas e criação de UC e protótipos para o site</td>
						<td>8:00</td>
						<td>12:00</td>
						<td>4:00</td>
					</tr>
				</table>
			</div>
		</div>

	</section>
	<?php require_once '../footer.php';?>
</body>
</html>
<script src="../js/jquery.js"></script>
<script src="../css/bootstrap/js/bootstrap.js"></script>
