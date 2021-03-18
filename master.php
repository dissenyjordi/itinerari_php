<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- estils cSS de Bootstrap - START -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <!-- estils cSS de Bootstrap - END -->

            <!-- Font Awesome - START -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- Font Awesome - END -->

            <!-- estils pròpis - START -->
            <style type="text/css">
                section{
                    width: 100%;
                    display: block;   
                }
                .left{
                    text-align: right;
                    vertical-align: middle;
                }
                .input-group-text {
                    border-top-right-radius: 0;
                    border-bottom-right-radius: 0;
                    border-right: none;
                }
                .form-select {
                    width: 100%;
                    padding: .375rem 2.25rem .375rem .75rem;
                    border: 1px solid #ced4da;
                    border-radius: .25rem;
                    color: #495057;
                }
                .btn-primary {
                    width: 100%;
                }
            </style>
        <title>Sprit 6</title>
        <!-- Nivell 1
        Exercici 1:
        Programa la funció "resta" que, donats dos paràmetres ens retorni la resta dels dos números.

        Exercici 2:
        Programa una lògica que, donat un número qualsevol(per exemple,la teva edat) ens digui si és 
        parell o imparell mitjançant un missatge per pantalla.

        Exercici 3:
        Agafa la lògica de l'exercici 2 i encapsulala en una funció de nom parell_o_imparell. 
        Invoca aquesta funció per a comprovar que funciona correctament.

        Exercici 4:
        Programa un bucle que compti fins a 10, mostrant cada número per pantalla. -->

        <!-- Nivell 2
        Exercici 1:
        Per jugar a "l'amagatall"  se'ns ha demanat un programa que compti fins a 10. 
        Però la persona que comptarà és una mica tramposa y ho farà comptant de dos en dos. 
        Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.

        Exercici 2:
        Imagina't que volem que conti fins a un número diferent de 10. 
        Programa la funció per a que el final del compte estigui parametritzat.

        Exercici 3:
        Per a prevenir oblits al utilitzar la nostra meravellosa funció "amagatall" 
        establirem un paràmetre per defecte a 10 en la funció que s'encarrega de fer aquest compte. -->

        <!-- Nivell 3
        Exercici 1:
        Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. 
        Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.

        Exercici 2:
        Imagina que som a una botiga on es ven:
            Xocolata: 1 euro
            Xiclets: 0.50 euros
            Carmels: 1.50 euros
        Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. 
        Per exemple, que si comprem:
        2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint 
        els subtotals a un total, tal que així,
        funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2+0.5+1.5
        Sent per tant el total, 4.

        Exercici 3:
        La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
        Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal 
        forma que poguem invocar la funció per a un número concret. -->

    </head>
    <body class="row m-0 bg justify-content-center align-items-center vh-100">
        <?php
            //Establece el valor de una directiva de configuración
            ini_set('display_errors', 0); // Determina si los errores deberían ser impresos en pantalla como parte de la salida o si deberían ocultarse al usuario.
            ini_set('display_startup_errors', 0);
            //Activamos todas las notificaciones de error posibles
            error_reporting(E_ALL);
        ?>

        <!-- nivell 1 - exercici 1. START -->
        <section>
        <?php
                    $num11 = $_POST["num11"];
                    $num12 = $_POST["num12"];
                function resta(){
                    global $num11, $num12;
                    return $num11 - $num12;
                }

        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 1</h1><br>
                    <h3>Exercici 1</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Programa la funció "resta" que, donats dos paràmetres ens retorni la resta dels dos números.</p>
                                <br>
                                    <form name="form1" method="post" action="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon11">Número</span>
                                            <input type="number" class="form-control" required placeholder="del 0 al &infin;" aria-label="Número" name="num11" id="num11" aria-describedby="introdueix el primer número">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon12">Número</span>
                                            <input type="number" class="form-control" required placeholder="del 0 al &infin;" aria-label="Número" name="num12" id="num12" aria-describedby="introdueix el segon número">
                                        </div>
                                        <button type="submit" name="calcular" id="calcular" class="btn btn-primary mb-3" onclick="resta()">Resta</button> 
                                    </form>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 1 - exercici 2. Resultats -->
                                Primer número escollit:<strong><?php echo $num11;?></strong><br>
                                Segon número escollit:<strong><?php echo $num12;?></strong><br>
                                El resultat és: <strong><?php echo resta(); ?></strong>   
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 1 - exercici 1. END -->
        
