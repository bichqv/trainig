<?php 
class Home extends Controller{
    function SayHi(){
        $real = $this->model("SanphamModel");
        echo $real->ao();
    }
    function Show(){
        $this->view("aodep");
    }
   
}

?>