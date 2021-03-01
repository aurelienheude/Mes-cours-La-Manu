<?php

class Clients extends Database
{
    public function getAllClients()
    {
        $query = "SELECT *, DATE_FORMAT(`birthDate`, '%d/%m/%Y') as `newBirthDate` FROM clients";
        $getAllClientsQuery = $this->db->query($query);
        $result = $getAllClientsQuery->fetchAll();
        return $result;
    }
}