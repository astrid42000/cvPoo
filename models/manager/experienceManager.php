<?php

class experienceManager extends dbManagerCv
{

    /**
     * experienceManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /*Récuperation de toutes les experiences*/
    public function allExperiences(){
        $experiences=[];
        $requete='SELECT * FROM experience ORDER BY id_experience DESC';
        foreach($this->bdd->query($requete) as $experience){
            $experiences[]= new Experience($experience['titre'], $experience['description'], $experience['date_debut'], $experience['date_fin'],$experience['lieu'], $experience['id_experience']);
        }
        return $experiences;
    }

    /*Récuperation d'une experience*/
    public function oneExperience($id){
        $requete=$this->bdd->prepare('SELECT * FROM experience WHERE id_experience=:id_experience');
        $requete->execute(['id_experience'=> $id]);
        $resultat = $requete->fetch();
        $experience=new Experience($resultat['titre'], $resultat['description'], $resultat['date_debut'], $resultat['date_fin'],$resultat['lieu'], $resultat['id_experience']);
        return $experience;
    }

    /*Suppression d'une experience*/
    public function deleteExperience($id_experience){
        $requete=$this->bdd->prepare('DELETE FROM experience WHERE id_experience=:id_experience');
        $requete->execute(['id_experience'=> $id_experience]);
    }

    /*Mise a jour d'une expérience*/
    public function updateExperience($experience){
        $requete=$this->bdd->prepare('UPDATE experience set titre = :titre, description= :description, date_debut= :date_debut, date_fin=:date_fin,lieu= :lieu WHERE id_experience=:id_experience');
        $requete->execute([
            'titre'=>$experience->getTitre(),
            'description'=>$experience->getDescription(),
            'date_debut'=>$experience->getDate_debut(),
            'date_fin'=>$experience->getDate_fin(),
            'lieu'=>$experience->getLieu(),
            'id_experience'=>$experience->getId_experience()
        ]);
        
    }

    /*Ajout d'une experience*/
    public function addExperience(Experience $experience){
        $requete=$this->bdd->prepare('INSERT INTO experience(titre, description, date_debut, date_fin, lieu) VALUE (:titre, :description, :date_debut, :date_fin, :lieu)');
        $requete->execute([
            'titre'=>$experience->getTitre(),
            'description'=>$experience->getDescription(),
            'date_debut'=>$experience->getDate_debut(),
            'date_fin'=>$experience->getDate_fin(),
            'lieu'=>$experience->getLieu()
        ]);
        $experience->setId_experience($this->bdd->lastInsertId());
    }
}
