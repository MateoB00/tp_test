<?php

namespace App;

use ErrorException;

class User {

    private $email;
    private $nom;
    private $prenom;
    private $age;

    function __construct($email, $nom, $prenom, $age) {	
        $this->email = $email;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->isValid();
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new ErrorException();
        }

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }
    
    public function setNom(string $nom): self
    {
        if (!empty($nom)) {
            $this->nom = $nom;
        } else {
            throw new ErrorException();
        }

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }
    
    public function setPrenom(string $prenom): self
    {
        if (!empty($prenom)) {
            $this->prenom = $prenom;
        } else {
            throw new ErrorException();
        }

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }
    
    public function setAge(string $age): self
    {
        if ($age >= 13) {
            $this->age = $age;
        } else {
            throw new ErrorException();
        }
        
        return $this;
    }

    public function isValid(){
        if ($this->age >= 13 && filter_var($this->email, FILTER_VALIDATE_EMAIL) && !empty($this->prenom) && !empty($this->nom)) {
            return true;
        }
        return false;
    }
}