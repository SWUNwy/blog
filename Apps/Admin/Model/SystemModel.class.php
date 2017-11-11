<?php
namespace Admin\Model;
use Think\Model;
/**
 * Description of SystemModel
 *
 * @author Administrator
 */
class SystemModel extends Model {
    //put your code here
    public function add($data) {
        $sys = M('system');
        $result = $sys->save($data);
        return $result;
    }
}
