<?php

class competenceManager extends dbManagerCv
{

    /**
     * competenceManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function allCompetences(){
        $competences=[];
        $requete='SELECT * FROM competence';
        foreach($this->bdd->query($requete) as $competence){
            $competences[]= new Competence($competence['intitule'], $competence['note'], $competence['id_competence']);
        }
        return $competences;
    }

    public function oneCompetence($id){
        $requete=$this->bdd->prepare('SELECT * FROM competence WHERE id_competence=:id_competence');
        $requete->execute(['id_competence'=> $id]);
        $resultat = $requete->fetch();
        $competence=new Competence($resultat['intitule'], $resultat['note'], $resultat['id_competence']);
        return $competence;
    }

    public function deleteCompetence($id){
        $requete=$this->bdd->prepare('DELETE FROM competence WHERE id_competence=:id_competence');
        $requete->execute(['id_competence'=> $id]);
    }

    public function updateCompetence($competence){
        $requete=$this->bdd->prepare('UPDATE competence set intitule = :intitule, note= :note,WHERE id_competence=:id_competence');
        $requete->execute([
            'intitule'=>$competence->getIntitule(),
            'note'=>$competence->getNote()
        
        ]);
    }

    public function addCompetence(Competence $competence){
        $requete=$this->bdd->prepare('INSERT INTO competence (intitule, note) VALUE (:intitule, :note)');
        $requete->execute([
            'intitule'=>$competence->getIntitule(),
            'note'=>$competence->getNote()
        
        ]);
        $competence->setId_competence($this->bdd->lastInsertId());
    }

   
}
