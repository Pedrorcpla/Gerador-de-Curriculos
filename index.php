<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gerador de Currículos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<style type="text/css">
	.topo{
		padding-top: 1%;
		padding-bottom: 1%;
		text-align: center;
	}
	img{
		height: 30vh;
	}
	.foto{
		margin-top: 5%;
	}
	.foto2{
		margin-top: 3%;
		margin-bottom: 3%;
	}
	.borda{
	border-bottom-style: dashed;
	}
	.container{
		margin-top: 6%;
	}
</style>
<body class="bg-light">
<div class="row bg-danger text-white topo fixed-top">
	<div class="col-lg-12">
		<h1><i class="fab fa-wpforms"></i> Gerador de Currículos Online</h1>
	</div>
</div>
<div class="col-lg-10 offset-lg-1 bg-white container">
	<br>

<!--Área PHP-->
	<?php 
	if($_POST){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$site = $_POST['site'];
		$endereco = $_POST['endereco'];

		$cargo = mb_strtoupper($_POST['cargo']);
		$objetivo = $_POST['objetivo'];

		$escolaridade = $_POST['escolaridade'];
		$escola = $_POST['escola'];
		$dataFormacao = $_POST['dataFormacao'];
		$premiacoes = $_POST['premiacoes'];

		$formacao = $_POST['formacao'];
		$facul = $_POST['facul'];
		$tempoCurso = $_POST['tempoCurso'];
		$mencoes = $_POST['mencoes'];

		$referencia1 = $_POST['referencia1'];
		$refernciaCargo1 = $_POST['referenciaCargo1'];
		$referenciaTelefone1 = $_POST['referenciaTelefone1'];

		$referencia2 = $_POST['referencia2'];
		$referenciaCargo2 = $_POST['referenciaCargo2'];
		$referenciaTelefone2 = $_POST['referenciaTelefone2'];

		$funcaoExperiencia1 = $_POST['funcaoExperiencia1'];
		$localExperiencia1 = $_POST['localExperiencia1'];
		$descExperiencia1 = $_POST['descExperiencia1'];
		$dataExperiencia1 = $_POST['dataExperiencia1'];

		$funcaoExperiencia2 = $_POST['funcaoExperiencia2'];
		$localExperiencia2 = $_POST['localExperiencia2'];
		$descExperiencia2 = $_POST['descExperiencia2'];
		$dataExperiencia2 = $_POST['dataExperiencia2'];

		$funcaoExperiencia3 = $_POST['funcaoExperiencia3'];
		$localExperiencia3 = $_POST['localExperiencia3'];
		$descExperiencia3 = $_POST['descExperiencia3'];
		$dataExperiencia3 = $_POST['dataExperiencia3'];

		$funcaoExperiencia4 = $_POST['funcaoExperiencia4'];
		$localExperiencia4 = $_POST['localExperiencia4'];
		$descExperiencia4 = $_POST['descExperiencia4'];
		$dataExperiencia4 = $_POST['dataExperiencia4'];

		$habilidade1 = $_POST['habilidade1'];
		$nivelHabilidade1 = $_POST['nivelHabilidade1'];
		$habilidade2 = $_POST['habilidade2'];
		$nivelHabilidade2 = $_POST['nivelHabilidade2'];
		$habilidade3 = $_POST['habilidade3'];
		$nivelHabilidade3 = $_POST['nivelHabilidade3'];
		$habilidade4 = $_POST['habilidade4'];
		$nivelHabilidade4 = $_POST['nivelHabilidade4'];
		$habilidade5 = $_POST['habilidade5'];
		$nivelHabilidade5 = $_POST['nivelHabilidade5'];
		$habilidade6 = $_POST['habilidade6'];
		$nivelHabilidade6 = $_POST['nivelHabilidade6'];

		if(isset($_FILES['foto']))
			 {
			    $ext = strtolower(substr($_FILES['foto']['name'],-4));
			    $new_name = $_POST['nome'].$ext;
			    $dir = 'imagens/';
			 
			    move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);
			 }


		$a = "$email.html";
		$arquivo = fopen($a, 'a+');

		$html = '<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
					<title>Seu Currículo</title>
					<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
					<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
				</head>
				<style type="text/css">
				.left{
					align-items: right;
					text-align: right; 
					margin-right: 2%;
					margin-left: 5%;
				}
				.corpo{
					margin-top: 5%;
				}
				img{
					height: 26vh;
					margin-bottom: 1.5%;
				}
				.texto{
					font-size: 18px;
				}
				.borda{
					border-bottom-style: dashed;
				}
				</style>
				<body>
				<div class="container">
					<div class="row corpo">
						<!--Esquerda-->
						<div class="col-lg-4 left">
							<!--FOTO PERFIL-->
							<img src="'.$dir.$new_name.'" class="image">
						</div>
						<div class="col-lg-7">
							<!--NOME-->
							<h1 class="text-danger"><strong>'.mb_strtoupper($nome).'</strong></h1>
							<br>
							<!--PROFISSÃO-->
							<h3 class="border-bottom border-dark border-5"><strong><em>'.$cargo.'</em></strong></h3>
						</div>
					</div>
					<div class="row">
						<!--Esquerda-->
						<div class="col-lg-4 left borda">
							<h2><strong>CONTATO</strong></h2>
							<br>
							<!--EMAIL-->
							<h5>'.$email.' <i class="fas fa-envelope"></i></h5>
							<!--TELEFONE-->
							<h5>'.$telefone.' <i class="fas fa-phone-square-alt"></i></h5>
							<!--SITE PESSOAL-->
							<h5>'.$site.' <i class="fas fa-desktop"></i></h5>
							<!--ENDEREÇO-->
							<h5>'.$endereco.' <i class="fas fa-map-marker-alt"></i></h5>
							<br>
						</div>

						<!--Direita-->
						<div class="col-lg-7 borda">
							<h2><strong>OBJETIVO</strong></h2>
							<br>
							<!--OBJETIVO-->
							<p class="texto">'.$objetivo.'</p>
							<br>
							<br>
						</div>
					</div>
					<div class="row">
						<!--Esquerda-->
						<div class="col-lg-4 left">
							<div class="borda">
							<br>
							<h2><strong>FORMAÇÃO</strong></h2>
							<br>
							<!--FORMAÇÃO-->
							<h5 class="text-danger"><em><strong>'.$formacao.'</strong></em></h5>
							<!--FACULDADE-->
							<h5>'.$facul.'</h5>
							<!--PERIODO DO CURSO-->
							<p>'.$tempoCurso.'</p>
							<!--MENÇÕES E PREMIAÇÕES-->
							<p>'.$mencoes.'</p>
							<br>
							<!--ESCOLAR-->
							<h5 class="text-danger"><em><strong>'.$escolaridade.'</strong></em></h5>
							<!--ESCOLA-->
							<h5>'.$escola.'</h5>
							<!--PERIODO DO ESCOLAR-->
							<p>'.$dataFormacao.'</p>
							<!--MENÇÕES E PREMIAÇÕES-->
							<p>'.$premiacoes.'</p>
							</div>

							<div class="borda">
							<br>
							<h2><strong>REFERÊNCIAS</strong></h2>
							<br>
							<!--REFENRECIAS-->
							<h5 class="text-danger"><em><strong>'.$referencia1.'</strong></em></h5>
							<!--CARGO-->
							<h5>'.$funcaoExperiencia1.'</h5>
							<!--CONTATO-->
							<p>'.$referenciaTelefone1.'</p>

							<br>
							<!--REFENRECIAS 2-->
							<h5 class="text-danger"><em><strong>'.$referencia2.'</strong></em></h5>
							<!--CARGO-->
							<h5>'.$funcaoExperiencia2.'</h5>
							<!--CONTATO-->
							<p>'.$referenciaTelefone2.'</p>
							</div>
						</div>

						<!--Direita-->
						<div class="col-lg-7">
							<div class="borda">
							<br>
							<h2><strong>EXPERIÊNCIAS</strong></h2>
							<br>
							<!--FUNÇÃO-->
							<h5 class="text-danger"><em><strong>'.$funcaoExperiencia1.'</strong></em></h5>
							<!--LOCAL-->
							<h5>'.$localExperiencia1.'</h5>
							<!--DESCRIÇÃO DA ÁREA-->
							<p>'.$descExperiencia1.'</p>
							<!--TEMPO EMPREGADO-->
							<p>'.$dataExperiencia1.'</p>
							<br>

							<!--FUNÇÃO-->
							<h5 class="text-danger"><em><strong>'.$funcaoExperiencia2.'</strong></em></h5>
							<!--LOCAL-->
							<h5>'.$localExperiencia2.'</h5>
							<!--DESCRIÇÃO DA ÁREA-->
							<p>'.$descExperiencia2.'</p>
							<!--TEMPO EMPREGADO-->
							<p>'.$dataExperiencia2.'</p>
							<br>

							<!--FUNÇÃO-->
							<h5 class="text-danger"><em><strong>'.$funcaoExperiencia3.'</strong></em></h5>
							<!--LOCAL-->
							<h5>'.$localExperiencia3.'</h5>
							<!--DESCRIÇÃO DA ÁREA-->
							<p>'.$descExperiencia3.'</p>
							<!--TEMPO EMPREGADO-->
							<p>'.$descExperiencia3.'</p>
							<br>

							<!--FUNÇÃO-->
							<h5 class="text-danger"><em><strong>'.$funcaoExperiencia4.'</strong></em></h5>
							<!--LOCAL-->
							<h5>'.$localExperiencia4.'</h5>
							<!--DESCRIÇÃO DA ÁREA-->
							<p>'.$descExperiencia4.'</p>
							<!--TEMPO EMPREGADO-->
							<p>'.$dataExperiencia4.'</p>
							</div>

							<br>
							<h2><strong>HABILIDADES</strong></h2>
							<br>
							<!--HABILIDADE-->
							<label for="habilidade1" class="form-label col-lg-6"><h5><em><strong>'.$habilidade1.'</strong></em></h5></label>
							<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="habilidade1" value="'.$nivelHabilidade1.'" disabled>
							<br>
							<p class="col-lg-11 offset-lg-1 text-primary" align="center">'.$nivelHabilidade1.'</p>

							<label for="habilidade2" class="form-label col-lg-6"><h5><em><strong>'.$habilidade2.'</strong></em></h5></label>
							<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="habilidade2" value="'.$nivelHabilidade2.'" disabled>
							<br>
							<p class="col-lg-11 offset-lg-1 text-primary" align="center">'.$nivelHabilidade2.'</p>

							<label for="habilidade3" class="form-label col-lg-6"><h5><em><strong>'.$habilidade3.'</strong></em></h5></label>
							<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="habilidade4" value="'.$nivelHabilidade3.'" disabled>
							<br>
							<p class="col-lg-11 offset-lg-1 text-primary" align="center">'.$nivelHabilidade3.'</p>

							<label for="habilidade4" class="form-label col-lg-6"><h5><em><strong>'.$habilidade4.'</strong></em></h5></label>
							<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="habilidade4" value="'.$nivelHabilidade4.'" disabled>
							<br>
							<p class="col-lg-11 offset-lg-1 text-primary" align="center">'.$nivelHabilidade4.'</p>

							<label for="habilidade5" class="form-label col-lg-6"><h5><em><strong>'.$habilidade5.'</strong></em></h5></label>
							<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="habilidade5" value="'.$nivelHabilidade5.'" disabled>
							<br>
							<p id="resultado5" class="col-lg-11 offset-lg-1 text-primary" align="center">'.$nivelHabilidade5.'</p>

							<label for="habilidade6" class="form-label col-lg-6"><h5><em><strong>'.$habilidade6.'</strong></em></h5></label>
							<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="habilidade6" value="'.$nivelHabilidade6.'" disabled>
							<br>
							<p class="col-lg-11 offset-lg-1 text-primary" align="center">'.$nivelHabilidade6.'</p>

							<br><br>
						</div>
					</div>
					<br><br>
				</div>
				</body>
				</html>';

		fwrite($arquivo, $html);

		fclose($arquivo);

		echo "<div class='col-lg-12' align='center'><h1 class='text-seccess'> Currículo salvo com sucesso!</h1></div>";
	  echo "<div class='col-lg-12' align='center'><a href='".$a."' class='btn btn-primary' download>Baixe aqui seu Currículo </a></div><br>";
	}
	?>

	<div class="col-lg-10 offset-lg-1 border-bottom border-primary" align="center">
		<h3>DADOS PESSOAIS</h3>
	</div>
	<br>
