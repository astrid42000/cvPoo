<?php

class competenceController{
    private $competenceManager;

    /**
     *competenceController constructor.
     * @param $competenceManager
     */
    public function __construct()
    {
        $this->competenceManager = new competenceManager();
    }

    public function addFormCompetence(){
        require 'views/add.php';
    }

    public function upFormCompetence($id){
        $formComp=$this->competenceManager->oneCompetence($id);
        require 'views/updateCompetence.php';

    }

    public function viewOneCompetence($id){
        $oneExp=$this->competenceManager->oneCompetence($id);
        require 'views/oneCompetence.php';
    }

    public function addCompetence(){
        $errorsComp=[];

        if(empty($_POST['intitule'])){
            $errorsComp[]='il manque l\'intitulé';
        }
        if (empty($_POST['note'])){
            $errorsComp[]='il manque la note';
        }
       

        $competence= new Competence($_POST['intitule'],$_POST['note']);
        $competenceManager= new competenceManager();



        if(count($errorsComp) === 0) {
            $competenceManager->addCompetence($competence);
            header('location: index.php?controller=session');
        }else{
            require'views/add.php';
        }
    }

    public function updateCompetence($id){
        $formComp=$this->competenceManager->oneCompetence($id);

        $errorsComp=[];

        if(empty($_POST['intitule'])){
            $errorsComp[]='il manque l\'intitulé';
        }
        if (empty($_POST['note'])){
            $errorsComp[]='il manque la note';
        }
    

        if(count($errorsComp) === 0) {
            $formComp->setIntitule($_POST['intitule']);
            $formComp->setNote($_POST['note']);
            $this->competenceManager->updateCompetence($formComp);
            header('location: index.php?controller=competence&action=home');
        }else{
            require 'views/updateCompetence.php';
        }
    }

    public function deleteCompetence($id){
        $deleteCompetence=$this->competenceManager->deleteCompetence($id);
        header('location: index.php?controller=session');
    }
    

}
