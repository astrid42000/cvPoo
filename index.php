<?php
include_once 'models/manager/dbManagerCv.php';
include_once 'controller/defauController.php';
include_once 'models/formation.php';
include_once 'models/experience.php';
include_once 'models/competence.php';
include_once 'models/user.php';
include_once 'models/manager/formationManager.php';
include_once 'models/manager/experienceManager.php';
include_once 'models/manager/competenceManager.php';
include_once 'models/manager/userManager.php';
include_once 'controller/formationController.php';
include_once 'controller/experienceController.php';
include_once 'controller/competenceController.php';
include_once 'controller/userController.php';

/*retour accueil*/
if(empty($_GET) OR ($_GET['controller'] === 'accueil') ){
    $defaultControl= new defauController();
    $defaultControl->home();  
}

/*Deconnexion*/
else if($_GET['controller'] === 'deconnect'){
    require 'views/deconnect.php';
}

/*retour session*/
else if($_GET['controller'] === 'session'){
    $defaultControl= new defauController();
    $defaultControl->session(); 
}

/*page Login*/
else if ( $_GET['controller'] === 'login'){
    $defaultControl= new defauController();
    $defaultControl->login();
}

/*connexion session*/
else if( $_GET['controller'] === 'user' && $_GET['action'] === 'connect'){
    $defaultControl= new defauController();
    $defaultControl->connect();   
} 

/*page ajout*/
else if( $_GET['controller'] === 'user' && $_GET['action'] === 'add'){
    require 'views/add.php';  
} 

/*ajout d'une formation*/
else if( $_GET['controller'] === 'formation' && $_GET['action'] === 'add'){
    $formationControl= new formationController();
    $formationControl->addFormation();  
} 

/*ajout d'une experience*/
else if( $_GET['controller'] === 'experience' && $_GET['action'] === 'add'){
    $experienceControl= new experienceController();
    $experienceControl->addExperience();
} 

/*ajout d'une competence*/
else if( $_GET['controller'] === 'competence' && $_GET['action'] === 'add'){
    $competenceControl= new competenceController();
    $competenceControl->addCompetence(); 
} 

/**/
else if( $_GET['controller'] === 'formation' && $_GET['action'] === 'detail' && isset($_GET['id'])){
   
    $formationController= new formationController();
    $formationController->viewOneFormation($_GET['id']);
} 

/*suppression d'une formation*/
else if( $_GET['controller'] === 'formation' && $_GET['action'] === 'delete' && isset($_GET['id'])){
   
    $formationController= new formationController();
    $formationController->deleteFormation($_GET['id']);
} 

/*suppression d'une competence*/
else if( $_GET['controller'] === 'competence' && $_GET['action'] === 'delete' && isset($_GET['id'])){
   
    $compController= new competenceController();
    $compController->deleteCompetence($_GET['id']);
} 

/*suppression d'une experience*/
else if( $_GET['controller'] === 'experience' && $_GET['action'] === 'delete' && isset($_GET['id'])){
   
    $expController= new experienceController();
    $expController->deleteExperience($_GET['id']);
} 

/*Page de mise a jour d'une experience*/
else if( $_GET['controller'] === 'experience' && $_GET['action'] === 'update' && isset($_GET['id'])){
   
    $expController= new experienceController();
    $expController->upFormExperience($_GET['id']);
} 

/*Mise a jour d'une experience*/
else if( $_GET['controller'] === 'experience' && $_GET['action'] === 'up' && isset($_GET['id'])){
    $id=$_GET['id'];
    $expController= new experienceController();
    $expController->updateExperience($id);
} 

?>