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
    if(!$checkUser['success'])
    {
        return $checkUser;
    }

    // Cryptage du mot de passe
    $password = md5($post['password'] . "WF3");

    // Upload de l'avatar
    $avatar = uniqid() . $files['avatar']['name'];
    if( !empty($_FILES['avatar']['name']) )
    {
        copy($files['avatar']['tmp_name'], 'uploads/' . $avatar);
    }

    $query = $pdo->prepare("INSERT INTO user (username, password, email, avatar) VALUES (:username, :password, :email, :avatar)");
    $query -> bindValue(':username', $post['username'], PDO::PARAM_STR);
    $query -> bindValue(':password', $password, PDO::PARAM_STR);
    $query -> bindValue(':email', $post['email'], PDO::PARAM_STR);
    $query -> bindValue(':avatar', $avatar, PDO::PARAM_STR);

    if($query->execute())
    {
        return array(
            'success' => true, 
            'message' => "Bienvenue"
        );
    }

    return array(
        'success' => false, 
        'message' => "Impossible de créer ce compte"
    );
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
        'success' => true, 
        'message' => ""
    );
}