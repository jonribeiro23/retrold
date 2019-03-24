<!DOCTYPE html>

<html lang="pt-br">

<head>

<div class="top">RETROLD<div class="sub">Revivendo os bons tempos</div></div>

	<title>Músicas</title>
	
	<meta charset="UTF-8">
	
	<meta charset="utf-8">
	<link  href="css/estilo2.css" rel="stylesheet">
	<link  href="css/estilo.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/flipcard2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body>

	<div class="container">

	<?php  
		include_once 'includes/menu.php';
		require_once 'includes/flipcard.php';

		  $flip = new FlipCard();

		  // Década de 1950 //  
		  
		  $beegees_caminho = 'img/m/bee-gees-50.jpg';
		  $beegees_titulo = 'Bee Gees';
		  $beegees_ano = 1958;
		  $beegees_alt = 'Bee Gees';
		  $card1_50 = $flip->flip($beegees_caminho, $beegees_titulo, $beegees_ano, $beegees_alt,1);
		  
		  
		  $elvispresley_caminho = 'img/m/elvis-presley-50.jpg';
		  $elvispresley_titulo = 'Elvis Presley';
		  $elvispresley_ano = 1954;
		  $elvispresley_alt = 'Elvis Presley';
		  $card2_50 = $flip->flip($elvispresley_caminho, $elvispresley_titulo, $elvispresley_ano, $elvispresley_alt,2);
		 
		 
		  $littlerichard_caminho = 'img/m/little-richard-50.jpg';
		  $littlerichard_titulo = 'Little Richard';
		  $littlerichard_caminho_ano = 1951;
		  $littlerichard_caminho_alt = 'Little Richard';
		  $card3_50 = $flip->flip($littlerichard_caminho, $littlerichard_titulo, $littlerichard_caminho_ano, $littlerichard_caminho_alt,3);


		  //--------------------------------------------------------------------------------------------------------//
		  
		  // Década de 1960 //
		  
		  $pinkfloyd_caminho = 'img/m/pink-floyd-60.jpeg';
		  $pinkfloyd_titulo = 'Pink Floyd';
		  $pinkfloyd_ano = 1965;
		  $pinkfloyd_alt = 'Pink Floyd';
		  $card4_60 = $flip->flip($pinkfloyd_caminho, $pinkfloyd_titulo, $pinkfloyd_ano, $pinkfloyd_alt,4);
		  
		  
		  $thebeatles_caminho = 'img/m/the-beatles-60.jpg';
		  $thebeatles_titulo = 'The Beatles';
		  $thebeatles_ano = 1960;
		  $thebeatles_alt = 'The Beatles';
		  $card5_60 = $flip->flip($thebeatles_caminho, $thebeatles_titulo, $thebeatles_ano, $thebeatles_alt,5);
		 
		  
		  $thejackson5_caminho = 'img/m/the-jackson-5-60.jpeg';
		  $thejackson5_titulo = 'The Jackson 5';
		  $thejackson5_ano = 1964;
		  $thejackson5_alt = 'The Jackson 5';
		  $card6_60 = $flip->flip($thejackson5_caminho, $thejackson5_titulo, $thejackson5_ano, $thejackson5_alt,6);
		  
		  //----------------------------------------------------------------------------------------//

		  // Década de 1970 // 
		  
		  $acdc_caminho = 'img/m/ac-dc-70.jpg';
		  $acdc_titulo = 'AC/DC';
		  $acdc_ano = 1973;
		  $acdc_alt = 'AC/DC';
		  $card7_70 = $flip->flip($acdc_caminho, $acdc_titulo, $acdc_ano, $acdc_alt,7);
		  
		  $eltonjohn_caminho = 'img/m/elton-john-70.jpg';
		  $eltonjohn_titulo = 'Elton John';
		  $eltonjohn_ano = 1970;
		  $eltonjohn_alt = 'Elton John';
		  $card8_70 = $flip->flip($eltonjohn_caminho, $eltonjohn_titulo, $eltonjohn_ano, $eltonjohn_alt,8);
		  
		  $queen_caminho = 'img/m/queen-70.jpeg';
		  $queen_titulo = 'Queen';
		  $queen_ano = 1971;
		  $queen_alt = 'Queen';
		  $card9_70 = $flip->flip($queen_caminho, $queen_titulo, $queen_ano, $queen_alt,9);
		  
		  //--------------------------------------------------------------------------------------------//

		  // Década de 1980 // 
		  
		  $madonna_caminho = 'img/m/madonna-like-a-virgin-80.jpg';
		  $madonna_titulo = 'Madonna';
		  $madonna_ano = 1983;
		  $madonna_alt = 'Madonna';
		  $card10_80 = $flip->flip($madonna_caminho, $madonna_titulo, $madonna_ano, $madonna_alt,10);
		  
		  $michaeljackson_caminho = 'img/m/michael-jackson-80.jpg';
		  $michaeljackson_titulo = ' Michael Jackson';
		  $michaeljackson_ano = 1979;
		  $michaeljackson_alt = 'Michael Jackson';
		  $card11_80 = $flip->flip($michaeljackson_caminho, $michaeljackson_titulo, $michaeljackson_ano, $michaeljackson_alt,11);
		  
		  $thepolice_caminho = 'img/m/the-police-80.jpg';
		  $thepolice_titulo = 'The Police';
		  $thepolice_ano = 1977;
		  $thepolice_alt = ' The Police';
		  $card12_80 = $flip->flip($thepolice_caminho, $thepolice_titulo, $thepolice_ano, $thepolice_alt,12);
		  
		  //--------------------------------------------------------------------------------------------//
	?>
    
    <div class="row">
		<h2>Década de 1950</h2>
		<div class="row">
			<div class="col">
				
				<?= $card1_50 ?>
	            <!-- Modal -->
	            <div id="modal" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoMusicas(1); ?>
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
		              <?php echo $flip->conteudoMusicas(2); ?>
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
		              <?php echo $flip->conteudoMusicas(3); ?>
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
		              <?php echo $flip->conteudoMusicas(4); ?>
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
		              <?php echo $flip->conteudoMusicas(5); ?>
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
		              <?php echo $flip->conteudoMusicas(6); ?>
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
		              <?php echo $flip->conteudoMusicas(7); ?>
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
		              <?php echo $flip->conteudoMusicas(8); ?>
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
		              <?php echo $flip->conteudoMusicas(9); ?>
	            	</div>   
	            </div>
			</div>
		</div>

        <!-- --- 80S --- -->
		<h2 class="mt-5">Década de 1980</h2>
		<div class="row">
			<div class="col">
				<?= $card10_80 ?>
				<!-- Modal -->
	            <div id="modal10" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoMusicas(10); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card11_80 ?>
				<!-- Modal -->
	            <div id="modal11" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoMusicas(11); ?>
	            	</div>   
	            </div>
			</div>

			<div class="col">
				<?= $card12_80 ?>
				<!-- Modal -->
	            <div id="modal12" class="modal">

	              <!-- Modal conteúdo -->
	              	<div class="modal-content">
		              <span class="close">&times;</span>
		              <?php echo $flip->conteudoMusicas(12); ?>
	            	</div>   
	            </div>
			</div>
		</div>
	
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

	<div class="container">
		
	</div>
	
	<div class="body"><div class="title">PLAYLIST
 </div>
  
  <ul >
    <li class="music">01.The Beatles - Love Me Do</br>
        <audio controls >
            <source src="music/01-The-Beatles-Love-Me-Do.ogg" type="audio/ogg">
            <source src="music/01-The-Beatles-Love-Me-Do.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">02.Elvis Presley - Jailhouse Rock</br>
        <audio controls >
            <source src="music/02-Jailhouse-Rock.ogg" type="audio/ogg">
            <source src="music/02-Jailhouse-Rock.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">03.The Beatles - Twist and shout</br>
        <audio controls >
            <source src="03-Twist-and-shout.ogg" type="audio/ogg">
            <source src="03-Twist-and-shout.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">04.Elvis Presley - Can't Help Falling In Love</br>
	    <audio controls >
            <source src="04-Cant-Help-Falling-In-Love.ogg" type="audio/ogg">
            <source src="04-Cant-Help-Falling-In-Love.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">05.Michael Jackson - Don't Stop Til You Get Enough</br>
        <audio controls >
            <source src="05-Dont-Stop-Til-You-Get-Enough.ogg" type="audio/ogg">
            <source src="05-Dont-Stop-Til-You-Get-Enough.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">06.The Police - Every Breath You Take</br>
        <audio controls >
            <source src="06-every-breath-you-take.ogg" type="audio/ogg">
            <source src="06-every-breath-you-take.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
		
    </li>
	
    <li class="music">07.Michael Jackson - Thriller</br>
        <audio controls >
            <source src="07-Thriller.ogg" type="audio/ogg">
            <source src="07-Thriller.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">08.The Police - King Of Pain</br>
        <audio controls >
            <source src="08-king-of-pain.ogg" type="audio/ogg">
            <source src="08-king-of-pain.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">09.AC/DC - Shoot To Thrill</br>
        <audio controls >
            <source src="09-Shoot To Thrill.ogg" type="audio/ogg">
            <source src="09-Shoot To Thrill.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
    <li class="music">10.Pink Floyd - Shine On You Crazy Diamond</br>
        <audio controls >
            <source src="10-shine-on-you-crazy-diamond.ogg" type="audio/ogg">
            <source src="10-shine-on-you-crazy-diamond.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>	
	
	
	<li class="music">11.Pink Floyd - Time</br>
        <audio controls >
            <source src="11-Time.ogg" type="audio/ogg">
            <source src="11-Time.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
	<li class="music">12.Queen - We Will Rock You</br>
        <audio controls >
            <source src="12-We-Will-Rock-You.ogg" type="audio/ogg">
            <source src="12-We-Will-Rock-You.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
	<li class="music">13.Queen - We Are The Champions</br>
        <audio controls >
            <source src="13-We-Are-The-Champions.ogg" type="audio/ogg">
            <source src="13-We-Are-The-Champions.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
	<li class="music">14.AC/DC - Hells Bells</br>
        <audio controls >
            <source src="14-Hells-Bells.ogg" type="audio/ogg">
            <source src="14-Hells-Bells.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
	
	<li class="music">15.Bee Gees - How Deep Is Your Love</br>
        <audio controls >
            <source src="15-How-Deep-Is-Your-Love.ogg" type="audio/ogg">
            <source src="15-How-Deep-Is-Your-Love.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
    
    <li class="music">16.Bee Gees - Night Fever</br>
        <audio controls >
            <source src="16-Night-Fever.ogg" type="audio/ogg">
            <source src="16-Night-Fever.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
    
    <li class="music">17.Madonna - Crazy For You</br>
        <audio controls >
            <source src="17-Crazy-For-Your.ogg" type="audio/ogg">
            <source src="17-Crazy-For-You.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
    
    <li class="music">18.Madonna - Like A Virgin</br>
        <audio controls >
            <source src="18-Like-A-Virgin.ogg" type="audio/ogg">
            <source src="18-Like-A-Virgin.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
    
    <li class="music">19.The Jackson Five - A B C</br>
        <audio controls >
            <source src="19-A-B-C.ogg" type="audio/ogg">
            <source src="19-A-B-C.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>
    
    <li class="music">20.The Jackson Five - I Want You Back</br>
        <audio controls >
            <source src="20-I-Want-You-Back.ogg" type="audio/ogg">
            <source src="20-I-Want-You-Back.mp3" type="audio/mp3">
    Your browser does not support the audio element.
        </audio>
    </li>

	<?php  

		require_once 'includes/flipcard.php';

		  $flip = new FlipCard();
		  
		  // Década de 1950 //  
		  
		  $beegees_caminho = 'img/c/bee-gees-50.jpg';
		  $beegees_titulo = 'Bee Gees';
		  $beegees_ano = 1950;
		  $beegees_alt = 'Bee Gees';
		  $card1_50 = $flip->flip($beegees_caminho, $beegees_titulo, $beegees_ano, $beegees_alt,1);
		  
		  
		  $elvispresley_caminho = 'img/c/elvis-presley-50.jpg';
		  $elvispresley_titulo = 'Elvis Presley';
		  $elvispresley_ano = 1950;
		  $elvispresley_alt = 'Elvis Presley';
		  $card2_50 = $flip->flip($elvispresley_caminho, $elvispresley_titulo, $elvispresley_ano, $elvispresley_alt,2);
		 
		 
		  $littlerichard_caminho = 'img/c/little-richard-50.jpg';
		  $littlerichard_titulo = 'Little Richard';
		  $littlerichard_ano = 1950;
		  $littlerichard_alt = 'Little Richard';
		  $card3_50 = $flip->flip($littlerichard_caminho, $littlerichard_titulo, $littlerichard_ano, $littlerichard_alt,3);
		  
		  //----------------------------------------------------------------------------------------------------------//
		  
		  
		  // Década de 1960 //
		  
		  $janisjoplin_caminho = 'img/c/janis-joplin-60.jpg';
		  $janisjoplin_titulo = 'Janis Joplin';
		  $janisjoplin_ano = 1960;
		  $janisjoplin_alt = 'Janis Joplin';
		  $card4_60 = $flip->flip($janisjoplin_caminho, $janisjoplin_titulo, $janisjoplin_ano, $janisjoplin_alt,4);
		  
		  
		  $pinkfloyd_caminho = 'img/c/pink-floyd-60.jpg';
		  $pinkfloyd_titulo = 'Pink Floyd';
		  $pinkfloyd_ano = 1960;
		  $pinkfloyd_alt = 'Pink Floyd';
		  $card5_60 = $flip->flip($pinkfloyd_caminho, $pinkfloyd_titulo, $pinkfloyd_ano, $pinkfloyd_alt,5);
		 
		  
		  $thebeatles_caminho = 'img/c/the-beatles-60.jpg';
		  $thebeatles_titulo = 'The Beatles';
		  $thebeatles_ano = 1960;
		  $thebeatles_alt = 'The Beatles';
		  $card6_60 = $flip->flip($thebeatles_caminho, $thebeatles_titulo, $thebeatles_ano, $thebeatles_alt,6);
		  
		  //----------------------------------------------------------------------------------------//
		  
		  // Década de 1970 // 
		  
		  $acdc_caminho = 'img/c/ac-dc-70.jpg';
		  $acdc_titulo = 'ACDC';
		  $acdc_ano = 1970;
		  $acdc_alt = 'ACDC';
		  $card7_70 = $flip->flip($acdc_caminho, $acdc_titulo, $acdc_ano, $acdc_alt,7);
		  
		  
		  $eltonjohn_caminho = 'img/c/elton_john-70.jpg';
		  $eltonjohn_titulo = 'Elton John';
		  $eltonjohn_ano = 1970;
		  $eltonjohn_alt = 'Elton John';
		  $card8_70 = $flip->flip($eltonjohn_caminho, $eltonjohn_titulo, $eltonjohn_ano, $eltonjohn_alt,8);
		  
		  
		  $queen_caminho = 'img/c/queen-70.jpg';
		  $queen_titulo = 'Queen';
		  $queen_ano = 1978;
		  $queen_alt = 'Queen';
		  $card9_70 = $flip->flip($queen_caminho, $queen_titulo, $queen_ano, $queen_alt,9);
		  
		  //--------------------------------------------------------------------------------------------//
		  
		  // Década de 1980 // 
		  
		  $madonna_caminho = 'img/c/madonna-like-a-virgin-80.jpg';
		  $madonna_titulo = 'Madonna';
		  $madonna_ano = 1980;
		  $madonna_alt = 'Madonna';
		  $card10_80 = $flip->flip($madonna_caminho, $madonna_titulo, $madonna_ano, $madonna_alt,10);
		  
		  
		  $michaeljackson_caminho = 'img/c/michael-jackson-80.jpg';
		  $michaeljackson_titulo = 'Michael Jackson';
		  $michaeljackson_ano = 1980;
		  $michaeljackson_alt = 'Michael Jackson';
		  $card11_80 = $flip->flip($michaeljackson_caminho, $michaeljackson_titulo, $michaeljackson_ano, $michaeljackson_alt,10);
		  
		  
		  $thepolice_caminho = 'img/c/the-police-80.jpg';
		  $thepolice_titulo = 'The Police';
		  $thepolice_ano = 1980;
		  $thepolice_alt = 'The Police';
		  $card12_80 = $flip->flip($thepolice_caminho, $thepolice_titulo, $thepolice_ano, $thepolice_alt,11);
		  
		  //-----------------------------------------------------------------------------------------------------------------------//   
		  
	?>

	<div class="container">
		<div class="col"></div>
		<div class="col">
			
		</div>
		<div class="col"></div>
	</div>
</body>

</html>