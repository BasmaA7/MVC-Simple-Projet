<?php
// Team.php
require '../database/Connexion.php';

class Team {
    private $pdo;

    public function __construct() {
        $this->pdo = Connexion::goDB();
    }

    public function insert( ) {
        
        $sql = "INSERT INTO teams (team_name, creation_date, country) VALUES ($teamName, $creationDate, $country)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$teamName, $creationDate, $country, $teamId]);
    }

    public function update($teamId, $teamName, $creationDate, $country) {
        $sql = "UPDATE teams SET team_name = ?, creation_date = ?, country = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$teamName, $creationDate, $country, $teamId]);
    }

    public function delete($teamId) {
        $sql = "DELETE FROM teams WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$teamId]);
    }

    public function selectAll() {
        $sql = "SELECT * FROM teams";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
   
}
