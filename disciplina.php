<?php 
	$tipo = $_GET['tipo'];
	$materia = $_GET['mat'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $materia; ?></title>
<link rel="icon" href="images/logo.png">
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
			<h1><?php echo $materia; ?></h1>
			<h2>(1° Bimestre)</h2>
	</div>
</div>
<div id="wrapper">
	<div id="featured-wrapper">
		<div id="featured" class="container">
		
			<a href="video-aulas.php?mat=<?php echo $materia; ?>"><div class="column1"><img src="images/video.png"/>
				<div class="title">
					<h2><b>Video Aulas</b></h2>
				</div>
			</a>
				<p>Video aulas refenrente aos assuntos mais importantes na disciplina de Educação Física do 1° Bimestre, do curso integrado de Informática, campus IFRN-CM.</p>
			</div>
			
			<a href="apostilas.php?tipo=<?php echo $tipo; ?>&mat=<?php echo $materia; ?>"><div class="column2"><img src="images/apostila.png"/>
				<div class="title">
					<h2><b>Apostilas</b></h2>
				</div>
			</a>
				<p>Apostilas refenrente aos assuntos mais importantes na disciplina de Educação Física do 1° Bimestre, do curso integrado de Informática, campus IFRN-CM.</p>
			</div>
			
			<a href="exercicios.php?tipo=<?php echo $tipo; ?>&mat=<?php echo $materia; ?>"><div class="column3"><img src="images/lista.png"/>
				<div class="title">
					<h2><b>Lista de Exercícios</b></h2>
				</div>
			</a>
				<p>Exercícios referente aos assuntos mais importantes na disciplina de Educação Física do 1° Bimestre, do curso integrado de Informática, campus IFRN-CM.</p>
			</div>
			
			<?php switch($materia){
					
			case 'Sociologia': ?>
			<a href="socilologia"><div class="column4"><img src="images/mapa.png" width="128px" height="128px"/>
				<div class="title">
					<h2><b>Mapa Mental</b></h2>
				</div>
			</a>
			<?php break;
			case 'Matemática': ?>
			<a href="matematica"><div class="column4"><img src="images/mapa.png" width="128px" height="128px"/>
				<div class="title">
					<h2><b>Mapa Mental</b></h2>
				</div>
			</a>
			<?php break;
			case 'Geografia': ?>
			<a href="Geografia"><div class="column4"><img src="images/mapa.png" width="128px" height="128px"/>
				<div class="title">
					<h2><b>Mapa Mental</b></h2>
				</div>
			</a>
			<?php break; 
			case 'Arte': ?>
			<a href="Arte"><div class="column4"><img src="images/mapa.png" width="128px" height="128px"/>
				<div class="title">
					<h2><b>Mapa Mental</b></h2>
				</div>
			</a>
			<?php break;
			<?php default: break;
			} ?>
			
				<p>Mapa mental relacionando assuntos mais importantes na disciplina de Educação Física do 1° Bimestre, do curso integrado de Informática, campus IFRN-CM.</p>
			</div>
		</div>
		

			<div id="ebox2">
				<a href="#" class="button">Referências</a>
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
