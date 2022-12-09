<?php 



class HomeController extends Controller
{
    public function index()
    {
        $data = ["name"=>"moz"];
        $this->view('home',$data);
        
      
       
    }
}