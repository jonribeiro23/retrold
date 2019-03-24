<!DOCTYPE HTML>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Forms</title>

<link rel="stylesheet" href="css/style.css">
<script src="js/lib/jquery-3.1.1.js"></script>
<script src="js/dist/jquery.validate.js"></script>
<link  href="css/estilo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/rodape.css">
	<style>
		form p{
			margin:auto;
			display:grid;
			max-width:600px;
		}
	</style>

</head>

<body id="back">
    
    <?php  
		include_once 'includes/menu.php';
	?>	
	
	<div id="container" class="container">
			<h1 style="font-size: 300%">Fale conosco</h1>
			
		
		

		<div class="contact-form">
			<form class="contact-form" id="formComentario" method="post">
			    <p>
			      <input style="color:black" name="nome" type="text" class="form-control" id="cnome" required minlength="2" placeholder="Seu nome"><br>
			    </p>
			    <p>
			      <input  style="color:black" name="email" type="email" class="form-control" id="cemail" required placeholder="Seu email"><br>
			    </p>
			    
			    <p>
					<textarea style="color:black" name="comentario" class="form-control" onkeyup="limite_textarea(this.value)" id="texto" placeholder="Mensagem"></textarea><br>
			    </p>
				<p>
					<span class="black" id="cont">255</span> <span class="black">Restantes</span>
				</p>
			    <p>
			      <input type="submit" class="form-control submit" value="Enviar">
			    </p>  
			</form>
		</div>
	</div>

	<footer>
		<?php include 'includes/rodape.php'; ?>
	</footer>
	
	<script>
		$("#formComentario").validate();
		
		function limite_textarea(valor) {
		    quant = 255;
		    total = valor.length;
		    if(total <= quant) {
		        resto = quant - total;
		        document.getElementById('cont').innerHTML = resto;
		    } else {
		        document.getElementById('texto').value = valor.substr(0,quant);
		    }
		}
	</script>

</body>
</html>