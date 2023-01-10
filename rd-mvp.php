<!-- TOPO --> 
<?php require_once('conteudo/topo.php') ?>
<div>
        <h3>Rank Dos MVP</h3>
        <table>
            <thead>
                <tr>
                    <td>Top</td>
                    <td>Nickname</td>
                    <td>MVP</td>
                    <td>SVP</td>
                    <td>Abate</td>
                    <td>Partida</td>
                </tr>

                <?php foreach(array_slice($listarMvp,0,10) as $linha): ?>
                    
                    <tr>
                        <th><?php echo $top = $top + 1?></th> 
                        <th><?php echo $linha['nickMembro'] ?></th>
                        <th><?php echo $linha['mvpJg'] ?></th>
                        <th><?php echo $linha['SVP'] ?></th>
                        <th><?php echo $linha['abateMvp'] ?></th>  
                        <th><?php echo $linha['partidaMvp'] ?></th>
                    </tr>
                    
                <?php endforeach ?>

            </thead>
            
        </table>
         
    </div>