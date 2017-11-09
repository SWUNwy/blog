<?php

namespace Admin\Controller;

use Think\Controller;

class MemberController extends Controller {

    public function index() {
        $list = M('member')->select();
        $count = count($list);
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 被屏蔽的会员
     * @return [type] [description]
     */
    public function notAllow() {
        $this->display();
    }

    /**
     * 添加会员
     */
    public function add() {
        
    }

}