<form method="POST" enctype="multipart/form-data">
	<div class="col-lg-12">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" class="form-control col-lg-10" id="nome" required>
	</div>
	<div class="row">
		<div class="col-lg-9">
			<label for="img" class="foto">Foto de Perfil:</label>
	  		<input type="file" name="foto" accept="image/*" class="form-control" id="img">
	  		<br>
	  	</div>
 	</div>
 	<br>
 	<!--AREA CONTATO-->
	<div class="col-lg-10 offset-lg-1 border-bottom border-primary" align="center">
		<h3>DADOS DE CONTATO</h3>
	</div>
 	<br>
 	<div class="row">
 		<div class="col-lg-6">
	 		<label for="email">Email:</label>
	 		<input type="email" name="email" class="form-control" id="email" required>
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="telefone">Telefone:</label>
	 		<input type="text" name="telefone" class="form-control" id="telefone" required>
	 	</div>
 	</div>
 	<div class="row">
 		<div class="col-lg-6">
	 		<label for="site">Site Pessoal:</label>
	 		<input type="url" name="site" class="form-control" id="site">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="endereco">Endereço:</label>
	 		<input type="text" name="endereco" class="form-control" id="endereco" required>
	 	</div>
 	</div>
 	<br>

 	<!--OBJETIVOS-->
 	<div class="col-lg-10 offset-lg-1 border-bottom border-primary" align="center">
		<h3>OBJETIVOS</h3>
	</div>
 	<br>
 	<div class="row">
 		<div class="col-lg-12">
 			<label for="cargo">Qual o cargo desejado?</label>
 			<input type="text" name="cargo" id="cargo" class="form-control" required>

	 		<label for="objetivo">Qual o seu objetivo na empresa?</label>
	 		<button type="button" class="btn btn-white text-danger" data-bs-toggle="modal" data-bs-target="#objetivosProfissionais"><strong>Veja aqui alguns exemplos prontos de Objetivos Profissionais para copiar.</strong></button>
	 		<textarea type="text" rows="5" name="objetivo" class="form-control" id="objetivo" required></textarea>
	 	</div>
 	</div>
 	<br>

 	<!--FORMAÇÕES-->
 	<div class="col-lg-10 offset-lg-1 border-bottom border-primary" align="center">
		<h3>FORMAÇÕES</h3>
	</div>
 	<br>

 	<!--ESCOLARIDADE-->
 	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h4 class="text-danger">Escolaridade</h4>
 		</div>
 	</div>
 	<br>
 	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="instrução">Qual o seu grau de instrução?</label>
	 		<select class="form-select" name="escolaridade" aria-label="" id="instrução" required>
			  <option selected>Escolha uma opção...</option>
			  <option value="Ensino Fundamental 1">Ensino Fundamental 1</option>
			  <option value="Ensino Funamental 2">Ensino Funamental 2</option>
			  <option value="Ensino Médio">Ensino Médio</option>
			</select>
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="escola">Em qual escola você se formou?</label>
	 		<input type="text" name="escola" id="escola" class="form-control" required>
	 	</div>
	</div>
	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="dataFormacao">Qual a data de formação?</label>
	 		<input type="date" name="dataFormacao" id="dataFormacao" class="form-control" required>
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="primiacoes">Informe as meções/premiações que você recebeu:</label>
	 		<input type="text" name="premiacoes" id="premiacoes" class="form-control">
	 	</div>
	</div>
	<br>

	<!--FACULDADE-->
	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h4 class="text-danger">Faculdade</h4>
 		</div>
 	</div>
 	<br>
 	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="formacao">Qual a sua formação?</label>
	 		<input type="text" name="formacao" id="formacao" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="facul">Em qual unidade você se formou?</label>
	 		<input type="text" name="facul" id="facul" class="form-control">
	 	</div>
	</div>
	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="tempoCurso">Quanto tempo de curso?</label>
	 		<input type="text" name="tempoCurso" id="tempoCurso" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="mencoes">Informe as menções/premiações que você recebeu:</label>
	 		<input type="text" name="mencoes" id="mencoes" class="form-control">
	 	</div>
	</div>
	<br>

	<!--REFERENCIAS-->
 	<div class="col-lg-10 offset-lg-1 border-bottom border-primary" align="center">
		<h3>REFERÊNCIAS PESSOAIS</h3>
	</div>
 	<br>	 	
 	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h4 class="text-danger">Informe duas pessoas </h4>
 		</div>
 	</div>
 	<div class="col-lg-12">
	 	<label for="referencia1">Nome:</label>
	 	<input type="text" name="referencia1" id="referencia1" class="form-control" required>
	</div>
 	<div class="col-lg-12">
		<label for="referenciaCargo1">Cargo e Unidade:</label>
	 	<input type="text" name="referenciaCargo1" id="referenciaCargo1" class="form-control" required>
 	</div>
 	<div class="col-lg-12">
		<label for="referenciaTelefone1">Telefone:</label>
	 	<input type="text" name="referenciaTelefone1" id="referenciaTelefone1" class="form-control" required>
 	</div>
 	<br>
 	<div class="col-lg-12">
	 	<label for="referencia2">Nome:</label>
	 	<input type="text" name="referencia2" id="referencia2" class="form-control" required>
	</div>
 	<div class="col-lg-12">
		<label for="referenciaCargo2">Cargo e Unidade:</label>
	 	<input type="text" name="referenciaCargo2" id="referenciaCargo2" class="form-control" required>
 	</div>
 	<div class="col-lg-12">
		<label for="referenciaTelefone2">Telefone:</label>
	 	<input type="text" name="referenciaTelefone2" id="referenciaTelefone2" class="form-control" required>
 	</div>
 	<br>

 	<!--EXPERIÊNCIAS-->
 	<div class="col-lg-10 offset-lg-1 border-bottom border-primary" align="center">
		<h3>EXPERIÊNCIAS</h3>
	</div>
 	<br>
 	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h4 class="text-danger">Informe suas últimas 4 experiências</h4>
 		</div>
 	</div>
 	<br>
 	<!--EXPERIENCIA 1-->
 	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h5 class="border-bottom">Experiência 1</h5>
 		</div>
 	</div>
 	<br>
 	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="funcaoExperiencia1">Qual a sua função?</label>
	 		<input type="text" name="funcaoExperiencia1" id="funcaoExperiencia1" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="localExperiencia1">Qual o local de trabalho?</label>
	 		<input type="text" name="localExperiencia1" id="localExperiencia1" class="form-control">
	 	</div>
	</div>
	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="descExperiencia1">Breve descrição de serviço:</label>
	 		<input type="text" name="descExperiencia1" id="descExperiencia1" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="dataExperiencia1">Ano de entrada e ano de saída:</label>
	 		<input type="text" name="dataExperiencia1" id="dataExperiencia1" class="form-control">
	 	</div>
	</div>
	<br>
	<!--EXPERIENCIA 2-->
	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h5 class="border-bottom">Experiência 2</h5>
 		</div>
 	</div>
 	<br>
 	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="funcaoExperiencia2">Qual a sua função?</label>
	 		<input type="text" name="funcaoExperiencia2" id="funcaoExperiencia2" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="localExperiencia2">Qual o local de trabalho?</label>
	 		<input type="text" name="localExperiencia2" id="localExperiencia2" class="form-control">
	 	</div>
	</div>
	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="descExperiencia2">Breve descrição de serviço:</label>
	 		<input type="text" name="descExperiencia2" id="descExperiencia2" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="dataExperiencia2">Ano de entrada e ano de saída:</label>
	 		<input type="text" name="dataExperiencia2" id="dataExperiencia2" class="form-control">
	 	</div>
	</div>
	<br>
	<!--EXPERIENCIA 3-->
	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h5 class="border-bottom">Experiência 3</h5>
 		</div>
 	</div>
 	<br>
 	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="funcaoExperiencia3">Qual a sua função?</label>
	 		<input type="text" name="funcaoExperiencia3" id="funcaoExperiencia3" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="localExperiencia3">Qual o local de trabalho?</label>
	 		<input type="text" name="localExperiencia3" id="localExperiencia3" class="form-control">
	 	</div>
	</div>
	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="descExperiencia3">Breve descrição de serviço:</label>
	 		<input type="text" name="descExperiencia3" id="descExperiencia3" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="dataExperiencia3">Ano de entrada e ano de saída:</label>
	 		<input type="text" name="dataExperiencia3" id="dataExperiencia3" class="form-control">
	 	</div>
	</div>
	<br>
	<!--EXPERIENCIA 4-->
	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h5 class="border-bottom">Experiência 4</h5>
 		</div>
 	</div>
 	<br>
 	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="funcaoExperiencia4">Qual a sua função?</label>
	 		<input type="text" name="funcaoExperiencia4" id="funcaoExperiencia4" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="localExperiencia4">Qual o local de trabalho?</label>
	 		<input type="text" name="localExperiencia4" id="localExperiencia4" class="form-control">
	 	</div>
	</div>
	<div class="row">	 	
 		<div class="col-lg-6">
	 		<label for="descExperiencia4">Breve descrição de serviço:</label>
	 		<input type="text" name="descExperiencia4" id="descExperiencia4" class="form-control">
	 	</div>
	 	<div class="col-lg-6">
	 		<label for="dataExperiencia4">Ano de entrada e ano de saída:</label>
	 		<input type="text" name="dataExperiencia4" id="dataExperiencia4" class="form-control">
	 	</div>
	</div>
	<br>

	<!--HABILIDADES-->
	<div class="col-lg-10 offset-lg-1 border-bottom border-primary" align="center">
		<h3>HABILIDADES</h3>
	</div>
 	<br>
 	<div class="row">
 		<div class="col-lg-12" align="center">
 			<h4 class="text-danger">Informe, no máximo, 6 habilidades suas:</h4>
 		</div>
 	</div>
 	<br>

 	<!--HABILIDADE 1-->
 	<div class="row">
 		<div class="col-lg-1">	 	
 			<label>Habilidade:</label>
 		</div>
 		<div class="col-lg-11">
	 		<input type="text" name="habilidade1" id="habilidade1" class="form-control" required>
	 	</div>
 	</div>
 	<div class="row border-bottom">
 		<div class="col-lg-1">
 			Nível:
 		</div>
 		<div class="col-lg-11">
 			<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="nivelHabilidade1" name="nivelHabilidade1">
 		</div>
 		<br>
		<p id="resultado1" class="col-lg-11 offset-lg-1 text-primary" align="center">.</p>
 	</div>

 	<!--HABILIDADE 2-->
 	<br>
 	<div class="row">
 		<div class="col-lg-1">	 	
 			<label >Habilidade:</label>
 		</div>
 		<div class="col-lg-11">
	 		<input type="text" name="habilidade2" id="habilidade2" class="form-control" required>
	 	</div>
 	</div>
 	<div class="row border-bottom">
 		<div class="col-lg-1">
 			Nível:
 		</div>
 		<div class="col-lg-11">
 			<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="nivelHabilidade2" name="nivelHabilidade2">
 		</div>
 		<br>
		<p id="resultado2" class="col-lg-11 offset-lg-1 text-primary"  align="center">.</p>
 	</div>

 	<!--HABILIDADE 3-->
 	<br>
 	<div class="row">
 		<div class="col-lg-1">	 	
 			<label >Habilidade:</label>
 		</div>
 		<div class="col-lg-11">
	 		<input type="text" name="habilidade3" id="habilidade3" class="form-control" required>
	 	</div>
 	</div>
 	<div class="row border-bottom">
 		<div class="col-lg-1">
 			Nível:
 		</div>
 		<div class="col-lg-11">
 			<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="nivelHabilidade3" name="nivelHabilidade3">
 		</div>
 		<br>
		<p id="resultado3" class="col-lg-11 offset-lg-1 text-primary"  align="center">.</p>
 	</div>

 	<!--HABILIDADE 4-->
 	<br>
 	<div class="row">
 		<div class="col-lg-1">	 	
 			<label >Habilidade:</label>
 		</div>
 		<div class="col-lg-11">
	 		<input type="text" name="habilidade4" id="habilidade4" class="form-control" required>
	 	</div>
 	</div>
 	<div class="row border-bottom">
 		<div class="col-lg-1">
 			Nível:
 		</div>
 		<div class="col-lg-11">
 			<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="nivelHabilidade4" name="nivelHabilidade4">
 		</div>
 		<br>
		<p id="resultado4" class="col-lg-11 offset-lg-1 text-primary"  align="center">.</p>
 	</div>

 	<!--HABILIDADE 5-->
 	<br>
 	<div class="row">
 		<div class="col-lg-1">	 	
 			<label >Habilidade:</label>
 		</div>
 		<div class="col-lg-11">
	 		<input type="text" name="habilidade5" id="habilidade5" class="form-control" required>
	 	</div>
 	</div>
 	<div class="row border-bottom">
 		<div class="col-lg-1">
 			Nível:
 		</div>
 		<div class="col-lg-11">
 			<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="nivelHabilidade5" name="nivelHabilidade5">
 		</div>
 		<br>
		<p id="resultado5" class="col-lg-11 offset-lg-1 text-primary"  align="center">.</p>
 	</div>

 	<!--HABILIDADE 6-->
 	<br>
 	<div class="row">
 		<div class="col-lg-1">	 	
 			<label >Habilidade:</label>
 		</div>
 		<div class="col-lg-11">
	 		<input type="text" name="habilidade6" id="habilidade6" class="form-control" required>
	 	</div>
 	</div>
 	<div class="row border-bottom">
 		<div class="col-lg-1">
 			Nível:
 		</div>
 		<div class="col-lg-11">
 			<input type="range" class="form-range col-lg-6" min="0" max="10" step="0.5" id="nivelHabilidade6" name="nivelHabilidade6">
 		</div>
 		<br>
		<p id="resultado6" class="col-lg-11 offset-lg-1 text-primary"  align="center">.</p>
 	</div>
 	<br>
 	<br>

 	<!--Boão Submit-->
 	<div class="row">
 		<div class="col-lg-3 offset-lg-9">
 			<button type="submit" class="btn btn-danger col-lg-10">Enviar Currículo</button>
 		</div>
 	</div>
 	<br>
 	<br>
 	<br>
