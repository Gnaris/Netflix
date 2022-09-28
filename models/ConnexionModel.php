<?php

include "Database.php";

class ConnexionModel{

    public function insertUser($username, $password)
    {
        $pdo = Database::getPdo();
        $statement = $pdo->prepare('INSERT INTO users VALUES (NULL, "' . $username . '", "' . $password . '");')->execute();
    }
}


?>