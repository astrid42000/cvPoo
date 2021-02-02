<?php

class Competence{
    private $intitule;
    private $note;
    private $id_competence;

  

    /**
     * Competence constructor.
     * @param $intitule
     * @param $note
     * @param $id_competence
     */
    public function __construct($intitule, $note, $id_competence = null)
    {
        $this->intitule = $intitule;
        $this->note = $note;
        $this->id_competence = $id_competence;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
     return $this->note;
    }

    /**
     * @return mixed
     */
    public function getNoteImage()
    {
      $note=$this->note;

        switch ($note) {
            case 0:
                echo "";
                break;
            case 1:
                echo ('<img src=views/uploads/etoile1.png>');
                break;
            case 2:
                echo ('<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>');
                break;
            case 3:
                echo ('<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>');
                break;
            case 4:
                echo ('<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>');
                break;
            case 5:
                echo ('<img src=src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>'.'<img src=views/uploads/etoile1.png>');
                break;
        }
    }
      

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note= $note;
    }

    /**
     * @return mixed
     */
    public function getId_competence()
    {
        return $this->id_competence;
    }

    /**
     * @param mixed $id_competence
     */
    public function setId_competence($id_competence)
    {
        $this->id_competence = $id_competence;
    }

    
}