<!-- nivell 1 - exercici 2. START -->
        <section>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 1</h1><br>
                    <h3>Exercici 2</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Programa una lògica que, donat un número qualsevol (per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.</p>
                                <br>
                                    <form name="form2" method="post" action="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon3">Número</span>
                                            <input type="number" class="form-control" required placeholder="del 0 al &infin;" aria-label="Número" name="numParImpar" id="numParImpar" aria-describedby="introdueix el primer número">
                                        </div>
                                        <button type="submit" name="calcular2" id="calcular2" class="btn btn-primary mb-3">Parell o imparell</button> 
                                    </form>
        <?php
                $numParImpar = $_POST["numParImpar"];
                    if($numParImpar%2==0){
                        $resultat = "El número " . $numParImpar . " és <strong>parell</strong>.";
                    }else{
                        $resultat = "El número " . $numParImpar . " és <strong>imparell</strong>.";
                    }
        ?>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 1 - exercici 2. Resultats -->
                                Número introduit és: <strong><?php echo $numParImpar; ?></strong>.<br>
                                <strong><?php echo $resultat; ?></strong>  
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 1 - exercici 2. END -->      
        
        <!-- nivell 1 - exercici 3. START -->
        <section>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 1</h1><br>
                    <h3>Exercici 3</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Programa una lògica que, donat un número qualsevol (per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.</p>
                                <br>
                                    <form name="form3" method="post" action="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon4">Número</span>
                                            <input type="number" class="form-control" required placeholder="del 0 al &infin;" aria-label="Número" name="numParImpar2" id="numParImpar2" aria-describedby="introdueix el primer número">
                                        </div>
                                        <button type="submit" name="calcular3" id="calcular3" class="btn btn-primary mb-3" onclick="parell_o_imparell($numParImpar2)">Parell o imparell</button> 
                                    </form>
        <?php
                    $numParImpar2 = $_POST["numParImpar2"];
                function parell_o_imparell($numParImpar2){
                    global $numParImpar2;
                        if($numParImpar2%2==0){
                            return "El número " . $numParImpar2 . " és <strong>parell</strong>.";
                        }else{
                            return "El número " . $numParImpar2 . " és <strong>imparell</strong>.";
                        }
                }
        ?>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 1 - exercici 3. Resultats -->
                                Número introduit és: <strong><?php echo $numParImpar2; ?></strong>.<br>
                                <strong><?php echo parell_o_imparell($numParImpar2); ?></strong>  
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 1 - exercici 3. END -->

        <!-- nivell 1 - exercici 4. START -->
        <section>
        <?php
                    $numComptar = $_POST["numComptar"];
            function comptar(){
                for ($i=0; $i<=10; $i++){
                    echo "Número: <strong>" . $i . "</strong><br>";
                }
            }
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 1</h1><br>
                    <h3>Exercici 4</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Programa un bucle que compti fins a 10, mostrant cada número per pantalla.</p>
                                <br>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 1 - exercici 4. Resultats -->
                                <?php comptar(); ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 1 - exercici 4. END -->

        <!-- nivell 2 - exercici 1. START -->
        <section>
        <?php
            function comptar2(){
                for ($i=0; $i<=10; $i=$i+2){
                    echo "Número: <strong>" . $i . "</strong><br>";
                }
            }
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 2</h1><br>
                    <h3>Exercici 1</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Per jugar a "l'amagatall" se'ns ha demanat un programa que compti fins a 10.<br>
                                Però la persona que comptarà és una mica tramposa y ho farà comptant de dos en dos.<br> 
                            Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 2 - exercici 1. Resultats -->
                            <?php comptar2(); ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 2 - exercici 1. END -->

        <!-- nivell 2 - exercici 2. START -->
        <section>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 2</h1><br>
                    <h3>Exercici 2</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Imagina't que volem que conti fins a un número diferent de 10.<br> 
                            Programa la funció per a que el final del compte estigui parametritzat.</p>
                                <br>
                                    <form name="form22" method="post" action="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon22">Número</span>
                                            <input type="number" class="form-control" required placeholder="introdueix un número diferent a 10, exemple 11" aria-label="Número" name="num22" id="num22" aria-describedby="introdueix un número diferent a 10">
                                        </div>
                                        <button type="submit" name="calcular22" id="calcular22" class="btn btn-primary mb-3" onclick="diferent_10()">Diferent a 10</button> 
                                    </form>
        <?php
                    $num22 = $_POST["num22"];
                    isset($num22);
                    $resultat22=0;
                function diferent_10(){
                    global $num22, $resultat22;
                        if($num22==null || $num22==""){
                            $resultat22 = 0;
                        }elseif($num22==10){
                            $resultat22 = $num22 - 1;
                        }else{
                            $resultat22 = $num22;
                        }
                    return $resultat22;
                }
                function calcular22(){
                    global $resultat22;
                    for ($i=0; $i<=$resultat22; $i++){
                        echo "Número: <strong>" . $i . "</strong><br>";
                    }
                }
        ?>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 2 - exercici 2. Resultats -->
                                Número introduit és: <strong><?php echo diferent_10(); ?></strong>.<br>
                                <strong><?php echo calcular22(); ?></strong>  
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 2 - exercici 2. END -->

        <!-- nivell 2 - exercici 3. START -->
        <section>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 2</h1><br>
                    <h3>Exercici 3</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Per a prevenir oblits al utilitzar la nostra meravellosa funció "amagatall" establirem un paràmetre per defecte a 10 en la funció que s'encarrega de fer aquest compte.</p>
                                <br>
                                    <form name="form22" method="post" action="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon23">Número</span>
                                            <input type="number" class="form-control" placeholder="introdueix un número diferent a 10" aria-label="Número" name="num23" id="num23" aria-describedby="introdueix un número diferent a 10">
                                        </div>
                                        <button type="submit" name="diferent23" id="diferent23" class="btn btn-primary mb-3" onclick="diferent23()">Diferent a 10</button> 
                                    </form>
        <?php
                    $num23 = $_POST["num23"];
                    isset($num23);
                    $resultat23;
                function diferent23(){
                    global $num23, $resultat23;
                        if($num23==null || $num23==""){
                            $resultat23 = 10;
                        }else{
                            $resultat23 = $num23;
                        }
                    return $resultat23;
                }
                function amagatall23($num23 = 10){
                    global $resultat23;
                    for ($i=0; $i<=$resultat23; $i++){
                        echo "Número: <strong>" . $i . "</strong><br>";
                    }
                }
        ?>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 2 - exercici 3. Resultats -->
                                Número introduit és: <strong><?php echo diferent23(); ?></strong>.<br>
                                <strong><?php echo amagatall23(); ?></strong>  
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 2 - exercici 3. END -->

        <!-- nivell 3 - exercici 1. START -->
        <section>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 3</h1><br>
                    <h3>Exercici 1</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. 
        Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <h4>Tots els <strong>J.J.O.O.</strong> d'Hivern i d'Estiu</h4>
                            <?php echo jjoo(); ?>
                            <br>
                            <h4>Només J.J.O.O. <strong>Estiu</strong></h4>
                            <?php echo jjoo_estiu(); ?>
                            <br>
                            <h4>Només J.J.O.O. <strong>Hivern</strong></h4>
                            <?php echo jjoo_hivern(); ?>
                            <!-- nivell 3 - exercici 1. Resultats -->
        <?php
                function jjoo_estiu(){
                    for ($i=1960; $i<=2016; $i=$i+4){
                        echo "Any: <strong>" . $i . "</strong><br>";
                    }
                }
                function jjoo_hivern(){
                    for ($i=1960; $i<=1992; $i=$i+4){
                        echo "Any: <strong>" . $i . "</strong><br>";
                    }
                    for ($j=1994; $j<=2016; $j=$j+4){
                        echo "Any: <strong>" . $j . "</strong><br>";
                    }
                }
                
                function jjoo(){
                    for ($i=1960; $i<=1992; $i=$i+4){
                        echo "J.J.O.O. d'Hivern, any: <strong>" . $i . "</strong><br>";
                        echo "J.J.O.O. d'Estiu, any: <strong>" . $i . "</strong><br>";
                    }
                    for ($j=1994; $j<=2016; $j=$j+4){
                        echo "J.J.O.O. d'Hivern, any: <strong>" . $j . "</strong><br>";
                        echo "J.J.O.O. d'Estiu, any: <strong>" . ($j+2) . "</strong><br>";
                    }
                }
        ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 3 - exercici 1. END -->

        <!-- nivell 3 - exercici 2. START -->
        <section>
        <?php
                $numXocolata = $_POST["num31"];
                isset($num31);
                $numXiclets = $_POST["num32"];
                isset($num32);
                $numCaramels = $_POST["num33"];
                isset($num33);
                
                $preuTotalXocolata;
                $preuTotalXiclets;
                $preuTotalCaramels;
                $preuTotal;
                
                $preuXocolata=1;
                $preuXiclets=0.50;
                $preuCaramels=1.50;
                
                function Xocolata($numXocolata, $preuXocolata){
                    global $numXocolata, $preuXocolata, $preuTotalXocolata;
                    return $preuTotalXocolata = $numXocolata * $preuXocolata;
                }
                
                function Xiclets($numXiclets, $preuXiclets){
                    global $numXiclets, $preuXiclets, $preuTotalXiclets;
                    return $preuTotalXiclets = $numXiclets * $preuXiclets;
                }
                
                function Caramels($numCaramels, $preuCaramels){
                    global $numCaramels, $preuCaramels, $preuTotalCaramels;
                    return $preuTotalCaramels = $numCaramels * $preuCaramels;
                }
                
                function total(){
                    //global $preuTotal, $preuTotalXocolata, , $preuTotalCaramels;
                    $preuTotalXocolata2 = Xocolata($numXocolata, $preuXocolata);
                    $preuTotalXiclets2 = Xiclets($numXiclets, $preuXiclets);
                    $preuTotalCaramels2 = Caramels($numCaramels, $preuCaramels);
                    return $preuTotal = $preuTotalXocolata2 + $preuTotalXiclets2 + $preuTotalCaramels2;
                }
                
                function sumaProductes(){
                    global $numXocolata, $numXiclets, $numCaramels;
                    return  $totalProductes = $numXocolata + $numXiclets + $numCaramels;
                }
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 3</h1><br>
                    <h3>Exercici 2</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Imagina que som a una botiga on es ven:
                                <ul>
                                    <li>Xocolata: 1 euro</li>
                                    <li>Xiclets: 0.50 euros</li>
                                    <li>Caramels: 1.50 euros</li>
                                </ul>
                                Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. 
                                Per exemple, que si comprem:<br>
                                2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint 
                                els subtotals a un total, tal que així,
                                funció(2 xocolates) + funció(1 de xiclets) + funció(1 de caramels) = 2+0.5+1.5
                                Sent per tant el total, 4.</p>
                                <br>
                                    <form name="form32" method="post" action="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon11">Xocolates</span>
                                            <input type="number" class="form-control" required placeholder="del 0 al &infin;" aria-label="Número" name="num31" id="num31" aria-describedby="Quantes Xocolates vols comprar?">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon12">Xiclets</span>
                                            <input type="number" class="form-control" required placeholder="del 0 al &infin;" aria-label="Número" name="num32" id="num32" aria-describedby="Quants Xiclets vols comprar?">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon11">Caramels</span>
                                            <input type="number" class="form-control" required placeholder="del 0 al &infin;" aria-label="Número" name="num33" id="num33" aria-describedby="Quants Caramels vols comprar?">
                                        </div>
                                        <button type="submit" name="total" id="total" class="btn btn-primary mb-3" onclick="total()">Preu total</button> 
                                    </form>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 3 - exercici 2. Resultats -->
                                Has introduït un total de <strong><?php echo sumaProductes(); ?></strong> productes per comprar:<br>
                                <strong><?php echo $numXocolata;?></strong> Xocolates<br>
                                <strong><?php echo $numXiclets;?></strong> Xiclets<br>
                                <strong><?php echo $numCaramels;?></strong> Caramels<br>
                                L'import total a pagar és de: <strong><?php echo total(); ?> €</strong>   
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 3 - exercici 2. END -->

        <!-- nivell 3 - exercici 3. START -->
        <section>
        <?php
            //Criba de Eratóstenes
            //Obtener las lista de números a evaluar
                if (isset($_POST["num333"])) {
                    $numLimit = $_POST["num333"];
                    }
                
                function eratostenes(){
                    global $numLimit;
                        for($i=2;$i<$numLimit;$i++)
                        {
                          $num[$i]=true;
                        }

            //Hacer 2 el primer número primo
                    $num[2]=true;

            //Recorrer los números y para cada uno
                    for ($n=2;$n<$numLimit;$n++){
                      //Si es primo recorrer los múltiplos y marcarlos como no primo
                        if ($num[$n]){
                            for ($i=$n*$n;$i<$numLimit;$i+=$n){
                                $num[$i] = false;
                            }
                        }
                    }

            //Muestro la lista de los primos 
                    for ($n = 2; $n < $numLimit; $n++){
                        if ($num[$n]){
                            echo $n."<br>";
                        }
                    }
                }
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 3</h1><br>
                    <h3>Exercici 3</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat.<br>
                            Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal 
        forma que poguem invocar la funció per a un número concret.</p>
                                <br>
                                    <form name="form33" method="post" action="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon11">Número</span>
                                            <input type="number" class="form-control" required placeholder="del 2 al &infin;" aria-label="Número" name="num333" id="num333" aria-describedby="introdueix un número del 2 al &infin;">
                                        </div>
                                        <button type="submit" name="total" id="total" class="btn btn-primary mb-3" onclick="eratostenes()">Criba d'Eratóstenes</button> 
                                    </form>
                            <hr>
                                <h2 class="alert-heading">Resultat:</h2>
                                <!-- nivell 3 - exercici 3. Resultats -->
                                Has introduït el número: <strong><?php echo $numLimit; ?></strong>.<br>
                                LLista de nombre <strong>primers</strong> :<br>
                                <strong><?php echo eratostenes(); ?></strong>   
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 3 - exercici 3. END -->

    <!-- Optional JavaScript; Popper and Bootstrap JS - START -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; Popper and Bootstrap JS - END -->
    </body>
</html>