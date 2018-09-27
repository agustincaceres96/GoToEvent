<?php
namespace Artista;

class Artista{
    private $firstName;
    private $lastName;


    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }


}











?>