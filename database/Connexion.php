<?php
class Connexion{
  public static function goDB(){
    $servername="localhost";
    $userN="root";
    $db="Stadium_Stream";
    $ps="";
  try{
  $pdo=new PDO("mysql:host=$serveurname;dbname=$db;charset=utf8mb4", $userN, $ps);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $pdo ;
 } catch (PDOException $e) {
  die("Échec de la connexion : " . $e->getMessage());
}

  }
}