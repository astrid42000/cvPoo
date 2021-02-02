<?php

class formationManager extends dbManagerCv
{

    /**
     * formationManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function allFormations(){
        $formations=[];
        $requete='SELECT * FROM formation ORDER BY id_formation DESC';
        foreach($this->bdd->query($requete) as $formation){
            $formations[]= new Formation($formation['annee'], $formation['libelle'], $formation['lieu'], $formation['diplome'], $formation['id_formation']);
        }
        return $formations;
    }

    public function oneFormation($id_formation){
        $requete=$this->bdd->prepare('SELECT * FROM formation WHERE id_formation=:id_formation');
        $requete->execute(['id_formation'=> $id_formation]);
        $resultat = $requete->fetch();
        $formation=new Formation($resultat['annee'], $resultat['libelle'], $resultat['lieu'], $resultat['diplome'], $resultat['id_formation']);
        return $formation;
    }

    public function deleteFormation($id){
        $requete=$this->bdd->prepare('DELETE FROM formation WHERE id_formation=:id_formation');
        $requete->execute(['id_formation'=> $id]);
    }

    public function updateFormation($formation){
        $requete=$this->bdd->prepare('UPDATE formation set annee = :annee, libelle= :libelle, lieu= :lieu, diplome= :diplome,WHERE id_formation=:id_formation');
        $requete->execute([
            'annee'=>$formation->getAnnee(),
            'libelle'=>$formation->getLibelle(),
            'lieu'=>$formation->getLieu(),
            'diplome'=>$formation->getDiplome()
        
        ]);
    }

    public function addFormation(Formation $formation){
        $requete=$this->bdd->prepare('INSERT INTO formation(annee, libelle, lieu, diplome) VALUE (:annee, :libelle, :lieu, :diplome)');
        $requete->execute([
            'annee'=>$formation->getAnnee(),
            'libelle'=>$formation->getLibelle(),
            'lieu'=>$formation->getLieu(),
            'diplome'=>$formation->getDiplome()
        
        ]);
        $formation->setId_formation($this->bdd->lastInsertId());
    }
}
