<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * Description of AdminController
 *
 * @author Administrator
 */
class AdminController extends Controller {
    
    public function index() {
        $list = M('user')->select();
        $count = count($list);
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display();
    }
    
    /**
     * 添加管理员
     */
    public function add() {}
}
