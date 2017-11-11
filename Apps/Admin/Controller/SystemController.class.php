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
        $data = array(
            'title'      => I('website-title'),
            'kewords'   => I('website-Keywords'),
            'description'      => I('website-description'),
            'copyright'   => I('website-copyright'),
            'icp'   => I('website-icp')
        );
        $result = D('System');
        $result->add($data);
        if ($result) {
            $this->success('保存成功！');
        } else {
            $this->error("保存失败！");
        }
    }
}
