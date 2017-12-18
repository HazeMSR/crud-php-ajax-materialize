<!--Verifica la sesion-->
<?php
	session_start();
	if($_SESSION["valido"] == "sesion"){
		include("crud_BDusuario.php");
?>

<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Inicio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../css/ie8.css" /><![endif]-->
  		
  		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="../js/inicioU.js"></script>
		<script src="../js/confirmaE.js"></script>
	</head>
	<body>
		<a href="cerrarSesion.php?nombSesion=valido" class="button style2" style="height:1%; width:15%;">Cerrar Sesi&oacute;n</a>			
		<!-- Header -->
			<section id="header" style="">
				<header>
					<h1>¡Hola <?php echo $filasU[0];?>!</h1>
					<p><img src="<?php echo $filasU[3];?>" style="height:auto; width:25%;"></p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Proceed as anticipated</a>
				</footer>
			</section>

		<!-- Alumnos de Excelencia -->
			<section class="banner banner1" >
			<input type="hidden" id="promedio" name="promedio" value="<?php echo $filasA[8];?>">
				<header>
					<h2>Alumnos de Excelencia</h2>
				</header>
				<p>Felicidades, usted est&aacute; invitado a la ceremonia de entrega de diplomas de excelencia.</p> 
				<p>Para confirmar su asistencia de click en el bot&oacute;n.</p>
				<footer>
					<a href="confirmarE.php" class="button style2 scrolly">Confirmar</a>
				</footer>
			</section>			
		<!-- Graduados -->
			<section class="banner banner2">
			<input type="hidden" id="tt2" name="tt2" value="<?php echo $filasI[2];?>">
				<header>
					<h2>Graduaci&oacute;n</h2>
				</header>
				<p>Felicidades, usted est&aacute; invitado a la ceremonia de graduacion.</p> 
				<p>Para confirmar su asistencia de click en el bot&oacute;n.</p>
				<footer>
					<a href="#first" class="button style2 scrolly">Confirmar</a>
				</footer>
			</section>

		<!-- Fotos de excelencia -->
			<article class="container box style2 excelencia">
				<header>
					<h2>Fotos de la entrega de diplomas de Excelencia</h2>
					<p>Algunos recuerdos que perdurar&aacute;n</p>
				</header>
				<div class="inner gallery">
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="../img/fulls/01.jpg" class="image fit"><img src="../img/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="3u 12u(mobile)"><a href="../img/fulls/02.jpg" class="image fit"><img src="../img/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="3u 12u(mobile)"><a href="../img/fulls/03.jpg" class="image fit"><img src="../img/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="3u 12u(mobile)"><a href="../img/fulls/04.jpg" class="image fit"><img src="../img/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="../img/fulls/05.jpg" class="image fit"><img src="../img/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="3u 12u(mobile)"><a href="../img/fulls/06.jpg" class="image fit"><img src="../img/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="3u 12u(mobile)"><a href="../img/fulls/07.jpg" class="image fit"><img src="../img/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="3u 12u(mobile)"><a href="../img/fulls/08.jpg" class="image fit"><img src="../img/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</article>

		<!-- Contact -->
			<article class="container box style3">
				<header>
					<h2>Nisl sed ultricies</h2>
					<p>Diam dignissim lectus eu ornare volutpat orci.</p>
				</header>
				<form method="post" action="#">
					<div class="row 50%">
						<div class="6u 12u$(mobile)"><input type="text" class="text" name="name" placeholder="Name" /></div>
						<div class="6u$ 12u$(mobile)"><input type="text" class="text" name="email" placeholder="Email" /></div>
						<div class="12u$">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							</ul>
						</div>
					</div>
				</form>
			</article>

		<!-- Generic -->
		<!--
			<article class="container box style3">
				<header>
					<h2>Generic Box</h2>
					<p>Just a generic box. Nothing to see here.</p>
				</header>
				<section>
					<header>
						<h3>Paragraph</h3>
						<p>This is a subtitle</p>
					</header>
					<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
					habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
					leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
					amet risus elit.</p>
				</section>
				<section>
					<header>
						<h3>Blockquote</h3>
					</header>
					<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
					tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
				</section>
				<section>
					<header>
						<h3>Divider</h3>
					</header>
					<p>Donec consectetur <a href="#">vestibulum dolor et pulvinar</a>. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
					<hr />
					<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
				</section>
				<section>
					<header>
						<h3>Unordered List</h3>
					</header>
					<ul class="default">
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ul>
				</section>
				<section>
					<header>
						<h3>Ordered List</h3>
					</header>
					<ol class="default">
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ol>
				</section>
				<section>
					<header>
						<h3>Table</h3>
					</header>
					<div class="table-wrapper">
						<table class="default">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Description</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="3"></td>
									<td>100.00</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</section>
				<section>
					<header>
						<h3>Form</h3>
					</header>
					<form method="post" action="#">
						<div class="row">
							<div class="6u">
								<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
							</div>
							<div class="6u">
								<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<select name="department" id="department">
									<option value="">Choose a department</option>
									<option value="1">Manufacturing</option>
									<option value="2">Administration</option>
									<option value="3">Support</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="message" id="message" placeholder="Enter your message"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Submit" /></li>
									<li><input type="reset" class="style3" value="Clear Form" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</article>
		-->

		<section id="footer">
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Tecnolog&iacute;as para la Web</li><li>2CV9</li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="../js/jquery.min.js"></script>
			<script src="../js/jquery.scrolly.min.js"></script>
			<script src="../js/jquery.poptrox.min.js"></script>
			<script src="../js/skel.min.js"></script>
			<script src="../js/util.js"></script>
			<!--[if lte IE 8]><script src="../js/ie/respond.min.js"></script><![endif]-->
			<script src="../js/main.js"></script>

	</body>
</html>
<?php
	}else{
		header("location:../index.php");
	}
?>