<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Carros</title>
	<meta charset="utf-8">
	<link  href="css/estilo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/flipcard.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/rodape.css">
	<script>
		//alert('Desculpe-nos se houver possíveis transtornos. Página ainda está sendo construida');
	</script>
	
</head>
<body id="back">
	<?php include 'includes/menu.php'; ?>
	
	<div id="container" class="container">

	<?php  
		
		require_once 'includes/flipcard.php';

		  $flip = new FlipCard();

		  // Década de 1950 //  
		  
		  $corvette_caminho = 'img/c/chevrolet-corvette-std-1953.jpg';
		  $corvette_titulo = 'Chevrolet Corvette';
		  $corvette_ano = '1953';
		  $corvette_alt = 'Chevrolet Corvette';
		  $card1_50 = $flip->flip($corvette_caminho, $corvette_titulo, $corvette_ano, $corvette_alt,1);
		  
		  
		  $kombi_caminho = 'img/c/kombi-1957.jpg';
		  $kombi_titulo = 'kombi';
		  $kombi_ano = 1957;
		  $kombi_alt = 'kombi';
		  $card2_50 = $flip->flip($kombi_caminho, $kombi_titulo, $kombi_ano, $kombi_alt,2);
		 
		 
		  $cadillac_caminho = 'img/c/Cadillac-Eldorado-1959.jpg';
		  $cadillac_titulo = 'Cadillac Eldorado';
		  $cadillac_caminho_ano = 1959;
		  $cadillac_caminho_alt = 'Cadillac Eldorado';
		  $card3_50 = $flip->flip($cadillac_caminho, $cadillac_titulo, $cadillac_caminho_ano, $cadillac_caminho_alt,3);


		  //--------------------------------------------------------------------------------------------------------//
		  
		  // Década de 1960 //
		  
		  $impala_caminho = 'img/c/1961-chevrolet-impala.jpeg';
		  $impala_titulo = 'Chevrolet Impala';
		  $impala_ano = 1961;
		  $impala_alt = 'Carro Chevrolet Impala';
		  $card4_60 = $flip->flip($impala_caminho, $impala_titulo, $impala_ano, $impala_alt,4);
		  
		  
		  $galaxie_caminho = 'img/c/Galaxie-500-1966.jpg';
		  $galaxie_titulo = 'Galaxie 500';
		  $galaxie_ano = 1966;
		  $galaxie_alt = 'Galaxie 500';
		  $card5_60 = $flip->flip($galaxie_caminho, $galaxie_titulo, $galaxie_ano, $galaxie_alt,5);
		 
		  
		  $opala_caminho = 'img/c/chevrolet-opala-1968.jpg';
		  $opala_titulo = 'Chevrolet Opala';
		  $opala_ano = 1968;
		  $opala_alt = 'Chevrolet Opala';
		  $card6_60 = $flip->flip($opala_caminho, $opala_titulo, $opala_ano, $opala_alt,6);
		  
		  //----------------------------------------------------------------------------------------//

		  // Década de 1970 // 
		  
		  $marverick_caminho = 'img/c/ford-marverick-1970.jpg';
		  $marverick_titulo = 'Ford Marverick';
		  $marverick_ano = 1970;
		  $marverick_alt = 'Ford Marverick';
		  $card7_70 = $flip->flip($marverick_caminho, $marverick_titulo, $marverick_ano, $marverick_alt,7);
		  
		  $brasilia_caminho = 'img/c/brasilia-amarela-1973.jpeg';
		  $brasilia_titulo = 'Brasilia';
		  $brasilia_ano = 1973;
		  $brasilia_alt = 'Brasilia';
		  $card8_70 = $flip->flip($brasilia_caminho, $brasilia_titulo, $brasilia_ano, $brasilia_alt,8);
		  
		  $chevette_caminho = 'img/c/Chevrolet-Chevette-1978.jpg';
		  $chevette_titulo = 'Chevrolet Chevette';
		  $chevette_ano = 1978;
		  $chevette_alt = 'Chevrolet Chevette';
		  $card9_70 = $flip->flip($chevette_caminho, $chevette_titulo, $chevette_ano, $chevette_alt,9);
		  
		  //--------------------------------------------------------------------------------------------//

		  // Carros Famosos no Cinema //
		  
		  $deLorean_caminho = 'img/c/DeLorean-3.jpg';
		  $deLorean_titulo = 'DeLorean DMC-12'; 
		  $deLorean_ano = 1981;
		  $deLorean_alt = 'DeLorean DMC-12';
		  $card10_81 = $flip->flip($deLorean_caminho, $deLorean_titulo, $deLorean_ano, $deLorean_alt,10);
		  
		  $spyder_caminho = 'img/c/Spyder-California-original-Ferris.jpg';
		  $spyder_titulo = "<span id='sco'>Spyder California</span>";
		  $spyder_ano = 1960;
		  $spyder_alt = 'Spyder California';
		  $card11_60 = $flip->flip($spyder_caminho, $spyder_titulo, $spyder_ano, $spyder_alt,11);
		 
		 //---------------------------------------------------------------------------------------------//
	?>

		<h2>Década de 1950</h2>
		<div class="row">
			<div class="col">
				
				<?= $card1_50 ?>
	            <!-- Modal -->
	            <div id="modal" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(1); ?>
	            	</div>   
	            </div>

			</div>
			<div class="col">
				<?= $card2_50 ?>
				<!-- Modal -->
	            <div id="modal2" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(2); ?>
	            	</div>   
	            </div>
			</div>
			<div class="col">
				<?= $card3_50 ?>
				<!-- Modal -->
	            <div id="modal3" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(3); ?>
	            	</div>   
	            </div>
			</div>
		</div>

		<!-- --- 60S --- -->
		<h2 class="mt-5">Década de 1960</h2>
		<div class="row">
			<div class="col">
				<?= $card4_60 ?>
				<!-- Modal -->
	            <div id="modal4" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(4); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card5_60 ?>
				<!-- Modal -->
	            <div id="modal5" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(5); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card6_60 ?>
				<!-- Modal -->
	            <div id="modal6" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(6); ?>
	            	</div>   
	            </div>
			</div>
		</div>

		<!-- --- 70S --- -->
		<h2 class="mt-5">Década de 1970</h2>
		<div class="row">
			<div class="col">
				<?= $card7_70 ?>
				<!-- Modal -->
	            <div id="modal7" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(7); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card8_70 ?>
				<!-- Modal -->
	            <div id="modal8" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(8); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card9_70 ?>
				<!-- Modal -->
	            <div id="modal9" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(9); ?>
	            	</div>   
	            </div>
			</div>
		</div>

		<!-- --- FILMES --- -->
		<h2 class="mt-5">Carros Famosos no Cinema</h2>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<?= $card10_81 ?>
				<!-- Modal -->
	            <div id="modal10" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(10); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card11_60 ?>
				<!-- Modal -->
	            <div id="modal11" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoCarros(11); ?>
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
		    var modal9 = document.getElementById('modal9');
		    var modal10 = document.getElementById('modal10');
		    var modal11 = document.getElementById('modal11');

		    // Chamar o botão
		    var btn1 = document.getElementById('btnMais1');
		    var btn2 = document.getElementById('btnMais2');
		   	var btn3 = document.getElementById('btnMais3');
		   	var btn4 = document.getElementById('btnMais4');
		   	var btn5 = document.getElementById('btnMais5');
		   	var btn6 = document.getElementById('btnMais6');
		   	var btn7 = document.getElementById('btnMais7');
		   	var btn8 = document.getElementById('btnMais8');
		   	var btn9 = document.getElementById('btnMais9');
		   	var btn10 = document.getElementById('btnMais10');
		   	var btn11 = document.getElementById('btnMais11');
		    
		    // Chamar o span que fecha o modal
		    var span = document.getElementsByClassName("close")[0];
		    var span2 = document.getElementsByClassName("close")[1];
		    var span3 = document.getElementsByClassName("close")[2];
		    var span4 = document.getElementsByClassName("close")[3];
		    var span5 = document.getElementsByClassName("close")[4];
		    var span6 = document.getElementsByClassName("close")[5];
		    var span7 = document.getElementsByClassName("close")[6];
		    var span8 = document.getElementsByClassName("close")[7];
		    var span9 = document.getElementsByClassName("close")[8];
		    var span10 = document.getElementsByClassName("close")[9];
		    var span11 = document.getElementsByClassName("close")[10];

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
		    btn9.onclick = function() {
		        modal9.style.display = "block";
		    }
		    btn10.onclick = function() {
		        modal10.style.display = "block";
		    }
		    btn11.onclick = function() {
		        modal11.style.display = "block";
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
		    span9.onclick = function() {
		        modal9.style.display = "none";
		    }
		    span10.onclick = function() {
		        modal10.style.display = "none";
		    }
		    span11.onclick = function() {
		        modal11.style.display = "none";
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
		        if (event.target == modal9) {
		            modal9.style.display = "none";
		        }
		        if (event.target == modal10) {
		            modal10.style.display = "none";
		        }
		        if (event.target == modal11) {
		            modal11.style.display = "none";
		        }
		    }
		
    
  </script>
</body>
</html>