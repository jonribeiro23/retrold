<!DOCTYPE html>

<html lang="pt-br">

<head>



	<title>Músicas</title>
	
	<meta charset="UTF-8">
	
	<meta charset="utf-8">
	<link  href="css/estilo2.css" rel="stylesheet">
	<link  href="css/estilo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/flipcard2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/rodape.css">
</head>
<body id="back">
	<?php include_once 'includes/menu.php'; ?>
	<div id="container" class="container">

	<?php  
		require 'includes/flipcard.php';

		  $flip = new FlipCard();

		  // Década de 1950 
		  
		  $beegees_caminho = 'img/m/bee-gees-50.jpg';
		  $beegees_titulo = 'Bee Gees';
		  $beegees_ano = 1958;
		  $beegees_alt = 'Bee Gees';
		  $card1_50 = $flip->flipMusicas($beegees_caminho, $beegees_titulo, $beegees_ano, $beegees_alt,1);
		  
		  
		  $elvispresley_caminho = 'img/m/elvis-presley-50.jpg';
		  $elvispresley_titulo = 'Elvis Presley';
		  $elvispresley_ano = 1954;
		  $elvispresley_alt = 'Elvis Presley';
		  $card2_50 = $flip->flipMusicas($elvispresley_caminho, $elvispresley_titulo, $elvispresley_ano, $elvispresley_alt,2);
		 
		 
		  $littlerichard_caminho = 'img/m/little-richard-50.jpg';
		  $littlerichard_titulo = 'Little Richard';
		  $littlerichard_caminho_ano = 1951;
		  $littlerichard_caminho_alt = 'Little Richard';
		  $card3_50 = $flip->flipMusicas($littlerichard_caminho, $littlerichard_titulo, $littlerichard_caminho_ano, $littlerichard_caminho_alt,3);


		  //--------------------------------------------------------------------------------------------------------//
		  
		  // Década de 1960 //
		  
		  $pinkfloyd_caminho = 'img/m/pink-floyd-60.jpeg';
		  $pinkfloyd_titulo = 'Pink Floyd';
		  $pinkfloyd_ano = 1965;
		  $pinkfloyd_alt = 'Pink Floyd';
		  $card4_60 = $flip->flipMusicas($pinkfloyd_caminho, $pinkfloyd_titulo, $pinkfloyd_ano, $pinkfloyd_alt,4);
		  
		  
		  $thebeatles_caminho = 'img/m/the-beatles-60.jpg';
		  $thebeatles_titulo = 'The Beatles';
		  $thebeatles_ano = 1960;
		  $thebeatles_alt = 'The Beatles';
		  $card5_60 = $flip->flipMusicas($thebeatles_caminho, $thebeatles_titulo, $thebeatles_ano, $thebeatles_alt,5);
		 
		  
		  $thejackson5_caminho = 'img/m/the-jackson-5-60.jpeg';
		  $thejackson5_titulo = 'The Jackson 5';
		  $thejackson5_ano = 1964;
		  $thejackson5_alt = 'The Jackson 5';
		  $card6_60 = $flip->flipMusicas($thejackson5_caminho, $thejackson5_titulo, $thejackson5_ano, $thejackson5_alt,6);
		  
		  //----------------------------------------------------------------------------------------//

		  // Década de 1970 // 
		  
		  $acdc_caminho = 'img/m/ac-dc-70.jpg';
		  $acdc_titulo = 'AC/DC';
		  $acdc_ano = 1973;
		  $acdc_alt = 'AC/DC';
		  $card7_70 = $flip->flipMusicas($acdc_caminho, $acdc_titulo, $acdc_ano, $acdc_alt,7);
		  
		  $eltonjohn_caminho = 'img/m/elton-john-70.jpg';
		  $eltonjohn_titulo = 'Elton John';
		  $eltonjohn_ano = 1970;
		  $eltonjohn_alt = 'Elton John';
		  $card8_70 = $flip->flipMusicas($eltonjohn_caminho, $eltonjohn_titulo, $eltonjohn_ano, $eltonjohn_alt,8);
		  
		  $queen_caminho = 'img/m/queen-70.jpeg';
		  $queen_titulo = 'Queen';
		  $queen_ano = 1971;
		  $queen_alt = 'Queen';
		  $card9_70 = $flip->flipMusicas($queen_caminho, $queen_titulo, $queen_ano, $queen_alt,9);
		  
		  //--------------------------------------------------------------------------------------------//

		  // Década de 1980 // 
		  
		  $madonna_caminho = 'img/m/madonna-like-a-virgin-80.jpg';
		  $madonna_titulo = 'Madonna';
		  $madonna_ano = 1983;
		  $madonna_alt = 'Madonna';
		  $card10_80 = $flip->flipMusicas($madonna_caminho, $madonna_titulo, $madonna_ano, $madonna_alt,10);
		  
		  $michaeljackson_caminho = 'img/m/michael-jackson-80.jpg';
		  $michaeljackson_titulo = ' Michael Jackson';
		  $michaeljackson_ano = 1979;
		  $michaeljackson_alt = 'Michael Jackson';
		  $card11_80 = $flip->flipMusicas($michaeljackson_caminho, $michaeljackson_titulo, $michaeljackson_ano, $michaeljackson_alt,11);
		  
		  $thepolice_caminho = 'img/m/the-police-80.jpg';
		  $thepolice_titulo = 'The Police';
		  $thepolice_ano = 1977;
		  $thepolice_alt = 'The Police';
		  $card12_80 = $flip->flipMusicas($thepolice_caminho, $thepolice_titulo, $thepolice_ano, $thepolice_alt,12);
		  
		  //--------------------------------------------------------------------------------------------//
	?>

	<div class="row">
		<div class="col"></div>
		<div class="col">
			<h2 class="mt-4" style="text-align: center;">Nostalgia</h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/k0y1sfzvf6Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<h2 class="my-4" style="text-align: center;">Retrocast</h2>
			 <audio style="margin-left: auto;margin-right: auto;display: flex;" controls>
			  <source src="midia/retrocast.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio> 
		</div>
		<div class="col"></div>
	</div>
    
    <div class="mt-5 row">
    	<div class="col-6">
    		<div class="row">
    			<div class="col-2"></div>
    			<div class="col-8">
    				<?php include 'includes/musicas.php'; ?>
    			</div>
    			<div class="col"></div>
    		</div>
    	</div>
    	<div id="playlist" class="col-6">
    		<div class="row">
    			<div class="col-4"></div>
    			<div class="col-8">
    				<?php include 'includes/playlist.php'; ?>	
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
		    var modal7 = document.getElementById('modal7');
		    var modal8 = document.getElementById('modal8');
		    var modal9 = document.getElementById('modal9');
		    var modal10 = document.getElementById('modal10');
		    var modal11 = document.getElementById('modal11');
			var modal12 = document.getElementById('modal12');

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
			var btn12 = document.getElementById('btnMais12');
		    
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
			var span12 = document.getElementsByClassName("close")[11];

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
			btn12.onclick = function() {
		        modal12.style.display = "block";
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
			span12.onclick = function() {
		        modal12.style.display = "none";
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
				
			    if (event.target == modal12) {
		            modal12.style.display = "none";
		        }
		    }
		
    
  </script>

	
</body>

</html>