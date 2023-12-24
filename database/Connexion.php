<?php
namespace App\database;
use Dotenv\Dotenv;
use PDO;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

class Connexion {
  public static function goDB() {
      try {
          $pdo = new PDO("mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'].";charset=utf8mb4", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
      } catch (PDOException $e) {
          die("Échec de la connexion : " . $e->getMessage());
      }
  }
}
