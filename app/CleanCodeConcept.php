<?php
namespace App;

class CleanCodeConcept {

    //constant musst be FULL CAPITAL  , underscore for connect to next word is allowed
    const DOMAIN_NAME = "MyWeb.com"; 
    
    //properties musst be camelCase or depened on the Team. can snake_case;
    public int $id;
    public string $user_family_name;
    //snake_case
    public int $user_id;




    //functions shall be camelCase
    //function must have clear name 
    //function name shall declear what it doing!!!!
    //function shall declear its return type
    //function shall has a comment if it needed

    /**
     * @return int in case of success retrun last inserted id
     * @return false if insert is unsuccessfull , return false
     */
    public function createNew():int|false
    {
        return false;
    }

    public function printNameOnConsole():void
    {

    }

}