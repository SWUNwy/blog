<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * Description of CategoryController
 *
 * @author Administrator
 */
class CategoryController extends Controller {
    
    public function index() {
        $list = M('category')->select();
        $count = count($list);
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display();
    }

    /**
     *
     */
    public function add() {
        $this->display();
    }

    /**
     *
     */
    public function edit() {
        $this->display();
    }
}
