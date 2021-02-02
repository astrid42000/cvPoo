<?php
class DbManagerCv{
    protected $bdd;
    private $host='localhost';
    private $dbName= 'cv';
    private $user='root';
    private $password= '';

    /**
     * dbManagerCv constructor.
     */
    public function __construct()
    {
        try{
            $this->bdd = new PDO(
                'mysql:host='.$this->host.';dbname='.$this->dbName.';charset=utf8',
                $this->user,
                $this->password);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            die('Erreur connexion à la base de données : '.$e->getMessage());

        }
    }


}
