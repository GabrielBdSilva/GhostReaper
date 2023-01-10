<?php 
    //header("Access-Control-Allow-Origin: *");
    //header("Access-Control-Allow-Header","Origin, X-request-Width, Content-Type, Accept");
    //header("Access-Control-Allow-Methods','GET, POST,PATCH,DELETE");

    require_once('admin/site.php');
    $Site = new Site();
    $listarRdx1 = $Site->ListarRdx1();
    $listarMvp = $Site->ListarMvp();
    $listarDogtag = $Site->listarDogtag();
    $listarMembro = $Site->ListarMembro();
    $top = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Ghost Reaper</title>
    <link rel="icon" type="image/png" href="img/patenteX.png" /> <!--foto la de cima  -->
</head>
<body page='lista'>
<header>
    <div class="topo">
        <h1>Ghost Reaper</h1>
    </div>
    
            
                <div  class="topoM">                   
                    <button class="abrir-menu"></button>
                    <nav class="menu">
                    <button class="fechar-menu"></button>
                        
                        <ul> 
                            <!-- <div class="menu"> -->
                                <li><a href="index.php">Home</a></li>
                                <li><a href="rd-x1.php">RDx1</a></li>
                                <li><a href="rd-mvp.php">MVP</a></li>
                                <li><a href="rd-dogtag.php">DogTag</a></li>
                                <li><a href="membros.php">Membros</a></li>
                            <!-- </div>  -->
                            
                        </ul>        
                    </nav>        
                </div> 
                 


            
</header>
<script type='text/javascript' src='js/javascript.js'></script>
</body>
</html>
