<?php
namespace Admin\Controller;

use Think\Controller;
/**
 * Description of EmailController
 *
 * @author Administrator
 */
class EmailController extends Controller {
    
    public function index() {
        $list = M('email')->select();
        $this->assign('list',$list);
        $this->display();        
    }
    
    public function save() {
        $id = I('id');
        $data = array(
            'protocol'      => I('protocol'),
            'host'          => I('host'),
            'user'          => I('user'),
            'port'          => I('port'),
            'account'       => I('account'),
            'pwd'           => I('pwd'),
            'modified_time' => date('Y-m-d H:i:s')
        );
        $result = D('Email');
        $result->save($id,$data);
        if ($result) {
            $this->success("保存成功！");
        } else {
            $this->error("保存失败！");
        }
    }
    
}
