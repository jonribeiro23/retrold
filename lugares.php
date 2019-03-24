<!DOCTYPE html>

<html lang="pt-br">

<head>

	<title>Lugares</title>
	<meta charset="utf-8">
	
	<link  href="css/estilo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/flipcard.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/rodape.css">
	
	
</head>

<body id="back">
	<?php include_once 'includes/menu.php'; ?>
	<div id="container" class="container">
	

	<?php  
		require_once 'includes/flipcard.php';

		  $flip = new FlipCard();
		  
		  $barbearia_caminho = 'img/l/barbearia.jpg';
		  $barbearia_titulo = 'Barbearia retrô';
		  $barbearia_alt = 'Barbearia retrô';
		  $card1_barbearia = $flip->flipLugares($barbearia_caminho, $barbearia_titulo, $barbearia_alt,1);
		 
		  
		  $cadillaceventos_caminho = 'img/l/cadillac-eventos.jpg';
		  $cadillaceventos_titulo = 'Cadillac - Bar retrô';
		  $cadillaceventos_alt = 'Cadillac - Bar retrô';
		  $card2_cadillaceventos = $flip->flipLugares($cadillaceventos_caminho, $cadillaceventos_titulo, $cadillaceventos_alt,2);
		  
		  
		  $carrosaluguel_caminho = 'img/l/carros-aluguel.jpg';
		  $carrosaluguel_titulo = 'Carros retrô';
		  $carrosaluguel_alt = 'Carros retrô';
		  $card3_carrosaluguel = $flip->flipLugares($carrosaluguel_caminho, $carrosaluguel_titulo, $carrosaluguel_alt,3);
		  
		  
		  $disquerialoja_caminho = 'img/l/disqueria-loja.jpg';
		  $disquerialoja_titulo = 'Disqueria - artigos retrô';
		  $disquerialoja_alt = 'Disqueria - artigos retrô';
		  $card4_disquerialoja = $flip->flipLugares($disquerialoja_caminho, $disquerialoja_titulo, $disquerialoja_alt,4);
		  
		  
		  $modafeminina_caminho = 'img/l/moda-feminina.jpg';
		  $modafeminina_titulo = 'Moda feminina retrô';
		  $modafeminina_alt = 'Moda feminina retrô';
		  $card5_modafeminina = $flip->flipLugares($modafeminina_caminho, $modafeminina_titulo, $modafeminina_alt,5);
		  
		  
		  $moveis_caminho = 'img/l/moveis.png';
		  $moveis_titulo = 'Móveis retrô';
		  $moveis_alt = 'Móveis retrô';
		  $card6_moveis = $flip->flipLugares($moveis_caminho, $moveis_titulo, $moveis_alt,6);
		  
		  $rockabilly_caminho = 'img/l/rockabilly.jpg';
		  $rockabilly_titulo = 'Rockabilly';
		  $rockabilly_alt = 'Rockabilly';
		  $card7_rockabilly = $flip->flipLugares($rockabilly_caminho, $rockabilly_titulo, $rockabilly_alt,7);
		  
		  
		  $vuduroupas_caminho = 'img/l/vudu-roupas.png';
		  $vuduroupas_titulo = 'Vudu roupas retrô';
		  $vuduroupas_alt = 'Vudu roupas retrô';
		  $card8_vuduroupas = $flip->flipLugares($vuduroupas_caminho, $vuduroupas_titulo, $vuduroupas_alt,8);
	?>

		<div class="row my-5">
			<div class="col">
				
				<?= $card1_barbearia ?>
	            <!-- Modal -->
	            <div id="modal" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(1); ?>
	            	</div>   
	            </div>

			</div>
			<div class="col">
				<?= $card2_cadillaceventos ?>
				<!-- Modal -->
	            <div id="modal2" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(2); ?>
	            	</div>   
	            </div>
			</div>
			<div class="col">
				<?= $card3_carrosaluguel ?>
				<!-- Modal -->
	            <div id="modal3" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(3); ?>
	            	</div>   
	            </div>
			</div>
		</div>

		<!-- --- 60S --- -->
		<div class="row my-5">
			<div class="col">
				<?= $card4_disquerialoja ?>
				<!-- Modal -->
	            <div id="modal4" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(4); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card5_modafeminina ?>
				<!-- Modal -->
	            <div id="modal5" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(5); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card6_moveis ?>
				<!-- Modal -->
	            <div id="modal6" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(6); ?>
	            	</div>   
	            </div>
			</div>
		</div>
		
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<?= $card7_rockabilly ?>
				<!-- Modal -->
	            <div id="modal7" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(7); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card8_vuduroupas ?>
				<!-- Modal -->
	            <div id="modal8" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoLugares(8); ?>
	            	</div>   
	            </div>
			</div>
			<div class="col"></div>
		</div>
	</div>

	<footer>
		<?php include 'includes/rodape.php'; ?>
	</footer>

	<script>

				
	        // Chamar o modal
		    var modal = document.getElementById('modal');
		    var modal2 = document.getElementById('modal2');
		    var modal3 = document.getElementById('modal3');
		    var modal4 = document.getElementById('modal4');
		    var modal5 = document.getElementById('modal5');
		    var modal6 = document.getElementById('modal6');
			var modal7 = document.getElementById('modal7');
		    var modal8 = document.getElementById('modal8');
		    

		    // Chamar o botão
		    var btn1 = document.getElementById('btnMais1');
		    var btn2 = document.getElementById('btnMais2');
		   	var btn3 = document.getElementById('btnMais3');
		   	var btn4 = document.getElementById('btnMais4');
		   	var btn5 = document.getElementById('btnMais5');
		   	var btn6 = document.getElementById('btnMais6');
			var btn7 = document.getElementById('btnMais7');
		   	var btn8 = document.getElementById('btnMais8');
		   	
		    
		    // Chamar o span que fecha o modal
		    var span = document.getElementsByClassName("close")[0];
		    var span2 = document.getElementsByClassName("close")[1];
		    var span3 = document.getElementsByClassName("close")[2];
		    var span4 = document.getElementsByClassName("close")[3];
		    var span5 = document.getElementsByClassName("close")[4];
		    var span6 = document.getElementsByClassName("close")[5];
			var span7 = document.getElementsByClassName("close")[6];
		    var span8 = document.getElementsByClassName("close")[7];
		    

		    // Abrir o modal
		    btn1.onclick = function() {
		        modal.style.display = "block";
		    }
		    btn2.onclick = function() {
		        modal2.style.display = "block";
		    }
		    btn3.onclick = function() {
		        modal3.style.display = "block";
		    }
		    btn4.onclick = function() {
		        modal4.style.display = "block";
		    }
		    btn5.onclick = function() {
		        modal5.style.display = "block";
		    }
		    btn6.onclick = function() {
		        modal6.style.display = "block";
		    }
			btn7.onclick = function() {
		        modal7.style.display = "block";
		    }
		    btn8.onclick = function() {
		        modal8.style.display = "block";
		    }
			
		    
		    

		    // Fechar o modal
		    span.onclick = function() {
		        modal.style.display = "none";
		    }
		    span2.onclick = function() {
		        modal2.style.display = "none";
		    }
		    span3.onclick = function() {
		        modal3.style.display = "none";
		    }
		    span4.onclick = function() {
		        modal4.style.display = "none";
		    }
		    span5.onclick = function() {
		        modal5.style.display = "none";
		    }
		    span6.onclick = function() {
		        modal6.style.display = "none";
		    }
			span7.onclick = function() {
		        modal7.style.display = "none";
		    }
		    span8.onclick = function() {
		        modal8.style.display = "none";
		    }
		   

		    // Fechar quando clicar fora
		    window.onclick = function(event) {
		        if (event.target == modal) {
		            modal.style.display = "none";
		        }
		        if (event.target == modal2) {
		            modal2.style.display = "none";
		        }
		        if (event.target == modal3) {
		            modal3.style.display = "none";
		        }
		        if (event.target == modal4) {
		            modal4.style.display = "none";
		        }
		        if (event.target == modal5) {
		            modal5.style.display = "none";
		        }
		        if (event.target == modal6) {
		            modal6.style.display = "none";
		        }
				if (event.target == modal7) {
		            modal7.style.display = "none";
		        }
		        if (event.target == modal8) {
		            modal8.style.display = "none";
		        }
		        
		    }
		
    
  </script>


</body>
</html>