<?php

function dbConnect()
{
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    return new PDO('sqlite:' . __DIR__ . '/../data/data.db', null, null, $attributes);
}

function register($pdo, $post)
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
    $query -> execute(array('username' => $post['username'], 'email' => $post['email']));

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