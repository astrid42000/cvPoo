<?php

class User{
    private $email;
    private $mot_de_passe;
    private $prenom;
    private $id_user;
  

    /**
     * User constructor.
     * @param $email
     * @param $mot_de_passe
     * @param $prenom
     * @param $id_user
     */
    public function __construct($email, $mot_de_passe, $prenom, $id_user = null)
    {
        $this->email = $email;
        $this->mot_de_passe = $mot_de_passe;
        $this->prenom= $prenom;
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMot_de_passe($mot_de_passe)
    {
        $this->mot_de_passe= $mot_de_passe;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;
    }


}
