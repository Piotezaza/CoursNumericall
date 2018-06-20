<?php

function dbConnect()
{
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    return new PDO('sqlite:' . __DIR__ . '/../data/data.db', null, null, $attributes);
}

function register($pdo, $post) //$post => $_POST, $files => $_FILES
{
    if( empty($post['username']) || empty($post['email']) || empty($post['password']) )
    {
        return array(
            'success' => false,
            'message' => 'Merci de remplir tous les champs'
        );
    }

    // Test si l'utilisateur existe
    $checkUser = checkUSer($pdo, $post);
    if(!$checkUser['sucess'])
    {
        return $checkUser;
    }

    // Cryptage du mot de passe
    $password = md5($post['password'] . "WF3");
    $avatar = $file['avatar']['name'];

    // Upload de l'avatar
    if( !empty($files['avatar']['name']) )
    {
        copy($files['avatar']['tmp_name'], 'uploads/' . $avatar);
    }

    $query = $pdo->prepare("INSERT INTO user (username, password, email, avatar) VALUES (:username, :password, :email, :avatar)");
    // TODO executer la requête
}

function checkUSer($pdo, $post)
{
    $query = $pdo -> prepare("SELECT * FROM user WHERE username = :username OR email = :email");
    $query->bindValue('username', $post['username']);
    $query->bindValue('email', $post['email']);
    $query -> execute();

    if($query->fetch())
    {
        return array(
            'success' => false, 
            'message' => "Le nom d'utilisateur ou le mail existe déjà"
        );
    }

    return array(
        'sucess' => true, 
        'message' => ""
    );
}