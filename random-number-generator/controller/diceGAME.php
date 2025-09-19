<?php
class diceGAME {
    private $animals;

    public function __construct($jsonFile) {
        $this->animals = json_decode(file_get_contents($jsonFile), true);
    }

    public function rollDICE() {
        $number = rand(1, 6);
        $animal = $this->animals[$number];
        return [
            "dice"   => $number,
            "animal" => $animal["name"],
            "image"  => $animal["image"]
        ];
    }
}
?>

