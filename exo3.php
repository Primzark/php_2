
<?php

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
?>