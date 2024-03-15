<?php 

//Izveidos savienojumu ar datu bazi 
class Database {
    private $connection;
    

//Metode 
    public function __construct($config) {
        $connection_string = "mysql:" .http_build_query($config, "", ";");
        $this->connection = $connection = new PDO($connection_string);
    }

    public function execute($query_string, $params) {
    // 1. Padot, sagatavot SQL vaicājumu
    $query = $this->connection->prepare($query_string);
    // 2. Izpildīt SQL vaicājumu
    $query->execute($params);
    // 3. Saņemt datus no mySQL uz PHP
    return $query->fetchAll(PDO::FETCH_ASSOC);
    } 
    public function execute2($query_string2, $params2) {
        // 1. Padot, sagatavot SQL vaicājumu
        $query2 = $this->connection->prepare($query_string2);
        // 2. Izpildīt SQL vaicājumu
        $query2->execute($params2);
        // 3. Saņemt datus no mySQL uz PHP
        return $query2->fetchAll(PDO::FETCH_ASSOC);
        } 

}

?>