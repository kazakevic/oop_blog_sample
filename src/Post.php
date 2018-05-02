<?php
namespace Models;
use Models\Helpers\Db;
use PDO;

class Post extends Db
{
    private $title;
    private $content;
    private $author;

    public function __construct($data = []){

        $this->getDb();

        if(count($data) > 0):
            $this->title = $data['title'];
            $this->content = $data['content'];
            $this->author = $data['author'];
        endif; 
    }

    public function save() {

        $sql = "INSERT INTO posts (title, content, author)
        VALUES (:title, :content, :author)";

        $res = $this->query($sql, [
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author
        ]);
        //jeigu reikia pasitikrinti kas ivyko kai pasileido SQL
        //kadangi metodas query grazina statement
        //per metodo rezultata, t.y. siuo atveju kintamaji - $res
        //galiu paleisti PDO metoda - debugDumpParams
        //$res->debugDumpParams();
    }

    /*
    reikia pasiimti visus posts i masyva
    ir grazinti ta masyva
    */
    public function getAllPosts(){

        $sql = "SELECT * FROM posts ORDER BY created_at DESC";

        /*
            jeigu metodas butu static
            this negalima naudoti
            galima apeiti per new self
             $sth = (new self)->query($sql);
        */

        $res = $this->query($sql, [])->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }


}