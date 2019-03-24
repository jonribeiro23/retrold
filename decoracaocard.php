<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Decoração</title>
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
		  
		  $sala_caminho = 'img/d/decoracao-retro-001.jpg';
		  $sala_titulo = 'Sala de estar retrô';
		  //$sala_ano = 1965;
		  $sala_alt = 'Sala de estar retrô';
		  $card1_sala = $flip->flipDecoracao($sala_caminho, $sala_titulo, $sala_alt,1);
		 
		  
		  $cozinha_caminho = 'img/d/decoracao-retro-009.jpg';
		  $cozinha_titulo = 'Cozinha retrô';
		  //$cozinha_ano = 1966;
		  $cozinha_alt = 'Cozinha retrô';
		  $card2_cozinha = $flip->flipDecoracao($cozinha_caminho, $cozinha_titulo, $cozinha_alt,2);
		  
		  
		  $quarto_caminho = 'img/d/decoracao-retro-011.jpg';
		  $quarto_titulo = 'Quarto retrô';
		  //$banheiro_ano = 1966;
		  $quarto_alt = 'Quarto retrô';
		  $card3_quarto = $flip->flipDecoracao($quarto_caminho, $quarto_titulo, $quarto_alt,3);
		  
		  
		  $banheiro_caminho = 'img/d/cozy-white-bath-up-vintage-look-natural-golden-legs.jpg';
		  $banheiro_titulo = 'Banheiro retrô';
		  //$banheiro_ano = 1966;
		  $banheiro_alt = 'Banheiro retrô';
		  $card4_banheiro = $flip->flipDecoracao($banheiro_caminho, $banheiro_titulo, $banheiro_alt,4);
		  
		  
		  $iluminacao_caminho = 'img/d/decoracao-retro-010.jpg';
		  $iluminacao_titulo = 'Iluminação retrô';
		  //$iluminacao_ano = 1966;
		  $iluminacao_alt = 'Iluminação retrô';
		  $card5_iluminacao = $flip->flipDecoracao($iluminacao_caminho, $iluminacao_titulo, $iluminacao_alt,5);
		  
		  
		  $artigos_caminho = 'img/d/Objetos-Retro.jpg';
		  $artigos_titulo = 'Artigos retrô';
		  //$artigos_ano = 1966;
		  $artigos_alt = 'Artigos retrô';
		  $card6_artigos = $flip->flipDecoracao($artigos_caminho, $artigos_titulo, $artigos_alt,6);
	?>

		<div class="row my-5">
			<div class="col">
				
				<?= $card1_sala ?>
	            <!-- Modal -->
	            <div id="modal" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoDecoracao(1); ?>
	            	</div>   
	            </div>

			</div>
			<div class="col">
				<?= $card2_cozinha ?>
				<!-- Modal -->
	            <div id="modal2" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoDecoracao(2); ?>
	            	</div>   
	            </div>
			</div>
			<div class="col">
				<?= $card3_quarto ?>
				<!-- Modal -->
	            <div id="modal3" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoDecoracao(3); ?>
	            	</div>   
	            </div>
			</div>
		</div>

		<!-- --- 60S --- -->
		<div class="row my-5">
			<div class="col">
				<?= $card4_banheiro ?>
				<!-- Modal -->
	            <div id="modal4" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoDecoracao(4); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card5_iluminacao ?>
				<!-- Modal -->
	            <div id="modal5" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoDecoracao(5); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card6_artigos ?>
				<!-- Modal -->
	            <div id="modal6" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoDecoracao(6); ?>
	            	</div>   
	            </div>
			</div>
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
		    

		    // Chamar o botão
		    var btn1 = document.getElementById('btnMais1');
		    var btn2 = document.getElementById('btnMais2');
		   	var btn3 = document.getElementById('btnMais3');
		   	var btn4 = document.getElementById('btnMais4');
		   	var btn5 = document.getElementById('btnMais5');
		   	var btn6 = document.getElementById('btnMais6');
		   	
		    
		    // Chamar o span que fecha o modal
		    var span = document.getElementsByClassName("close")[0];
		    var span2 = document.getElementsByClassName("close")[1];
		    var span3 = document.getElementsByClassName("close")[2];
		    var span4 = document.getElementsByClassName("close")[3];
		    var span5 = document.getElementsByClassName("close")[4];
		    var span6 = document.getElementsByClassName("close")[5];
		    

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
		        
		    }
		
    
  </script>


</body>
</html>