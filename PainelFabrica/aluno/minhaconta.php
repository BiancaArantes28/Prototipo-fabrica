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
	<section id="conteudo-minhaconta">
		<div class="container">
			<h1><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Minha Conta</h1>
			<div class="border-dotted"></div>
			<div class="row">
				<div class="col-md-6 img-perfil">
					<img src="../imagens/alunos/biancaarantes.jpg" class="img-circle" width="50%"><br>
					<label for="trocar-img"><i class="fa fa-camera" aria-hidden="true"></i>&nbsp;&nbsp;Trocar Imagem</label>
					<input type="file" id="trocar-img">
				</div>
				<div class="col-md-6">
					
					<div class="row">
						<div class="col-md-12">
							
							<div class="input-group border_nome">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-user" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left valida-form tirar-borda" name="nome" id="nome" placeholder="Nome" value="Bianca Arantes">
						      <div class="input-group-addon tirar-bordar-left-ecolor nome_info"></div>
						    </div>
						    <p id="info_nome"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							
						    <select name="campus" id="campus" class="form-control valida-form border_campus">
						    	<option value="">Selecione o campus...</option>
						    	<option value="1">Santo Amaro</option>
						    	<option value="2">Memorial</option>
						    	<option value="3">Vila Prudente</option>
						    </select>
						    <p id="info_campus"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							
							<div class="input-group border_cargo">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-user" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left valida-form tirar-borda" name="cargo" id="cargo" placeholder="Cargo" value="Programadora">
						      <div class="input-group-addon tirar-bordar-left-ecolor cargo_info"></div>
						    </div>
						    <p id="info_cargo"></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="hidden" name="trocou-senha" id="trocou-senha" value="N">
							<input type="button" class="btn btn-primary" id="trocar-senha" value="TROCAR SENHA">
							<div id="mostrar-senha"> 
								<div class="input-group border_senha">
									<div class="input-group-addon tirar-borda-right"><i class="fa fa-lock" aria-hidden="true"></i></div>
									<input type="password" name="senha" id="senha" class="form-control tirar-borda-left valida-form tirar-borda" placeholder="Senha">
									<div class="input-group-addon tirar-bordar-left-ecolor senha_info"></div>
								</div>
								<p id="info_senha"></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-facebook-official" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="facebook" placeholder="Facebook">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-github" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="GitHub" placeholder="GitHub">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="input-group">
						      <div class="input-group-addon tirar-borda-right"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						      <input type="text" class="form-control tirar-borda-left" id="Linkedin" placeholder="Linkedin">
						      
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<a class="btn btn-default salvar"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;&nbsp;SALVAR</a>
						</div>
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
	$("body").on("blur",".valida-form",function(){
		var valor = $(this).val();
		var nome = $(this).attr("name");
		if(valor === ""){
			$(".border_"+nome).css({"border":"1px solid red"});
			$("."+nome+"_info").html("<i class='fa fa-times' style='color:red;' aria-hidden='true'></i>");
			$("#info_"+nome).html("Por favor, preencha o campo acima!");

		}else{
			$(".border_"+nome).css({"border":"1px solid green"});
			$("."+nome+"_info").html("<i class='fa fa-check' style='color:green;' aria-hidden='true'></i>");
			$("#info_"+nome).html("");
		}
	});
	
	$("#trocar-senha").click(function(){
		$("#mostrar-senha").css({"display":"block"});
		$(this).css({"display":"none"});
		$("#trocou-senha").val("S");
	});
</script>