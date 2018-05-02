<?php
namespace Models\Helpers;
use PDO;
use Exception;

abstract class Db {

    const HOST = "localhost";
    const USER = "root1";
    const PASSWORD = "";
    const DB = "baltic";

    protected function getDb(){
        /*
            try  - bando atlikti veiksma ir jeigu nepavyksta -
            ivyksta klaida, pereinama prie dalies catch
        */
        try {
            return new PDO('mysql:host=localhost;dbname=baltic', 'root', '');
        }
        catch (Exception $e){
            /*
            per $e Exception objekta pasiekiamas metodas getMessage
            per kuri galiu pasiuziureti klaidos pranesima jei man to reikia
            */
            //echo $e->getMessage();

            /*
            Sioje vietoje galima apsirasyti logika
            ka daryti kai ivyksta klaida, t.y. nepavyksta
            atlkti to try veiksmo
            */
            echo "Negalima prisijungti prie DB";
        }
    }

    protected function query($sql, $params = []){
        $sth = $this->getDb()->prepare($sql);
        $sth->execute($params);
        return $sth;
    }
    
}