<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Inicio PHP</title>
</head>
<body>


<div class='row'>
<div class='container col-md-offset-5 col-sm-2'>
<div class='panel panel-default '>

    <div class='panel-heading'>
       <span class='glyphicon glyphicon-ok'></span>
       Log In 
    </div>

    <div class='panel-body'>
        <div class=''>
            <form action="log.php" method='post' class='' >
            <div class='form-group' >
                <label class='control-label'>Usuario</label>
                <input type="text" name='usuario' class='form-control' >
            </div>      
            <div class='form-group' >
                <label class='control-label'>Contraseña</label>
                <input class='form-control' type="password" name='contras' >
            </div>
            <div class='form-group' ><input type="submit" value='Enviar' class='btn btn-block btn-warning' ></div>
            </form>
    </div>
</div>
</div>



    <div class='panel panel-default'>
    <div class='panel-heading'>
        <span class='glyphicon glyphicon-info-sign'></span>
        Informacion de Sesion
    </div>

  
  

    <div class='panel panel-body'>

   
<?php
            // crear una session para guardar los intentos de sesion
                   session_start();

    if( ! isset($_SESSION['Fallidos']) ){
        $_SESSION['Fallidos'] = -1;
        $_SESSION['Fusuaros'] = Array();
        $_SESSION['Fcontras'] = Array();
    }
   

    // conseguir los datos necesios
    $usuario = $_POST['usuario'];
    $contras = $_POST['contras'];

    // verificar que el usuario y la contraseña son corresctas
    if ( ($usuario == 'gomez' && $contras =='1234')  && (!empty($usuario)  && !empty($contras)) )
         echo '<h1>Bienvenido a la pagina principal</h1>';
    else
    {
        $_SESSION['Fallidos'] += 1;
        array_push($_SESSION['Fusuaros'],$usuario);
        array_push($_SESSION['Fcontras'],$contras);
    }

    echo '<div class="well text-center">Intentos fallidos: <i><strong> '. $_SESSION['Fallidos'].'</strong></i></div><br>';
        
        echo '<div class="well text-center">Usuarios fallidos</div>';
        echo '<p class="text-center">';
        foreach ($_SESSION['Fusuaros'] as $usr) 
            echo '<strong>'. $usr.' </strong>';
        echo '</p>';
        

        echo '<br>';

        echo '<br> <div class="well text-center">Contraseñas fallidas</div>';
        echo '<p class="text-center">';
        foreach ($_SESSION['Fcontras'] as $cnt) 
             echo '<strong>'.$cnt.' </strong>';
        echo '</p>';
        ?>
    
    


</div>

 </div>
</div>







</body>
</html>