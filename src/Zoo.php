<?php
namespace App;

class Zoo
{
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function getAquarium(): ?Enclosure
    {
        return self::$aquarium;
    }

    public static function getAviary(): ?Enclosure
    {
        return self::$aviary;
    }

    public static function getFence(): ?Enclosure
    {
        return self::$fence;
    }

    // Ajout des animaux à leur enclos
    public static function addAnimal($animal): void {
        if ($animal instanceof CanSwin) {
            if (self::$aquarium === null) {
                self::$aquarium = new Enclosure();
            }
            self::$aquarium->addAnimal($animal);
        } else if ($animal instanceof CanFly) {
            if (self::$aviary === null) {
                self::$aviary = new Enclosure();
            }
            self::$aviary->addAnimal($animal);
        } else if ($animal instanceof CanWalk) {
            if (self::$fence === null) {
                self::$fence = new Enclosure();
            }
            self::$fence->addAnimal($animal);
        }
    }

    // Pour visiter les enclos
    public static function visitTheZoo(): void {
        if (self::$aquarium !== null) {
            echo "Aquarium:\n" . self::$aquarium . "\n";
       }

        if(self::$aviary !==null)
        {
            echo "Aviary:\n" . self::$aviary . "\n";
        }

        if (self::$fence !==null)
        {
            echo "Fence:\n" . self::$fence . "\n";
        }
    }
}