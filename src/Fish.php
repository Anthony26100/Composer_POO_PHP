<?php
namespace App;

class Fish extends Animals implements CanSwin
{
    public function getNoise(): string
    {
        return "bloubloublou";
    }
}