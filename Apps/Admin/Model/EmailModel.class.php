<?php

namespace Admin\Model;

use Think\Model;

/**
 * Description of EmailModel
 *
 * @author Administrator
 */
class EmailModel extends Model {
    
    /**
     * 保存系统邮件信息
     * @param array $id
     * @param array $data
     * @param boolean $return
     */
    public function save($id,$data) {
        if (is_array($id)) {
            $eid = 'id in('.implode(',',$id).')';
        }
        $result = M('email')->where($eid)->setField($data);
        return $result;
    }
}
