<?php
namespace App;

class CatFish extends Animals implements CanSwin
{
    public function getNoise(): string
    {
        return "bloubloublou";
    }
}