<?php 
try
{
    $sql = new pdo("mysql:host=localhost;dbname=colyseum;charset=utf8", "root", "");
}catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

    $req = $sql->query("SELECT * FROM clients");
    
    while($data = $req->fetch())
    {
        echo "<li>".$data["lastName"]."</li>";
    }

    $req->closeCursor();
?>