<?php
include("Controller.php");
class ChitiettinController extends Controller{
  public function getChitiettin(){
    return $this -> loadviews('Chitiettin');
  }
}




 ?>
