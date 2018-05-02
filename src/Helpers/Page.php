<?php
namespace Models\Helpers;
session_start();

class Page 
{
    public static function redirect($location, $messages = []){
        if(count($messages) > 0):
            foreach($messages as $message){
                $_SESSION['messages'][] = $message;
            }
        endif;    
        header("Location:".$location);
    }

    /*
    Metodas kuris pasiims zinutes is sessijos indekso - messages
    parodys viska
    ir isvalys sesesijos indeksa - messages
    */
    public static function getFlashMessages(){
        
        if(!empty($_SESSION['messages'])):
            foreach($_SESSION['messages'] as $message){
                echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                <strong>Holy guacamole!</strong> ".$message."
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>";
            }
        endif;

        unset($_SESSION['messages']);
    }

}