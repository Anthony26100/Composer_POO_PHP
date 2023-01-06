<?php
namespace App;

class BubbleFish extends Animals implements CanSwin
{
    public function getNoise(): string
    {
        return "bloubloublou";
    }
}