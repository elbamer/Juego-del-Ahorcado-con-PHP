<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="stilojuego.css">
    </head>
    <header><h1>BIENVENIDO AL JUEGO DEL AHORCADO</h1></header>
 <?php
        function inicializarPalabra($longPalabra,&$solucion) {
            for ($i=0;$i<$longPalabra;$i++){
            $solucion[$i]="X";
            }
        }
        function solucionar($letra, $escondida, &$solucion)
        {
            for($i=0; $i<strlen($escondida); $i++)
            {
                if($letra==$escondida[$i])
                    $solucion[$i]=$letra;
            }
        }
        /*$escondida = "fanta";
        $solucion="";
        if ($_POST){
            $intentos=$_POST["intentos"];
            $letra=$_POST["letra"];
            $solucion=$_POST["solucion"];
            solucionar($letra, $escondida, $solucion);
            //$sol=$_POST["solucion"];
            //solucionar($escondida,$sol,$letra);
          }
        else {
           $intentos=0;
           inicializarPalabra(strlen($escondida), $solucion);
        }  */
     ?>
    <body>
        <form action = "index.php" method = "post">
            <label>Palabra Oculta: <?=$solucion?></label>
            <p>Letra: <input type = "text" name ="letra"></input></p>
            <p>Intentos: <input type = "text" name = "intentos" value="<?=  ++$intentos ?>"</input></p>
            <input type = "submit" value = "Jugar"></input>
            <input type="text" name="solucion" value="<?=$solucion?>"/>
        </form>
        <div>
            <img src = "images/img<?=$intentos ?>.jpg" ></img>
        </div>

    </body>
</html>
