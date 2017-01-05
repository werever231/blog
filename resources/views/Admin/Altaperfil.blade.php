<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>EEMUD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" /> 
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
                        <?php
                            echo $head;
                        ?>


			<!-- Banner -->
				<section id="banner">
					<section id="principal">
					<h3>Alta de perfil</h3>

                                        @if(count($errors))
                                            <h5 style="color: #FAF834;">Favor de llenar los campos marcados con *</h5>
                                        @endif

			<form action="{{url::asset('/')}}index.php/Usuarios/Alta" method="get">
				

			<table border="0"  class="form">
				<tr>
					<td>* Usuario</td><td><input type="text" name="ID"></td>					
				</tr>
				<tr>
						<td class="Separador" colspan="6"></td>
				</tr>

				<tr>
					<td>* Nombre</td><td><input type="text" name="nombre"></td>					
				</tr>
				<tr>
						<td class="Separador" colspan="6"></td>
				</tr>
				<tr>
					<td>* Perfil</td><td><input type="text" name="perfil"></td>					
				</tr>
<tr>
						<td class="Separador" colspan="6"></td>
				</tr>
				<tr>
                                    <td>* Clinica</td>
                                    <td>
                                        <select name="clinica_selected">                                        
                                            @foreach ($clinicas as $value)                                                                                                                     
                                                <option value="{{ $value->nombre_clinica }}"> {{ $value->nombre_clinica }}</option> 
                                            @endforeach
                                        </select>
                                    </td>					
                                </tr>

				<tr>
						<td class="Separador" colspan="2"></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><input type="submit" value="Crear"></td>
				</tr>
			</table>
		</form>
		</section>
				</section>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-bar-chart-o"></span>
						<h2><strong>EEMUD</strong>  Es un sistema diseñado para 
						<br />
						para la gestión de un consultorio</h2>
						
					</header>

					<!-- One -->
						
					<!-- Two -->
						

					<!-- Three -->
						

				</article>

			<!-- CTA -->
				

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Copyright 2015</li><li><strong>CAROLVE SYSTEMS S.A de C.V</strong></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>