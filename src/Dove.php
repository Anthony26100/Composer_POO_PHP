<?php
namespace App;

class Dove extends Animals implements CanFly
{
    public function getNoise(): string
    {
        return "Rou Rouuu";
    }
}