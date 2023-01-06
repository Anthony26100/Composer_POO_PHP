<?php
namespace App;

class Fish extends Animals
{
    public function getNoise(): string
    {
        return "bloubloublou";
    }
}