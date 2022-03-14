<?php

class Maison extends Batiment implements BatiHome
{
    private $garage;
    private $cheminee;

    public function __construct($nom, $superficie, $type, $nbEtage, $garage = false, $cheminee = false)
    {
        parent::__construct($nom, $superficie, $type, $nbEtage);
    }

    public function getCheminee()
    {
        // TODO: Implement getCheminee() method.
    }

    public function getGarage()
    {
        // TODO: Implement getGarage() method.
    }


}