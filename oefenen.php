<?php

$kleuren = [
    "Groen" => "#00ff00",
    "Rood" => "#ff0000",
    "Blauw" => "#0000ff",
    "Geel" => "#ffff00",
    "Roze" => "#ff00ff",
    "Cyaan" => "#00ffff",
    "Wit" => "#ffffff",
    "Paars" => "#AF00FF",
    "Turqoise" => "#00FFB7",
    "Oranje" => "#FF8C00",
];

$namen = [
    "Rafiu",
    "Salah",
    "Fabian",
    "Soufyan",
    "Nassim",
    "Tugra",
    "Guusje",
    "Luka",
];

class Alien{
    public $Kleur;
    public $KleurHex;
    public $Naam;

    public function __construct($Kleur = "Onbekend", $Naam = "Onbekend"){
        $this->Kleur = $Kleur;
        $this->Naam = $Naam;

        if ($Kleur === "Onbekend") {
            $this->Kleur = array_rand($GLOBALS['kleuren']);
        }

        if ($Naam === "Onbekend") {
            $index = array_rand($GLOBALS['namen']);
            $this->Naam = $GLOBALS['namen'][$index];
        }

        $this->KleurHex = $GLOBALS['kleuren'][$this->Kleur];
        echo "<p style='color: {$this->KleurHex}'>
        Een nieuwe alien is gemaakt: {$this->Naam} met kleur {$this->Kleur}
      </p>";
    }
};

$var = 0;
while ($var <= 100) {
    $var += 1;
    $alien = new Alien();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
body {
background-color: #000;
color: #fff;
}
</style>
</body>
</html>