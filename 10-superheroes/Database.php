<?php

class Database
{
    private $db_host = "127.0.0.1";
    private $db_user = "root";
    private $db_pwd = "";
    private $db_port = "3306";
    private $db_type = "mysql";
    private $db_name = "superheroes";
    private $db_charset = "utf8";

    public function connect()
    {
        $db_dsn = $this->db_type . ":";
        $db_dsn .= "host=" . $this->db_host . ";";
        $db_dsn .= "port=" . $this->db_port . ";";
        $db_dsn .= "dbname=" . $this->db_name . ";";
        $db_dsn .= "charset=" . $this->db_charset;
        
        try{
            $db = new PDO($db_dsn, $this->db_user,$this->db_pwd,[PDO::ATTR_ERRMODE=> PDO::ERRMODE_WARNING]);
            // Activer les erreurs MySQL
        }
        catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $db;
    }
}
?>