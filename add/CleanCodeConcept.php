<?php
namespace App;

class CleanCodeConcept {

    //constant must be FULL CAPITAL, underscore for 
   const Domain = "MyWeb.de";

    //properties must be camelCase or depenes on the Team. Can snake_case;
    public int $id;
    public string $user_family_name;
    //snake_case
    public int $user_id;

    //functions in camelCase
    //function muss clear name haben, muss beschreiben was es tut!!
    //function shall declear its return type (Rückgabewert mit : int/false)
  //function shall has a comment if it needed

  /**
   * @return int in case of success return last inserted id
   * @return false if insert is unsuccessfull, return false
   */
    public function createNew():int|false {
        return false;
    }
    public function printNameOnConsole():void {
        
 }
}
