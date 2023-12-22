<?php
// teamController.php
include '../model/Team.php';

class TeamController {
  
    public function insertAction($teamName, $creationDate, $country) {
        $team = new Team();
        $team->insert($teamName, $creationDate, $country);
    }
  
    public function updateAction($teamId, $teamName, $creationDate, $country) {
        $team = new Team();
        $team->update($teamId, $teamName, $creationDate, $country);
    }

    public function deleteAction($teamId) {
        $team = new Team();
        $team->delete($teamId);
    }

    public function selectAction() {
        $team = new Team();
        $result = $team->selectAll();
        return $result;
    }
}
