<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * Description of SystemController
 *
 * @author Administrator
 */
class SystemController extends Controller {
    
    public function index() {
//        $list = M('system')->select();
//        $this->assign('list',$list);
        $this->display();
    }
}
