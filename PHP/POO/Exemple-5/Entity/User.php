<?php

/*
    ID
    Username
    Password
    Email
*/

class User
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $pays;

    public function __construct($username, $password, $email, $pays = "FR")
    {
        $this -> setUsername($username);
        $this -> setPassword($password);
        $this -> setEmail($email);
        $this->setPays($pays);  
        $this -> id = uniqid();
    }
    
    public function getId()
    {
        return $this -> id;
    }
     
    public function setId($id)
    {
        $this -> id = $id;

        return $this;
    }
    
    public function getUsername()
    {
        return $this -> username;
    }
     
    public function setUsername($username)
    {
        $this -> username = $username;

        return $this;
    }
     
    public function getPassword()
    {
        return $this -> password;
    }
   
    public function setPassword($password)
    {
        $this -> password = md5($password);

        return $this;
    }
     
    public function getEmail()
    {
        return $this -> email;
    }
    
    public function setEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this -> email = $email;
        }
        else
        {
            trigger_error("L'adresse email n'esty pas valide");
        }

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }
}