<?php
class Controller{
  public function loadviews($views,$data = array()){ //phương thức gọi views và trả về data nếu có
      include("views/layout.php");//include lấy toàn bộ source code
  }
}


 ?>
