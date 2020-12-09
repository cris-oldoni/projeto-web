<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
	<meta name="keywords" content="viagem, dicas de viagem, roteiro, paris, amsterdam, bruxelas, roma, florença"/>
	<meta name="description" content="Dicas e roteiros de viagens, por Cris Oldoni."/>
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/icone-viagem.png"/>
	<title>Fale conosco</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
</head>

<body>
<div id="interface">
	<header id="cabecalho">
		<hgroup>
			<h1>Minha viagem</h1><br/>
			<h2>por Cris Oldoni</h2>
		</hgroup>
		<nav id="menu">
			<h1>Menu Principal</h1>
			<ul>
				<li><a href="../index.html" target="_self">Home</a></li>
				<li><a href="../roteiros.html" target="_self">Roteiros</a></li>
				<li><a href="../sobre.html" target="_self">Sobre</a></li>
				<li><a href="../contato.html" target="_self">Contato</a></li>
			</ul>
		</nav>
	</header>
	<section id="dados">
	<p><br/>
		<?php

			require_once("conexao.php");
			
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$nasc = $_POST['nasc'];
			$telefone = $_POST['fone'];
			$cidade = $_POST['cid'];
			$estado = $_POST['est'];
			$opcao = $_POST['pac'];
			$mensagem = $_POST['msg'];
			
			$sql = "INSERT INTO clientes (nome, email, nasc, telefone, cidade, estado, opcao, mensagem, dataatual) 
					VALUES ('$nome', '$email', '$nasc', '$telefone', '$cidade', '$estado', '$opcao', '$mensagem', NOW())";
			$resultado = mysqli_query($con, $sql);
			
			if (!$resultado) {
				echo ("Ocorreu um erro ao enviar os dados.");
			}
			else {
				echo ("Dados enviados com sucesso.");
			}
		?>
	</p>
	<br/><br/><br/>
	<a href="../index.html"><h2>Voltar</h2></a>
	</section>
	
	<footer id="rodape">
		<p>Copyright &copy; 2020 - by Cris Oldoni<br/>
		<a href="http://instagram.com/viagemcomacris" target=_blank>Instagram</a></p>
	</footer>
</div>
</body>
</html>