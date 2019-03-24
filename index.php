<!DOCTYPE HTML>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Projeto Retrold</title>
<link  href="css/estilo.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" >
<meta name="viewport" content="width=device-width">
<script src="js/jquery.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.js"type="text/javascript"></script>

<style>
    body{
        background-image: url('img/img-vetor/backdrop5.jpg');
    }
    p{
        font-size: 40px;
    }

    
    #logo2{
        margin-left: auto;
        margin-right: auto;
        display: flex;
        width: 65%;
    }
    #sub2{
        text-align: center;
        font-size: 200%;
    }
</style>

</head>

<body>

    <div style="background-color: rgba(233, 236, 239,1); padding: 20px;" class="jumbotron jumbotron-fluid">
        <div class="container">
            <img id='logo2' src="img/img-vetor/logo.png">
            <p id="sub2">Revivendo os bons tempos.</p>
        </div>
    </div>
    
    <div>
        <?php include_once 'menu.php';?>
    </div>
	
	
</body>

</html>