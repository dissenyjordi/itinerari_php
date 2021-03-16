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
            </style>
        <title>Sprit 5</title>
        <!-- Nivell 1 
            Exercici 1:
            Defineix una variable de cada tipus: 
            integer,double,string i boolean. Després, imprimeix-les per pantalla.
        
            Exercici 2:
            Crea una altra variable string. Després:
            Imprimeix per pantalla el tamany(longitud) del dos strings.
            Imprimeix per pantalla el dos strings però en ordre invers de caràcters.
            Imprimeix la concatenació dels dos strings.
        
            Exercici 3:
            Crea una constant que inclogui el teu nom i imprimeix-la per pantalla. -->
        
        <!-- Nivell 2
            Exercici 1:
            Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

            Exercici 2:
            Afegeix un valor més a l'array que conté 3 integers.

            Exercici 3:
            Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla. -->
        
        <!-- Nivell 3
            Exercici 1:
            Imprimeix per pantalla(valor a valor) l'array resultant del nivell anterior.

            Exercici 2
            Escriure un programa PHP que realitzi lo següent: 
            declarar dues variables X e Y de tipus int, dues variables N i M de tipous double i assigna a cada una un valor. 
            A continuació, mostra per pantalla, per a X e Y:

            El valor de cada variable
                La suma 
                La resta 
                El producte  
                La divisió 
                El mòdul
                per a N i M, lo mateix.

            I per a totes les variables(X,Y,N,M):
                El doble de cada variable
                La suma de totes les variables
                El producte de totes les variables -->

    </head>
    <body class="row m-0 bg justify-content-center align-items-center vh-100">

        <!-- nivell 1 - exercici 1. START -->
        <section>
        <?php
            $num_Int = 2584;
            $num_Float = 3.14159;
            $name_Str = "Hello, world!";
            $x_Bool = true;
            $y_Bool = false;
            $name_Str2 = "Bon dia pel mati a la vila del pingui";
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
                            <p class="mb-0">Defineix una variable de cada tipus:<br>
                                <ul>
                                    <li>integer,</li>
                                    <li>double,</li>
                                    <li>string i</li>
                                    <li>boolean.</li>
                                </ul>Després, imprimeix-les per pantalla.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 1 - exercici 1. RESULTATS -->
                            <?php
                                echo "<p>variable de cada tipus INTEGER: <strong>" . $num_Int . "</strong><br>";
                                echo "variable de cada tipus DOUBLE: <strong>" . $num_Float . "</strong><br>";
                                echo "variable de cada tipus STRING: <strong>" . $name_Str . "</strong><br>";
                                echo "variable de cada tipus BOOLEAN (TRUE): <strong>" . $x_Bool . "</strong><br>";
                                echo "variable de cada tipus BOOLEAN (FALSE): <strong>" . $y_Bool . "</strong></p><br>";
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 1 - exercici 1. END -->
        
        <!-- nivell 1 - exercici 2. START -->
        <section>
        <?php
            $name_Str2 = "Bon dia pel mati a la vila del pingui";
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 1</h1><br>
                    <h3>Exercici 2</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Crea una altra variable string.<br>
                            Després:<br>
                            Imprimeix per pantalla el tamany(longitud) del dos strings.<br>
                            Imprimeix per pantalla el dos strings però en ordre invers de caràcters.<br>
                            Imprimeix la concatenació dels dos strings.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 1 - exercici 2. Resultats -->
                            <?php
                                echo "contingut de STRING 1: <strong>" . $name_Str . "</strong><br>";
                                echo "contingut de STRING 2: <strong>" . $name_Str2 . "</strong><br>";
                                echo "tamany(longitud) de STRING 1: <strong>" . strlen($name_Str) . "</strong><br>";
                                echo "tamany(longitud) de STRING 2: <strong>" . strlen($name_Str2) . "</strong><br>";
                                echo "ordre invers STRING 1: <strong>" . strrev($name_Str) . "</strong><br>";
                                echo "ordre invers STRING 2: <strong>" . strrev($name_Str2) . "</strong><br>";
                                echo "concatenació dels dos STRINGS: <strong>" . $name_Str . " , " . $name_Str2 . "</strong><br>";
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 1 - exercici 2. END -->      
        
        <!-- nivell 1 - exercici 3. START -->
        <section>
        <?php
            define("name_Author", "Jordi Puigoriol", true); //constant. no distingeixi entre majúscules i minúscules
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 1</h1><br>
                    <h3>Exercici 3</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Crea una constant que inclogui el teu nom i imprimeix-la per pantalla.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 1 - exercici 3. Resultats -->
                            <?php
                                echo "constant que inclogui el teu nom i imprimeix-la per pantalla: <strong>" . name_Author . "</strong>";
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 1 - exercici 3. END -->

        <!-- nivell 2 - exercici 1. START -->
        <section>
        <?php
            $matrizInt_01 = array(1, 2, 3, 5, 8);
            $matrizInt_02 = array(13, 21, 34);
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
                            <p class="mb-0">Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 2 - exercici 1. Resultats -->
                            <?php
                                echo "Array 1: <strong><br>";
                                print_r($matrizInt_01);
                                echo "</strong><br>";
                                echo "Array 2: <strong><br>";
                                print_r($matrizInt_02);
                                echo "</strong>";
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 2 - exercici 1. END -->

        <!-- nivell 2 - exercici 2. START -->
        <section>
        <?php
            array_push($matrizInt_02, 55);
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 2</h1><br>
                    <h3>Exercici 2</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Afegeix un valor més a l'array que conté 3 integers.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 2 - exercici 2. Resultats -->
                            <?php
                                echo "Nous valor a l'Array 2 (integer): <strong>55</strong><br>";
                                echo "Array 2: <strong><br>";
                                print_r($matrizInt_02);
                                echo "</strong>";
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 2 - exercici 2. END -->

        <!-- nivell 2 - exercici 3. START -->
        <section>
        <?php
            $resultat = array_merge($matrizInt_01, $matrizInt_02);
        ?>
            <div class="row">
                <div class="col left">
                    <h1>Nivell 2</h1><br>
                    <h3>Exercici 3</h3>
                </div>
                <div class="col">
                    <div class="col-sm-8">
                        <div class="alert alert-success" role="alert">
                            <h3>Explicació:</h3>
                            <p class="mb-0">Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 2 - exercici 3. Resultats -->
                            <?php
                                echo "Valors del nou Array(integer):<br><strong>";
                                print_r($resultat);
                                echo "</strong><br>tamany(longitud) del nou Array: <strong>";
                                echo count($resultat);
                                echo "</strong>";
                            ?>
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
                            <p class="mb-0">Imprimeix per pantalla(valor a valor) l'array resultant del nivell anterior.</p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 3 - exercici 1. Resultats -->
                            <?php
                            $matrizLength = count($resultat);
                                for($x = 0; $x < $matrizLength; $x++) {
                                    echo "<strong>" . $resultat[$x] . "</strong><br>";
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
            $X_int = 89;
            $Y_int = 144;
            $N_flt = 3.40;
            $M_flt = 1.17549;
            
            $X_flt = (float)$X_int;
            $Y_flt = (float)$Y_int;
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
                            <p class="mb-0">Escriure un programa PHP que realitzi lo següent:<br>
                                declarar dues variables X e Y de tipus int, <br>dues variables N i M de tipus double i assigna a cada una un valor.<br> 
                                A continuació, mostra per pantalla, per a X e Y:<br>
                                El valor de cada variable
                                <ul>
                                    <li>La suma</li>
                                    <li>La resta</li>
                                    <li>El producte</li>
                                    <li>La divisió</li>
                                    <li>El mòdul</li>
                                </ul>
                                per a N i M, lo mateix.<br>
                                I per a totes les variables(X,Y,N,M):
                                <ul>
                                    <li>El doble de cada variable</li>
                                    <li>La suma de totes les variables</li>
                                    <li>El producte de totes les variables</li>
                                </ul></p>
                            <hr>
                            <h2 class="alert-heading">Resultat:</h2>
                            <!-- nivell 3 - exercici 1. Resultats -->
                            <?php
                                echo "<br>valor de X: <strong>" . $X_int . "</strong>";
                                echo "<br>valor de Y: <strong>" . $Y_int . "</strong>";
                                echo "<br>suma de 89 + 144: <strong>" . ($X_int + $Y_int) . "</strong>";
                                echo "<br>resta de 144 - 89: <strong>" . ($Y_int - $X_int) . "</strong>";
                                echo "<br>divisió de 144 / 89: <strong>" . ($Y_int / $X_int) . "</strong>";
                                echo "<br>mòdul de Y % X: <strong>" . ($Y_int % $X_int) . "</strong>";

                                echo "<br>";
                                echo "<br>valor de N: <strong>" . $N_flt . "</strong>";
                                echo "<br>valor de M: <strong>" . $M_flt . "</strong>";
                                echo "<br>suma de 3.40 + 1.17549: <strong>" . ($N_flt + $M_flt) . "</strong>";
                                echo "<br>resta de 3.40 - 1.17549: <strong>" . ($N_flt - $M_flt) . "</strong>";
                                echo "<br>divisió de 3.40 / 1.17549: <strong>" . ($N_flt / $M_flt) . "</strong>";
                                echo "<br>mòdul de 3.40 % 1.17549: <strong>" . ($N_flt % $M_flt) . "</strong>";

                                echo "<br>";
                                echo "<br>valor de X x 2: <strong>" . ($X_int * 2) . "</strong>";
                                echo "<br>valor de Y x 2: <strong>" . ($Y_int * 2) . "</strong>";
                                echo "<br>valor de N x 2: <strong>" . ($N_flt * 2) . "</strong>";
                                echo "<br>valor de M x 2: <strong>" . ($M_flt * 2) . "</strong>";

                                echo "<br>";
                                echo "<br>valor de X: <strong>" . $X_flt . "</strong>";
                                echo "<br>valor de Y: <strong>" . $Y_flt . "</strong>";
                                echo "<br>valor de N: <strong>" . $N_flt . "</strong>";
                                echo "<br>valor de M: <strong>" . $M_flt . "</strong>";

                                echo "<br>suma de totes les variables: X + Y + N + M: <strong>" . ($X_flt + $Y_flt + $N_flt + $M_flt) . "</strong>";
                                echo "<br>producte de totes les variables: X x Y x N x M: <strong>" . ($X_flt * $Y_flt * $N_flt * $M_flt) . "</strong>";
                            ?>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- nivell 3 - exercici 2. END -->
        


        <!-- exercici 3 - nivell 2 -->
        <?php
        

            
        ?>
        </section>

    <!-- Optional JavaScript; Popper and Bootstrap JS - START -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; Popper and Bootstrap JS - END -->
    </body>
</html>