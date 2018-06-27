<?php

namespace DataBase;

use Entity\User;

class UserManager extends DBManager
{
    public function save(User $user)
    {
        // $query = $this->pdo->prepare("INSERT INTO user (username, password, email, pays, sexe, presentation) VALUES (:username, :password, :email, :pays, :sexe, :presentation)");

        // $query->bindValue(':username', $user->getUsername());
        // $query->bindValue(':password', $user->getPassword());
        // $query->bindValue(':email', $user->getEmail());
        // $query->bindValue(':pays', $user->getPays());
        // $query->bindValue(':sexe', $user->getSexe());
        // $query->bindValue(':presentation', $user->getPresentation());
        
        // $query->execute();

        $data = ["username", "password", "email", "pays", "sexe", "presentation"];
        $attributes = "";
        $values = "";

        // Boucle sur les données pour créer la requête (username, email,...) VALUES (:username, :email,...)
        foreach ($data as $key => $value) {
            $attributes .= $value . ',';
            $values .= ':' . $value . ',';
        }

        // Supprime le dernier ',' sur $attributes & $values
        $attributes = substr($attributes, 0, strlen($attributes) -1); 
        $values = substr($values, 0, strlen($values) -1);


        $queryStr = "INSERT INTO user (" . $attributes . ") VALUES (" . $values . ")";
        $query = $this->pdo->prepare($queryStr);

        // Boucle pour appeler les méthodes accesseurs (getUsername())
        foreach ($data as $key => $value) {
            $methode = "get" . ucfirst($value);
            $query->bindValue(':' . $value, $user->$methode());
        }

        $query->execute();
    }
}