<?php

namespace App;

class Enclosure {
    // Tableau animals
    private array $animals;

    public function __construct()
    {
        $this->animals = [];
    }

    // Ajoute un animal au tableau
    public function addAnimal($animal): void
    {
        $this->animals[] = $animal;
    }

    // Renvoie une chaîne de caractères qui affiche le nom et le bruit de chaque animal de l'enclos.
    public function __toString(): string
    {
        $sortie = "";
        foreach ($this->animals as $animal) {
            $sortie .= $animal->getName() . " makes a noise " . $animal->noise() . "\n";
        }
        return $sortie;
    }
}