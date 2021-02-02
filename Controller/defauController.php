<?php

class defauController{
    private $experienceManager;
    private $formationManager;
    private $competenceManager;
    private $userManager;

    /**
     * defauController constructor.
     * @param $experienceManager
     * @param $formationManager
     * @param $competenceManager
     * @param $userManager
     */
    public function __construct()
    {
        $this->experienceManager = new experienceManager();
        $this->competenceManager = new competenceManager();
        $this->formationManager = new formationManager();
        $this->userManager = new UserManager();
    }

    /*fonction recuperation données des 3 tables et renvoi accueil*/
    public function home(){
        $experiences=$this->experienceManager->allExperiences();
        $competences= $this->competenceManager->allCompetences();
        $formations= $this->formationManager->allFormations();
        require 'views/accueil.php';
    }

    /*fonction recuperation données des 3 tables et renvoi page session*/
    public function session(){
        $experiences=$this->experienceManager->allExperiences();
        $competences= $this->competenceManager->allCompetences();
        $formations= $this->formationManager->allFormations();
        require 'views/session.php';
    }

    
    
    /*fonction de connexion*/
    public function connect(){
        
        //verification des données formulaires si vide ou pas
        $errors=[];
        if(empty($_POST['email']) OR empty($_POST['mot_de_passe'])){
        $errors[]='erreur d\'identifiants';
        }

        if (empty($_POST['mot_de_passe'])){
        $errors[]="il manque le mot de passe";
        }
      
        if (empty($_POST['email'])){
        $errors[]="il manque le pseudo";}

        if(count($errors)!= 0){
            require 'views/login.php';
            echo ('<h2> Erreurs lors de l\'envoi du formulaire</h2><ul>');
                foreach($errors as $error){
                    echo ('<ol>'.$error.'</ol>');
                }
                echo('</ul>');
        }else{
       
        //si formulaire OK appel de la fonction connectUser du manager
            $errors2=$this->userManager->connectUser();

            if (count($errors2)===0){ 
                $experiences=$this->experienceManager->allExperiences();
                $competences= $this->competenceManager->allCompetences();
                $formations= $this->formationManager->allFormations();

                require 'views/session.php';

            }else{
                require 'views/login.php';
        
                echo ('<h2> Erreurs lors de l\'envoi du formulaire</h2><ul>');
                foreach($errors as $error){
                    echo ('<ol>'.$error.'</ol>');
                }
                echo('</ul>');
            }
        }

    }

   
        
    /*fonction renvoi page login*/
    public function login(){
        require 'views/login.php';
    }
}
