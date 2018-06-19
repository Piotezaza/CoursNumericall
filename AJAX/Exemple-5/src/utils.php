<?php

function dbConnect()
{
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    return new PDO('sqlite:' . __DIR__ . '../data/data.db', null, null, $attributes);
}

function register($pdo, $post)
{
    if( empty($post['username']) || empty($post['email']) || empty($post['password']) )
    {
        return array(
            'success' => false; 
            'message' => 'Merci de remplir tous les champs'
        );
    }
}

function checkUSer($pdo, $post)
{
    $query = $pdo -> prepare("SELECT * FROM user WHERE username = :username OR email = :email");
}