<?php

namespace Admin\Controller;

use Think\Controller;

class FeedBackController extends Controller {

    public function index() {
        $list = M()->select();
        $count = count($list);
        $this->assign('count', $count);
        $this->assign('list', $list);
        $this->display();
    }

}
