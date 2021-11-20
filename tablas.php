<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilos.css">
    <title>Matematicas</title>
</head>
<body>
    <h1>Tablas de multiplicar</h1>
    <p>ingrese un numero del 1 a 10  y se mostrara la tabla de multiplicar</p>
    <hr>
    <form action="#" method="POST">
        <label for="">ingrese el numero</label>
        <input type="text" name="num">
        <hr>
        <input class="boton" type="submit" value="ver tabla de multiplicacion">




  </form>


    <?php
  
   
    $n= $_POST['num'];
    if($n<1 or $n>10){
        echo "no has ingresado un numero entre el 1 al 10";
    }
    else{
       echo "<h4> TABLA DEL $n </h4";
        $i=1;
        while ($i <= 10) {
            echo " $n x $i= ".$n*$i."<br>";
            $i++;
        }
    }

     ?>

     
        




     

    
</body>
</html>