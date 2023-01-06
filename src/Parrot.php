<?php
namespace App;

class Parrot extends Animals implements CanFly
{
    public function getNoise(): string
    {
        return "coco";
    }
}