<?php 

class Database{
    protected $db;

    public function __construct()
    {
        try
        {
            $this->db = new PDO("mysql:host=localhost; dbname=" . MYDBNAME . ";charset=utf8", MYDBLOGIN, MYDBPASSWORD);
        }
        catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}

