<?php
namespace App;

class Elephant extends Animals implements CanWalk
{
    public function getNoise(): string
    {
        return "toooooout";
    }
}