<?php
namespace App\Controller;
include "../../vendor/autoload.php";
use App\Model\Team;

class Controller {
    protected function render($view, $data = []) {
        extract($data);

        include "Views/$view.php";
    }
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

if(isset($_POST['submit'])){
    $name = $_POST['team_name'];
    $date = $_POST['creation_date'];
    $country = $_POST['country'];
    $controller = new Controller();
    $controller->insertAction($name,$date,$country);
    echo "done";
}
?>