</form>



</div>



<div class="modal fade" id="objetivosProfissionais" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" align="center">Objetivos Profissionais</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul>
        	<li>A vaga em questão atende a todos os critérios e, através de minha ampla experiência na área, com certeza vou contribuir para os resultados que a empresa almeja alcançar.</li>
			<li>Tenho uma vida profissional pautada em grandes desafios. Por este motivo, acredito que esta é a oportunidade ideal para que eu mostre e desenvolva ainda mais minhas habilidades e competências de liderança e trabalho em equipe.</li>
			<li>Estou em busca de uma oportunidade em minha área de atuação, na qual eu possa crescer e me desenvolver ainda mais no futuro.</li>
			<li>Tenho como objetivo atuar em uma empresa líder de mercado e acredito que minha ampla experiência na área xxx contribuirá para apresentar soluções criativas e inovadoras no mercado.</li>
			<li>Busco novos desafios em minha carreira e desejo continuar me desenvolvendo e contribuindo para a construção de resultados efetivos para os negócios.</li>
			<li>Meu objetivo integrar a equipe de colaboradores de uma empresa em que eu tenha a oportunidade de desenvolver minhas habilidades e competências, para assim, contribuir com o crescimento da organização.</li>
			<li>Sou um profissional em busca de desafios e desenvolvimento constantes, pois acredito que são eles os responsáveis por fazer um indivíduo crescer.</li>
			<li>Busco mudanças em minha vida profissional e encarar novos desafios, que me levem ao crescimento.</li>
			<li>Através de minha ampla experiência na área, quero participar de projetos inovadores e contribuir para o crescimento efetivo dos negócios.</li>
			<li>Meu objetivo é colocar à serviço da empresa toda a minha experiência na área, para assim beneficiar a empresa, bem como meu próprio crescimento profissional.</li>
			<li>Ao atuar nesta área terei a oportunidade de contribuir com a performance da empresa e também de minha carreira.</li>
		</ul>
		<p>Se o seu caso for o de um profissional que está em busca do primeiro emprego, os exemplos abaixo de objetivo para currículo podem ajudá-lo. Confira:</p>
		<ul>
			<li>Em busca de meu primeiro emprego, desejo ocupar esta vaga para que assim eu possa desenvolver o meu potencial e adquirir ainda mais experiência.</li>
			<li>Desejo ocupar esta vaga para colocar em prática todo o aprendizado obtido em meu estágio e assim obter uma oportunidade de efetivação em minha área.</li> 
			<li>Procuro minha primeira oportunidade após formado e desejo contribuir para o sucesso da empresa e ao mesmo tempo desenvolver minhas habilidades e competências.</li>
			<li>Sou um profissional em início de carreira e desejo uma oportunidade para adquirir experiência e ajudar a empresa a alcançar seus objetivos em seu segmento de atuação.</li>
			<li>Meu objetivo é aprender, com rapidez, todas as atribuições relacionadas ao cargo em questão e, dessa maneira, mostrar os resultados que a empresa espera de mim.</li>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script type="text/javascript">


			function range(){
			 let resultado1 = document.getElementById("resultado1");
			 let valor1 = document.getElementById("nivelHabilidade1").value;
			 resultado1.innerHTML = valor1;

			 let resultado2 = document.getElementById("resultado2");
			 let valor2 = document.getElementById("nivelHabilidade2").value;
			 resultado2.innerHTML = valor2;

			 let resultado3 = document.getElementById("resultado3");
			 let valor3 = document.getElementById("nivelHabilidade3").value;
			 resultado3.innerHTML = valor3;

			 let resultado4 = document.getElementById("resultado4");
			 let valor4 = document.getElementById("nivelHabilidade4").value;
			 resultado4.innerHTML = valor4;

			 let resultado5 = document.getElementById("resultado5");
			 let valor5 = document.getElementById("nivelHabilidade5").value;
			 resultado5.innerHTML = valor5;

			 let resultado6 = document.getElementById("resultado6");
			 let valor6 = document.getElementById("nivelHabilidade6").value;
			 resultado6.innerHTML = valor1;
			}

			range()

			document.addEventListener("change", range);
			 
			</script>
</body>
</html>