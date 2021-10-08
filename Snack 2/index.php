<?php
    // Passare come parametri GET name, mail e age e verificare
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    $check = [];
    // (cercando i metodi che non conosciamo nella documentazione) che name
    // sia più lungo di 3 caratteri,
    // che mail contenga un punto e una chiocciola e che age sia un numero.
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    if (strlen($name) <= 3) {
        echo "il nome ha pochi caratteri";
    }
    else {
        echo $name;
        $check[0] =  $name;
    }

    if(strpos($mail, "@") && strpos($mail, ".")) {
        echo "<br>" . $mail;
        $check[1] = $mail;
    }
    else {
        echo "<br>" . "email non valida";
    }

    if(is_numeric($age) == true) {
        echo "<br>" . $age;
        $check[2] = $age;
    }
    else {
        echo "<br>" . "non è un numero";
    }

    var_dump($check);

    if (count($check) == 3) {
        echo "Accesso Riuscito";
    }
    else {
        echo "Accesso Negato";
    }
?>