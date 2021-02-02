<?php

class formationController{
    private $formationManager;

    /**
     *formationController constructor.
     * @param $formationManager
     */
    public function __construct()
    {
        $this->formationManager = new formationManager();
    }

    public function addFormFormation(){
        require 'views/add.php';
    }

    public function upFormFormation($id){
        $formForm=$this->formationManager->oneFormation($id);
        require 'views/updateFormation.php';

    }

    public function viewOneFormation($id){
        $oneExp=$this->formationManager->oneFormation($id);
        //require 'views/oneFormation.php';
    }

    public function addFormation(){
        $errorsForm=[];

        if(empty($_POST['annee'])){
            $errorsForm[]='il manque l\'annee';
        }
        if (empty($_POST['libelle'])){
            $errorsForm[]='il manque le libelle';
        }
        if(empty($_POST['lieu'])){
            $errorsForm[]='il manque le lieu';
        }
        if(empty($_POST['diplome'])){
            $errorsForm[]='il manque le diplome';
        }
      

        $formation= new Formation($_POST['annee'], $_POST['libelle'], $_POST['lieu'], $_POST['diplome']);
        $formationManager= new formationManager();



        if(count($errorsForm) === 0) {
            $formationManager->addFormation($formation);
            header('location: index.php?controller=session');
        }else{
            require'views/add.php';
        }
    }

    public function updateFormation($id){
        $formForm=$this->formationManager->oneFormation($id);

        $errorsForm=[];

        if(empty($_POST['annee'])){
            $errorsForm[]='il manque l\'annee';
        }
        if (empty($_POST['libelle'])){
            $errorsForm[]='il manque le libelle';
        }
        if(empty($_POST['lieu'])){
            $errorsForm[]='il manque le lieu';
        }
        if(empty($_POST['diplome'])){
            $errorsForm[]='il manque le diplome';
        }
    

        if(count($errorsForm) === 0) {
            $formForm->setAnnee($_POST['annee']);
            $formForm->setLibelle($_POST['libelle']);
            $formForm->setLieu($_POST['lieu']);
            $formForm->setDiplome($_POST['diplome']);
            $this->formationManager->updateFormation($formForm);
            header('location: index.php?controller=session');
        }else{
            require 'views/updateFormation.php';
        }
    }

    public function deleteFormation($id){
        $deleteFormation=$this->formationManager->deleteFormation($id);
        header('location: index.php?controller=session');
    }

}
