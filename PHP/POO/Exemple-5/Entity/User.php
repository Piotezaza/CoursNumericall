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
    
    public function getId()
    {
        return $this->id;
    }
     
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
    public function getUsername()
    {
        return $this->username;
    }
     
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
     
    public function getPassword()
    {
        return $this->password;
    }
   
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
     
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}