<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora_edadexacta.css">
    <title>Edad exacta</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>
    
    <div class="main-frame-cal">
    <form action="edad_exacta.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
            <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
    </form>

    <?php

    const constante_18 = 18;
    const constante0 = 0;
    
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        if ($edad_actual >= constante_18) {
            echo "<h2> Es mayor de edad </h2>";
        }
        else if ($edad_actual < constante_18 && $edad_actual > constante0){
            echo "<h2>es menor de edad</h2>";
        } else {
            echo "<h2> no valido </h2>";
        }
        echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;

    }

    ?>

    </div>
</body>
</html>