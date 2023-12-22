<?php
include '../model/Team.php';

class teamController{

  public function insertAction($teamId, $teamName, $creationDate, $country){
    $team=new Team();
    $team->insert($teamId, $teamName, $creationDate, $country);
    exit();
  }
  
  public function updateAction($teamId, $teamName, $creationDate, $country){
    $team=new Team();
    $team->update($teamId, $teamName, $creationDate, $country);
    exit();
  }
  public function deleteAction($teamId, $teamName, $creationDate, $country){
    $team=new Team();
    $team->delete($teamId, $teamName, $creationDate, $country);
    exit();
  }
  public function selectAction($teamId, $teamName, $creationDate, $country){
    $team=new Team();
    $team->select($teamId, $teamName, $creationDate, $country);
    exit();
  }
}