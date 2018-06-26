<?php

namespace DataBase;

use Entity\User;

class UserManager extends DBManager
{
    public function save(User $user)
    {
        $query = $this->pdo->prepare("INSERT INTO user (username, password, email, pays, sexe, presentation) VALUES (:username, :password, :email, :pays, :sexe, :presentation)");

        $query->bindValue(':username', $user->getUsername());
        $query->bindValue(':password', $user->getPassword());
        $query->bindValue(':email', $user->getEmail());
        $query->bindValue(':pays', $user->getPays());
        $query->bindValue(':sexe', $user->getSexe());
        $query->bindValue(':presentation', $user->getPresentation());
        
        $query->execute();
    }
}