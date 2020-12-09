<!-- Processamento das consultas e apresentação dos resultados -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
	<meta name="keywords" content="viagem, dicas de viagem, roteiro, paris, amsterdam, bruxelas, roma, florença"/>
	<meta name="description" content="Dicas e roteiros de viagens, por Cris Oldoni."/>
	<link rel="shortcut icon" type="image/x-icon" href="../imagens/icone-viagem.png"/>
	<title>Consulta</title>
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
	<section id="consulta">
	<p><br/>
		<!-- Processamento da consulta -->
		<?php

			require_once("conexao.php");
			
			$datainicio = $_POST['inicio'];
			$datafinal = $_POST['final'];
			
			$consulta = "SELECT * FROM clientes WHERE (dataatual >= '$datainicio' AND dataatual <= '$datafinal') ORDER BY dataatual"; 
			$busca = mysqli_query($con, $consulta) or die(mysqli_error);
		?>
		<!-- Apresentação dos resultados -->
		<table border="1">
			<tr>
				<td>Nome</td>
				<td>E-mail</td>
				<td>Data de Nasc.</td>
				<td>Telefone</td>
				<td>Cidade</td>
				<td>Estado</td>
				<td>Opção</td>
				<td>Mensagem</td>
				<td>Data de Cad.</td>
			</tr>
			<?php while($dado = $busca->fetch_array()) { ?>
			<tr>
				<td><?php echo $dado["nome"]; ?></td>
				<td><?php echo $dado["email"]; ?></td>
				<td><?php echo date("d/m/Y", strtotime($dado["nasc"])); ?></td>
				<td><?php echo $dado["telefone"]; ?></td>
				<td><?php echo $dado["cidade"]; ?></td>
				<td><?php echo $dado["estado"]; ?></td>
				<td><?php echo $dado["opcao"]; ?></td>
				<td><?php echo $dado["mensagem"]; ?></td>
				<td><?php echo date("d/m/Y", strtotime($dado["dataatual"])); ?></td>
			</tr>
			<?php } ?>
		
		</table>
		
	</p>
	<br/><br/><br/>
	<!-- Retorno para a página de consulta -->
	<a href="../html-forms/consulta.html"><h2>Voltar</h2></a>
	</section>
	
	<footer id="rodape">
		<p>Copyright &copy; 2020 - by Cris Oldoni<br/>
		<a href="http://instagram.com/viagemcomacris" target=_blank>Instagram</a></p>
	</footer>
</div>
</body>
</html>