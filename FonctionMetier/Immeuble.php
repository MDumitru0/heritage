<?php

class Immeuble extends Batiment
{
    private $ascenseur;
    private $nbAppartement;
    private $garage;

    public function __construct($nom, $superficie, $type, $nbEtage, $ascenseur = false, $appartement = false)
    {
        parent::__construct($nom, $superficie, $type, $nbEtage);
    }

    /**
     * @return mixed
     */
    public function getAscenseur()
    {
        return $this->ascenseur;
    }

    /**
     * @return mixed
     */
    public function getNbAppartement()
    {
        return $this->nbAppartement;
    }

    /**
     * @return mixed
     */
    public function getGarage()
    {
        return $this->garage;
    }

    /**
     * @param mixed $garage
     */
    public function setGarage($garage): void
    {
        $this->garage = $garage;
    }




}