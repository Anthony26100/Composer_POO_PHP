<?php
namespace App;

class ClownFish extends Animals implements CanSwin
{
    public function getNoise(): string
    {
        return "bloubloublou";
    }
}