<!-- TOPO -->
<?php require_once('conteudo/topo.php'); ?>
<div>
        <h3>Rank De X1</h3>
        <table>
            <thead>
                <tr>
                    <td>Top</td>
                    <td>Pontos</td>
                    <td>Nickname</td>
                    <td>Vitória</td>
                    <td>Derrota</td>
                    <td>Partida</td>
                </tr>
                
                <?php foreach(array_slice($listarRdx1,0,10) as $linha): ?>
                    
                    <tr>
                        <th><?php echo $top = $top + 1?></th> 
                        <th ><?php echo $linha['pontuacaoRdx1'] ?></th>
                        <th ><?php echo $linha['nickMembro'] ?></th>
                        <th ><?php echo $linha['vitoriaRdx1'] ?></th>
                        <th ><?php echo $linha['derrotaRdx1'] ?></th>
                        <th ><?php echo $linha['partidaRdx1'] ?></th>  
                    </tr>
                    
                <?php endforeach ?>
             
            </thead>
            
        </table>
    </div>
