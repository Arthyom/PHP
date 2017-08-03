<?php 
    $tablaA = array(3,8,15,16);

    echo "
    <table border='1'>
        <tr> <th>Numero</th>  <th>Cubo</th> </tr>
        ";
   

    for ($i=1; $i <= 20 ; $i++) { 
        echo '<tr>';
        if( ! in_array($i,$tablaA) ){
            echo '<td>',$i, '</td>',  '<td>',pow($i,3), '</td> ';
        }
        echo'</tr>';
    }
    echo'</table>';
    


?>