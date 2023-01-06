<?php
namespace App;
require __DIR__ . '/vendor/autoload.php';
// Tableau qui stock les animaux
$animals= [new ClownFish("Poisson clown"), new Zebra("Zebre")];

// Fish
for($i=1; $i<=5; $i++)
{
    $animals[] = new Fish("Poisson$i");
}

//  BubbleFish
for($i = 1; $i <= 3 ; $i++)
{
    $animals[] = new BubbleFish("Poisson bubble$i");
}

// CatFish
for($i = 1; $i <= 2 ; $i++)
{
    $animals[] = new CatFish("Poisson chat$i");
}

// Elephant
for($i = 1; $i <= 2 ; $i++)
{
    $animals[] = new Elephant("Elephant$i");
}

// Parrot
for($i = 1; $i <= 10 ; $i++)
{
    $animals[] = new Parrot("Perroquet$i");
}

// Dove
for($i = 1; $i <= 2 ; $i++)
{
    $animals[] = new Dove("Colombe$i");
}


foreach ($animals as $animal)
{
    echo $animal->getName()." make a noise ". $animal->noise(). "\n";
}

foreach ($animals as $animal)
{
    Zoo::addAnimal($animal);
}
echo Zoo::visitTheZoo();
#var_dump($animals);
