<?php
namespace App;

class Parrot extends Animals
{
    public function getNoise(): string
    {
        return "coco";
    }
}