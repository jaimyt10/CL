<?php
require_once "DatabaseConnectie.php";

class Teams
{
    public $TeamID;
    public $Naam;
    public $Land;
    public $Competitie;
    public $Goals;

    function __construct($TeamID = null, $Naam = null, $Land = null, $Competitie = null, $Goals = null)
    {
        $this->TeamID = $TeamID;
        $this->Naam = $Naam;
        $this->Land = $Land;
        $this->Competitie = $Competitie;
        $this->Goals = $Goals;


    }

    public function Create()
    {
        global $conn;
        try{
        $query = $conn->prepare("INSERT INTO teams (Naam, Land, Competitie, Goals) VALUES (:Naam,:Land, :Competitie,:Goals)");
        $query->bindParam(":Naam", $this->Naam);
        $query->bindParam(":Land", $this->Land);
        $query->bindParam(":Competitie", $this->Competitie);
        $query->bindParam(":Goals", $this->Goals);
        $query->execute();
        }catch (PDOException $error){
            echo $error->getMessage();
        }


    }

    public function Delete($TeamID)
    {
        global $conn;
        $sql = "DELETE FROM teams WHERE TeamID=$TeamID";
        $query = $conn->prepare($sql);
        $query->execute();

    }


    public function update()
    {
        global $conn;
        $query = $conn->prepare("UPDATE teams SET TeamID=:TeamID, Naam=:Naam, Land=:Land, Competitie=:Competitie, Goals=:Goals WHERE TeamId=:TeamId");
        $query->bindParam(":TeamID", $this->TeamID);
        $query->bindParam(":Naam", $this->Naam);
        $query->bindParam(":Land", $this->Land);
        $query->bindParam(":Competitie", $this->Competitie);
        $query->bindParam(":Goals", $this->Goals);
        $query->execute();

    }

//TODO: nieuwe methode aangemaakt. Deze methode heeft een ID nodig om het artikel uit de database te halen
    public function get_teams($id)
    {
//Stap 4:
//laad de database in
        global $conn;
//De query om artikel uit de database op te halen
        $get_teams = $conn->prepare("SELECT * FROM teams WHERE TeamID=:id");
//koppel de ID uit het formulier aan de query hierboven
        $get_teams->bindParam(":id", $id);
//voer de query uit
        $get_teams->execute();
//Stuur het resultaat terug als een array
        return $get_teams->fetch(PDO::FETCH_ASSOC);
    }


    public function search()
    {

    }


    /**
     * @return mixed
     */
    public function getTeamID()
    {
        return $this->TeamID;
    }

    /**
     * @param mixed $TeamID
     */
    public function setTeamID($TeamID)
    {
        $this->TeamID = $TeamID;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->Naam;
    }

    /**
     * @param mixed $Naam
     */
    public function setNaam($Naam)
    {
        $this->Naam = $Naam;
    }

    /**
     * @return mixed
     */
    public function getLand()
    {
        return $this->Land;
    }

    /**
     * @param mixed $Land
     */
    public function setLand($Land)
    {
        $this->Land = $Land;
    }

    /**
     * @return mixed
     */
    public function getCompetitie()
    {
        return $this->Competitie;
    }

    /**
     * @param mixed $Competitie
     */
    public function setCompetitie($Competitie)
    {
        $this->Competitie = $Competitie;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->Goals;
    }

    /**
     * @param mixed $Goals
     */
    public function setArtVoorraad($Goals)
    {
        $this->Goals = $Goals;
    }


    public function deleteteams(Teams $TeamID)
    {
    }
}

 // public function getVerkoop()
    //{
   //     return $this->artVerkoop;
   // }

   // public function getVoorraad()
  //  {
   //     return $this->artVoorraad;
   // }

  //  public function getMaxVoorraad()
  //  {
  //      return $this->getArtMaxVoorraad();
  //  }

   // public function getLocatie()
   // {
  //      return $this->getLocatie();
   // }
//}
