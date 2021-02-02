<?php

class userManager extends dbManagerCv
{

    /**
     * userManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }



    public function connectUser(){
        $errors2=[];
        //echo password_hash('TINOU1987', PASSWORD_DEFAULT);exit();
        $password= $_POST['mot_de_passe'];
        $mail= $_POST['email'];
        $requete=$this->bdd->prepare('SELECT * FROM user WHERE email= :email ');
        $requete->execute([
            'email'=>$mail
        ]);
    
        $user=$requete->fetch();

        if(password_verify($password,$user['mot_de_passe'])){
            $_SESSION['user']=$user;}
        else{
            $errors2[]='erreur identifiant et/ou mot de passe';
        }
    
        return $errors2;
    
    }
}
