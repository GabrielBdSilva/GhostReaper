<!-- TOPO -->
<?php require_once('conteudo/topo.php')?>
<div>
        <h3>Rank De DogTag</h3>
        <table>
            <thead>
                <tr>
                    <td>Top</td>            
                    <td>Nick</td>
                    <td>Max. Dia</td>
                    <td>Total</td>                  
                </tr>
                
                <?php foreach(array_slice($listarDogtag,0,10) as $linha):?>
                    <tr>                       
                        <th><?php echo $top = $top + 1?></th> 
                        <th><?php echo $linha['nickMembro']?></th>
                        <th><?php echo $linha['maxDia']?></th>
                        <th><?php echo $linha['totalDgt']?></th>               
                    </tr>
                <?php endforeach?>
              
            </thead>
            
        </table>
         
    </div>
    
