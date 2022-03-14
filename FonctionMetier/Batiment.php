<?php

class Batiment implements BatiStructure
{
    private $nom;
    private $superficie;
    private $type;
    private $nbEtage;

    /**
     * @param $nom
     * @param $superficie
     * @param $type
     * @param $nbEtage
     */
    public function __construct($nom, $superficie, $type, $nbEtage)
    {
        $this->nom = $nom;
        $this->superficie = $superficie;
        $this->type = $type;
        $this->nbEtage = $nbEtage;
    }


    public function getNbEtage()
    {
        // TODO: Implement getNbEtage() method.
    }

    public function getType()
    {
        // TODO: Implement getType() method.
    }

    public function getSuperficie()
    {
        // TODO: Implement getSuperficie() method.
    }

    public function getNom()
    {
        // TODO: Implement getNom() method.
    }


}