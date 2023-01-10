<!-- TOPO -->
<?php require_once('conteudo/topo.php')?>

<?php
    $id = -1; 
    $pagina = (isset($_GET['page']) ? $_GET['page'] : 0);

    if(!array_key_exists($pagina, $listarMembro)){
        $pagina = 0;
    }
    foreach(array_slice($listarMembro,$pagina,1)  as $linha):
?>        
<?php endforeach ?>

<body>

<h3>PERFIL</h3>
    <div class="PF-MEMBROS">

        
        <div>        
                <div class="pf-membro">
                    <img src=<?php echo $linha['fotoMembro'] ?> alt="player1">
                    <h1><?php echo $linha['nickMembro']?></h1>
                    <img src=<?php echo $linha['pttMembro']?> alt="Patente">
                </div>        
                
                    <ul class="pf-redes">
                        <li><a href="#"><img src="img/icon/iconfacebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/iconinstagram.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/iconyoutube.svg" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/twitter.png" alt=""></a></li>
                    </ul>
                  
        </div>
        
    
    </div>


<h3>MEMBROS</h3>


    <div class="MEMBROS">
<?php foreach(array_slice($listarMembro,0,10)  as $linha): ?>

<?php $id += 1 ?>



<?php foreach ($listarMembro as $key => $value){
        echo '<a href="?page='.$key.'"></a>';
    }
?>
<!--fim teste -->

        
        <div  class="membro">
        
            <div class="patent">
                <h2><?php echo $linha['cargoMembro'] ?></h2>
                <img src=<?php echo $linha['pttMembro']?> alt="Patente">
            </div>
            
            
                <div class="nick">
                    <a href="membros.php?page=<?php echo $id ?>"><img src=<?php echo $linha['fotoMembro'] ?> alt="player1"></a>
                    <h1><?php echo $linha['nickMembro']?></h1>
                </div>
            

            <div class="rank">
                <div>
                    <h1>TOP</h1>
                    <p><?php echo $linha['mvp']?></p>
                    <p><?php echo $linha['rdx1']?></p>
                    <p><?php echo $linha['dogtag']?></p>
                </div>

                <div class="siglas">
                    <br>
                    <p>MVP</p>
                    <p>RDX1</p>
                    <p>DogTag</p>
                </div>
            
            </div>
           
        </div>
         
<?php endforeach ?>

</body>