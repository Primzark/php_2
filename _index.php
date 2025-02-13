<?php
$age= 22;

if ($age >= 18) {
    echo "Vous êtes un adulte"
    } else {
        echo "Vous êtes mineur"
        }

 $isEasy = true;

 if ($isEasy) {
    echo "C'est facile"
    } else {
        echo "C'est difficile"
        }
    
    echo ($isEasy) ? "C'est facile" : "C'est difficile";

    $age = 22;
    $gender = "homme";

    if ($gender == "homme" && $age >= 18) { 
    echo "Vous êtes un homme adulte";
} elseif ($gender == "homme" && $age < 18) {
    echo "Vous êtes un homme mineur";
} elseif ($gender == "femme" && $age >= 18) {
    echo "Vous êtes une femme adulte";
} else {
    echo "Vous êtes une femme mineure";
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
                                            




                

        ?>


