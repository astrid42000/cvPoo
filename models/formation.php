<?php

class Formation{
    private $annee;
    private $libelle;
    private $lieu;
    private $diplome;
    private $id_formation;
  

    /**
     * Formation constructor.
     * @param $annee
     * @param $libelle
     * @param $lieu
     * @param $diplome
     * @param $id_formation
     */
    public function __construct($annee, $libelle, $lieu, $diplome, $id_formation = null)
    {
        $this->annee = $annee;
        $this->libelle = $libelle;
        $this->lieu= $lieu;
        $this->diplome = $diplome;
        $this->id_formation = $id_formation;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle= $libelle;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param mixed $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getDiplome()
    {
        return $this->diplome;
    }


    /**
     * @param mixed $diplome
     */
    public function setDiplome($diplome)
    {
        $this->diplome= $diplome;
    }

    /**
     * @return mixed
     */
    public function getId_formation()
    {
        return $this->id_formation;
    }

    /**
     * @param mixed $id_formation
     */
    public function setId_formation($id_formation)
    {
        $this->id_formation = $id_formation;
    }


}
