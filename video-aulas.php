<?php
	$materia = $_GET['mat'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $materia; ?> Video Aulas (1° Bimestre)</title>
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
			<h1><?php echo $materia; ?> - Video Aulas</h1>
			<h2>(1° Bimestre)</h2>
	</div>
</div>
<div id="wrapper">
	<div id="featured-wrapper">
	
	<?php //=============================================================// ?>
		<div id="featured" class="container">
		
		<!-- tem que yer um if para linkar as videos aulas de cada materias  -->
		
			<div class="column1">
					<iframe width="220" height="120" src="https://www.youtube.com/embed/uFvcQo-9_wI" frameborder="0" allowfullscreen></iframe>
					<div class="title">
						<h2><b>Vídeo 01</b></h2>
						<form name="formulario" onsubmit="return validarFormulario();">
							<input type="checkbox" name="meuchekbox" onclick="document.getElementById('info').innerHTML = 'Vídeo Vizualizado';"/>
						</form>
						</br>
						<div id="info"></div>
					</div>
			</div>
			
			<div class="column2">
					<iframe width="220" height="120" src="https://www.youtube.com/embed/8Gdy5kDfcIM" frameborder="0" allowfullscreen></iframe>
					<div class="title">
						<h2><b>Vídeo 02</b></h2>
						<form name="formulario" onsubmit="return validarFormulario();">
							<input type="checkbox" name="meuchekbox" onclick="document.getElementById('info2').innerHTML = 'Vídeo Vizualizado';"/>
						</form>
						</br>
						<div id="info2"></div>
					</div>
			</div>
			
			<div class="column3">
					<iframe width="220" height="120" src="https://www.youtube.com/embed/xI9qujrvqS8" frameborder="0" allowfullscreen></iframe>
					<div class="title">
						<h2><b>Vídeo 03</b></h2>
						<form name="formulario" onsubmit="return validarFormulario();">
							<input type="checkbox" name="meuchekbox" onclick="document.getElementById('info3').innerHTML = 'Vídeo Vizualizado';"/>
						</form>
						</br>
						<div id="info3"></div>
					</div>
			</div>
			
			<div class="column4">
					<iframe width="220" height="120" src="https://www.youtube.com/embed/QR-VRBjI67k" frameborder="0" allowfullscreen></iframe>
					<div class="title">
						<h2><b>Vídeo 04</b></h2>
						<form name="formulario" onsubmit="return validarFormulario();">
							<input type="checkbox" name="meuchekbox" onclick="document.getElementById('info4').innerHTML = 'Vídeo Vizualizado';"/>
						</form>
						</br>
						<div id="info4"></div>
					</div>
			</div>
		</div>
				
		<div id="featured" class="container">
		
			<div class="column5">
					<iframe width="220" height="120" src="https://www.youtube.com/embed/pWajTAu6s5k" frameborder="0" allowfullscreen></iframe>
					<div class="title">
						<h2><b>Vídeo 05</b></h2>
						<form name="formulario" onsubmit="return validarFormulario();">
							<input type="checkbox" name="meuchekbox" onclick="document.getElementById('info5').innerHTML = 'Vídeo Vizualizado';"/>
						</form>
						</br>
						<div id="info5"></div>
					</div>
			</div>
			
			<div class="column6">
					<iframe width="220" height="120" src="https://www.youtube.com/embed/LGkk_2a1n4Y" frameborder="0" allowfullscreen></iframe>
					<div class="title">
						<h2><b>Vídeo 06</b></h2>
						<form name="formulario" onsubmit="return validarFormulario();">
							<input type="checkbox" name="meuchekbox" onclick="document.getElementById('info6').innerHTML = 'Vídeo Vizualizado';"/>
						</form>
						</br>
						<div id="info6"></div>
					</div>
			</div>
		</div>
	<?php //=============================================================// ?>
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
