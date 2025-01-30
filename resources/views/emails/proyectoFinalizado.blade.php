<?php
    $ruta = App\Http\Controllers\UserController::ruta(1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="color:black">
        <p> Estimado/a estudiante.</p>
        <p>
            Se le informa que el proyecto por horas sociales <br> 
            <b> {{ $details['proyecto']->nombre }} </b> ha <b style="color:green">FINALIZADO</b> satisfactoriamente.
        </p>
        <p>
            Agradecemos su participación. Cualquier consulta sobre el proceso comunicarse con el coordinador de proyecto.<br>
        </p>
        <br>
        <p>
            Atentamente, Centro de Servicio Social.
        </p><br><br>
    </div>
    
    <p style="color:gray">
        Este es un correo autogenerado por el sistema. <br>
        Centro de servicio social, UCA | css@uca.edu.sv <br>
        Tel. 2210-6600 ext.427 | 2210-6680
    </p>
</body>
</html>