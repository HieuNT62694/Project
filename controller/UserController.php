<?php
include('Controller.php');
class UserController extends Controller{
	public function getSignup(){
		return $this->loadviews('dangki');
	}
	public function getLogin(){
		return $this->loadviews('dangnhap');
	}
}
?>
