<?php

class Router{

    private $url;

    public function __construct($get)
    {
        $this->url = $get;
    }
    
    public function register($path, $file)
    {
        if($this->url === $path)
        {
            $file();
        }
    }
}

?>