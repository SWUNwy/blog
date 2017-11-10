<?php

namespace Admin\Controller;

use Think\Controller;

/**
 * Description of CommonController
 *
 * @author Administrator
 */
class CommonController extends Controller {
    /**
     * 
     */
    public function __initialize() {
        if(!isset($_SESSION['uname']) || !isset($_SESSION['uid'])) {
            $this->redirect('Login/index');
        }
    }
}
