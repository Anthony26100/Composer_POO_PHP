<?php
namespace App;

class Zebra extends Animals implements CanWalk
{
    public function getNoise(): string
    {
        return "hiiiii";
    }
}