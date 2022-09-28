<?php

include "models/ConnexionModel.php";

class PostController{

    public function connect($username, $password)
    {
        $model = new ConnexionModel();
        $model->insertUser($username, $password);
    }
    
}


?>