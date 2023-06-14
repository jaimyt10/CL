<?php
require_once "databaseConn.php";
class poule
{
    public $PouleID;
    public $PouleNaam;

    function __construct($PouleNaam = null)
    {
        $this->PouleNaam = $PouleNaam;



    }

    public function Create()
    {
        global $conn;
        $query = $conn->prepare("INSERT INTO poule (PouleNaam)
            VALUES ('$this->PouleNaam')");
        $query->execute();
    }

    public function Delete($PouleID)
    {
        global $conn;
        $sql = "DELETE FROM poule WHERE PouleID=$PouleID";
        $query = $conn->prepare($sql);
        $query->execute();

    }



    public function update(){
            global $conn;
            $query = $conn->prepare("UPDATE poule SET PouleNaam=:PouleNaam   WHERE PouleID=:PouleID");
            $query->bindParam(":PouleID", $this->PouleID);
            $query->bindParam(":PouleNaam", $this->PouleNaam);
            $query->execute();

        }


public function search(){

}


    /**
     * @return mixed
     */
    public function getPouleID()
    {
        return $this->PouleID;
    }

    /**
     * @param mixed $PouleID
     */
    public function setPouleID($PouleID)
    {
        $this->PouleID = $PouleID;
    }

    /**
     * @return mixed
     */
    public function getPouleNaam()
    {
        return $this->PouleNaam;
    }

    /**
     * @param mixed $PouleNaam
     */
    public function setPouleNaam($PouleNaam)
    {
        $this->PouleNaam = $PouleNaam;
    }


}