<?php 
// Creiamo un array contenente le partite di basket di un’ipotetica tappa
// del calendario.
    $partite = 
    [
        [
            "squadra di casa" => "Menz",
            "squadra ospite"  => "Cark",
            "punti casa" =>  rand(0 , 100),
            "punti ospite" => rand(0 , 100),
        ],
        [
            "squadra di casa" => "Oland",
            "squadra ospite"  => "Holid",
            "punti casa" => rand(0 , 100),
            "punti ospite" => rand(0 , 100),
        ],
        [
            "squadra di casa" => "Ganz",
            "squadra ospite"  => "Panet",
            "punti casa" => rand(0 , 100),
            "punti ospite" => rand(0 , 100),
        ],
    ];

    var_dump($partite);

    for($i = 0; $i < count($partite); $i++) {
       echo "<h1>" . $partite[$i]["squadra di casa"] . " - " . $partite[$i]["squadra ospite"] . " " . $partite[$i]["punti casa"] . " | " . $partite[$i]["punti ospite"] ."</h1>";
    };

?>
