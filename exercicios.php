<?php 
	$tipo = $_GET['tipo'];
	$materia = $_GET['mat'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $materia; ?> Exercícios (1° Bimestre)</title>
<link rel="icon" href="images/logo.png"">
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/jquery.slidertron-1.3.js"></script>
<link href="css/default2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="index.php"><img src="images/logo.png" width="180px" height="80px"/></a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php" accesskey="1" title="">Início</a></li>
				<li><a href="#" accesskey="2" title="">Ajuda</a></li>
				<li><a href="#" accesskey="3" title="">Ementa</a></li>
			</ul>
		</div>
	</div>
</div>

<div id="banner-wrapper">
	<div id="banner" class="container">
			<h1><?php echo $materia; ?> - Exercícios</h1>
			<h2>(1° Bimestre)</h2>
			<h3></h3>
	</div>
</div>
<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="container">
		
			<a href="#">
			<div class="column1"><img src="images/lista.png"/>
				<div class="title">
					<h2><b>Exercício 01</b></h2>
				</div>
			</a>
			</div>	
		</div>	

	</div>
</div>
<div id="copyright">
	<p>&copy; 2017 - Todos os Direitos e Marcas Reservados.</p>
	<div id="link">
		<a href="http://portal.ifrn.edu.br" target="blank" title="portal IFRN">
			<img id="ifrn" src="images/ifrn.png" width="50px" height="50px"/>
		</a>
		<a href="http://www.gmail.com" target="blank" title="Gmail">
			<img id="gmail" src="images/gmail.png" width="50px" height="50px"/>
		</a>
		<a href="https://suap.ifrn.edu.br/accounts/login/?next=/" target="blank" title="Suap">
			<img id="Suap" src="images/suap.png" width="50px" height="50px"/>
		</a>
	</div>
</div>
</body>
</html>
