<?php

class Experience{
    private $titre;
    private $description;
    private $date_debut;
    private $date_fin;
    private $lieu;
    private $id_experience;
  

    /**
     * Experience constructor.
     * @param $titre
     * @param $description
     * @param $date_debut
     * @param $date_fin
     * @param $lieu
     * @param $id_experience
     */
    public function __construct($titre, $description, $date_debut, $date_fin, $lieu, $id_experience = null)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->lieu = $lieu;
        $this->id_experience = $id_experience;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDate_debut()
    {
        return $this->date_debut;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDate_debut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getDate_fin()
    {
        return $this->date_fin;
    }


    /**
     * @param mixed $date_fin
     */
    public function setDate_fin($date_fin)
    {
        $this->date_fin= $date_fin;
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
        $this->lieu= $lieu;
    }

    /**
     * @return mixed
     */
    public function getId_experience()
    {
        return $this->id_experience;
    }

    /**
     * @param mixed $id_experience
     */
    public function setId_experience($id_experience)
    {
        $this->id_experience = $id_experience;
    }


}
