<?php

class experienceController{
    private $experienceManager;

    /**
     * experienceController constructor.
     * @param $experienceManager
     */
    public function __construct()
    {
        $this->experienceManager = new experienceManager();
    }

    /*fonction renvoit page d'ajout*/
    public function addFormExperience(){
        require 'views/add.php';
    }

    public function upFormExperience($id){
        $formExperience=$this->experienceManager->oneExperience($id);
        require 'views/update.php';

    }

    public function viewOneExperience($id){
        $oneExp=$this->experienceManager->oneExperience($id);
        require 'views/oneExperience.php';
    }

    /*fonction de verif des input, d'ajout et renvoit page d'ajout*/
    public function addExperience(){
        $errorsExp=[];

        if(empty($_POST['titre'])){
            $errorsExp[]='il manque le titre';
        }
        if (empty($_POST['description'])){
            $errorsExp[]='il manque la description';
        }
        if(empty($_POST['date_debut'])){
            $errorsExp[]='il manque la date de début';
        }
        if(empty($_POST['date_fin'])){
            $errorsExp[]='il manque la date de fin';
        }

        $experience= new Experience($_POST['titre'], $_POST['description'], $_POST['date_debut'], $_POST['date_fin'], $_POST['lieu']);
        $experienceManager= new experienceManager();

        if(count($errorsExp) === 0) {
            $experienceManager->addExperience($experience);
            header('location: index.php?controller=session');
        }else{
            require 'views/add.php';
        }
    }

    /*fonction de mise a jour et renvoit page session*/
    public function updateExperience($id){
        $errorsExp=[];

        if(empty($_POST['titre'])){
            $errorsExp[]='il manque le titre';
        }
        if (empty($_POST['description'])){
            $errorsExp[]='il manque la description';
        }
        if(empty($_POST['date_debut'])){
            $errorsExp[]='il manque la date de début';
        }
        if(empty($_POST['date_fin'])){
            $errorsExp[]='il manque la date de fin';
        }
        if(empty($_POST['id_experience'])){
            $errorsExp[]='il manque l\'id';
        }
   
        if(count($errorsExp) === 0) { 
            $experience= new Experience($_POST['titre'], $_POST['description'], $_POST['date_debut'], $_POST['date_fin'], $_POST['lieu'], $_POST['id_experience']);
            $this->experienceManager->updateExperience($experience);
            header('location: index.php?controller=session');
        }else{  
            require 'views/update.php';
            echo ('<h2> Erreurs lors de l\'envoi du formulaire</h2><ul>');
            foreach($errors as $error){
                echo ('<ol>'.$error.'</ol>');
            }
            echo('</ul>');
        }
    }

    /*fonction de suppression et renvoit page session*/
    public function deleteExperience($id){
        $deleteExperience=$this->experienceManager->deleteExperience($id);
        header('location: index.php?controller=session');
    }

}
