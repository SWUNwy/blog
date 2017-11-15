<?php

namespace Admin\Controller;

use Think\Controller;

/**
 * Description of BlogController
 *
 * @author Administrator
 */
class BlogController extends Controller {
    public function index() {
        $list = M()->select();
        $count = count($list);
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display();
    }
    
    /**
     * 博文列表页模糊搜索方法
     */
    public function search() {}

    /**
     *
     */
    public function add() {}

    /**
     *
     */
    public function edit() {}

}
