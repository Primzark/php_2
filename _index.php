<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
     <input type="checkbox" id="dark_mode" name="dark_mode">
    <label for="dark_mode">dark mode</label>
    <div id="myElement">
        <p>Hello World</p>
    </div>
    
</body>
</html>




<?php
$age= 22;

if ($age >= 18) {
    echo "Vous êtes un adulte"
    } else {
        echo "Vous êtes mineur"
        }

       $magnitude = 8

       switch ($magnitude) {
        case 1:
            echo "Micro-séisme impossible à ressentir."
            break;
            case 2:
                echo "Micro-séisme impossible à ressentir mais enregistré par des instruments."
                break;
                case 3:
                    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti." 
                    break;
                    case 4:
                        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégâts."
                        break;
                        case 5:
                            echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes."
                            break;
                            case 6:
                                echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre."
                                break;
                                case 7:
                                    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance."
                                    break;
                                    case 8:
                                        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres."
                                        break;
                                        case 9:
                                            echo "Séisme capable de tout détruire sur une très vaste zone."
                                            break;
                                            default;
                                            echo "Magnitude inconnue"
                                            break;
                                            }




                $number = 7;
                if ($number % 2 == 0) {
                    echo "Le nombre est pair";
                    } else {
                        echo "Le nombre est impair";
                        }


                                            




                

        ?>


