<?php
include("Controller.php");
class HomeController extends Controller{
  public function getIndex(){
    return $this -> loadviews('trangchu');
  }
}




 ?>
