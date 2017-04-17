
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
		<nav>
			<div class="container">
				<div class="col-md-6 col-xs-6 logo">
					<img src="../imagens/logoFappUni9.png" alt="Logo da fábrica de app" title="Logo Fábrica de APP UNINOVE">
				</div>
				<div class="col-md-6 col-xs-6 menu">
					<ul>
						<li class="dropdown"><a data-toggle="dropdown"><i class="fa fa-bell" aria-hidden="true"></i></a>
							<div class="dropdown-menu notificacoes-menu">
								<center><h4>Notificações</h4></center>
								<ul>
									<li><a title="Notificação"><img src="../imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Hackaton</a></li>
									<li><a title="Notificação"><img src="../imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Aniversário da Fábrica</a></li>
									<li><a title="Notificação"><img src="../imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Inscrições abertas</a></li>
									<li><a title="Notificação"><img src="../imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Novos projetos</a></li>
									<li><a title="Notificação"><img src="../imagens/android-studio-.png" height="30px">&nbsp;&nbsp;Novas tecnologias</a></li>
								</ul>
								<center><h4><a title="Ver mais notificações">Ver mais notificações</a></h4></center>
							</div>
						</li>
						<li class="dropdown">
							<img src="../imagens/alunos/biancaarantes.jpg" class="img-circle" alt="Aluno da Fábrica" title="Clique para ver as opções" height="30px">&nbsp;&nbsp;Bianca Arantes&nbsp;&nbsp;<a data-toggle="dropdown"><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="../aluno/minhaconta.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Minha Conta</a></li>
                                                                <li><a href="../aluno/depoimentos.php"><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Depoimento</a></li>
                                                                <li><a href="../aluno/horarios.php" title="Preencher planilha de horários"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;Horário</a></li>
								<li><a title="Sair"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Sair</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section id="conteudo-depoimentos">
		<div class="container">
			<h1><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;Depoimento</h1>
			<div class="border-dotted"></div>
			<div class="row">
				<div class="col-md-12 aviso">
					<center><p>Caro Aluno(a), você só poderá ter um depoimento, mas pode editá-lo ou exclui-lo</p></center>
				</div>
			</div>
			<div class="row">
				<table class="table table-bordered">
					<tr>
						<th>Depoimento</th>
						<th>Data de criação</th>
						<th>Data de atualização</th>
						<th>Ação</th>
					</tr>
					<tr>
						<td>Teste</td>
						<td>26/03/2017</td>
						<td>-</td>
						<td><a class="excluir-depoimento" title="Excluir Depoimento"><i class='fa fa-times' style='color:red;' aria-hidden='true'></i></a>&nbsp;&nbsp;<a class="editardepoimento" title="Editar Depoimento"><i class="fa fa-pencil" style="color:yellow;" aria-hidden="true"></i></a></td>
					</tr>
				</table>
			</div>
			<div class="edit-depoimento">
				<div class="row">
					<div class="col-md-12 textarea">
						<textarea name="depoimento" class="form-control">Depoimento aqui</textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 botaosalvar">
						<a class="btn btn-default salvar"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<?php require_once '../footer.php';?>
</body>
</html>
<script src="../js/jquery.js"></script>
<script src="../css/bootstrap/js/bootstrap.js"></script>
<script>
	$(".editardepoimento").click(function(){
		
		$(".edit-depoimento").css({"display":"block"});
	});
</script>