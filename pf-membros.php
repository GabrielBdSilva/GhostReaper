<!-- Topo -->
<?php require_once('conteudo/topo.php')?>



<body>
    <h3>PERFIL</h3>
    <div class="PF-MEMBROS">
        <!-- preciso fazer quando clicar no membro
 expecifico puxar somente ele com suas informaçoes (id) -->
 <!-- < ?php foreach(array_slice($listarMembro,5,1)  as $linha): ?> -->
    <?php
        foreach ($listarMembro as $key => $value) ?>
        
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
        
    <?php endforeach ?>
    </div>


</body>

        
    
