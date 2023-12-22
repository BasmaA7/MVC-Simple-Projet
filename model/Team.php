<?php
require '../database/Connexion.php';

class Team {
    private $pdo;
   protected  $teamName;
   protected  $creationDate;
   protected  $country;
    public function __construct() {
        $this->pdo = Connexion::getPdo();
    }

    public function insert($teamName, $creationDate, $country) {
        $sql = "INSERT INTO teams (team_name, creation_date, country) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$teamName, $creationDate, $country]);
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

    public function selectById($teamId) {
        $sql = "SELECT * FROM teams WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$teamId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
