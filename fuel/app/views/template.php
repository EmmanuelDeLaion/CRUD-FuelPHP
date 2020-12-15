<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title> <?= $title; ?> </title>
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<!-- Estilos css  -->
<?= Asset::css('style.css');?>

</head>

<body>

	<div class="wrapper">
		<div class="sidebar">
			<div class="sidebar-menu">
				<div class="logo-tam">
					<!-- <img src="/assets/img/logotam.png" alt=""> -->
					<p class="titulo-bienvenida mt-5">Pedidos Fuel PHP</p>
				</div>
				<li class="item">
					<a href="about" class="menu-btn">
						<i class="fas fa-desktop"></i><span>Agregar Pedido</span>
					</a>
				</li>

				<li class="item">
					<a href="index" class="menu-btn">
						<i class="fas fa-info-circle"></i><span>Lista de Pedidos</span>
					</a>
				</li>
 
			</div>
		</div>



		<!--CONTENIDO PRINCIPÀL-->
		<div class="main-container">
			<nav class="navbar navbar-light bg-light">
				<a class="navbar-brand title-system" href="#">
					CRUD Registro de pedidos
				</a>
			</nav>
		 
            <?= $content; ?>
 
 

		 


		</div>
		<!--FIN CONTENIDO PRINCIPAL-->




	</div>
	<!--wrapper end-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous"></script>



	<script type="text/javascript">
		$(document).ready(function () {
			$(".sidebar-btn").click(function () {
				$(".wrapper").toggleClass("collapse");
			});
		});
	</script>

</body>

</html>