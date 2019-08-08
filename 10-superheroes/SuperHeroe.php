<?php

require_once "Database.php";

class SuperHeroe extends Database
{
    public $name;
    public $power;
    public $identity;
    public $universe;
    public static $tabHeroe;


    public function __construct($name = null, $power = null, $identity = null, $universe = null)
    {
       $this->name = $name; 
       $this->power = $power; 
       $this->identity = $identity; 
       $this->universe = $universe; 

        self::$tabHeroe[] = $this;
    }

    public function getRealIdentity()
    {
        return "L'identité réelle de $this->name est $this->identity<br>";
    }

    public function getUniverse()
    {
        return "$this->name fait partie de l'univers $this->universe";
    }

    public static function All()
    {
        var_dump(self::$tabHeroe);
    }

    public function hydrate(array $heroe)
    {
        $this->name = $heroe['name'];
        $this->power = $heroe['power'];
        $this->identity = $heroe['identity'];
        $this->universe = $heroe['universe'];
    }

    public function save()
    {
        $db = new Database;
        $db = $db->connect();

        $sql = "INSERT INTO `superheroe` (`name`, `power`, `identity`,`universe`) VALUES (:name,:power,:identity,:universe)";

        $query = $db->prepare($sql);

        $query->bindValue(':name',$this->name);
        $query->bindValue(':power',$this->power);
        $query->bindValue(':identity',$this->identity);
        $query->bindValue(':universe',$this->universe);

        return $query->execute();
    }
    

}