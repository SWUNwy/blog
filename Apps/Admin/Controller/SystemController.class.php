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
        $list = M('system')->select();
//        p($list);
//        die;
        $this->assign('list',$list);
        $this->display();
    }
    
    public function saveInfo() {
        $id = I('id');
        $data = array(
            'title'         => I('title'),
            'keywords'      => I('keywords'),
            'description'   => I('description'),
            'copyright'     => I('copyright'),
            'icp'           => I('icp'),
            'modified_time' => date('Y-m-d H:i:s')
        );
        $result = D('System');
        $result->addInfo($id,$data);

        if ($result) {
            $this->success('保存成功！');
        } else {
            $this->error("保存失败！");
        }
    }
}
