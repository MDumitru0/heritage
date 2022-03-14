<?php

class Cabane extends Batiment
{

    public function __construct($nom, $superficie, $type, $nbEtage)
    {
        parent::__construct($nom, $superficie, $type, $nbEtage);
    }


}