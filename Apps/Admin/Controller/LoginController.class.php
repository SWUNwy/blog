<?php

namespace Admin\Controller;
use Think\Controller;
/**
 * Description of LoginController
 *
 * @author Administrator
 */
class LoginController extends Controller {
    
    public function index() {
        $this->display();
    }

    public function login() {
    	$this->redirect('Index/index');
    }

    public function loginout() {
        session(null);
        $this->redirect('Login/index');
    }
}
