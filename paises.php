<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="paises.php" method='post'>
        <select name="paices[]" multiple='multiple'>
            <option>Francia</option>
            <option>Italia</option>
            <option selected='selected'>Alemania</option>
            <option>Rusia</option>
        </select><br>

        <input type="submit" value='Enviar'>

        <div>

<?php

                 // nombrar las ciudades 
    $ciudades['Francia'][0] = "París";
    $ciudades['Francia'][1] = "Lyon";
    $ciudades['Francia'][2] = "Marsella";
    $ciudades['Italia'][0] = "Roma";
    $ciudades['Italia'][1] = "Milán";
    $ciudades['Italia'][2] = "Nápoles";
    $ciudades['Alemania'][0] = "Berlín";
    $ciudades['Alemania'][1] = "Múnich";
    $ciudades['Alemania'][2] = "Fráncfort";
    $ciudades['Rusia'][0] = "Moscú";
    $ciudades['Rusia'][1] = "San Petersburgo";
    $ciudades['Rusia'][2] = "Nizhny-Novgorod";

    // conseguir el pais 
    $pais = $_POST['paices'][0];

    for ($i=0; $i <3 ; $i++) { 
        echo $ciudades[$pais][$i].'<br>';
    }    
?>


        </div>


    </form>
</body>
</html>