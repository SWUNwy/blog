<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    
    public function index(){
        $this->display();
    }

    public function main() {
    	$this->display();
    }


    public function loginout() {
    	$this->redirect('Login/index');
    }

        
}