<?php

namespace Admin\Controller;

use Think\Controller;

/**
 * Description of DbController
 *
 * @author Administrator
 */
class DbController extends Controller {
    
    public function index() {
        $list = M()->query($sql = 'show tables');
//        p($list);
//        die();
        $this->assign('list',$list);
        $this->display();
    }
}
