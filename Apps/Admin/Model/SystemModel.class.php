<?php
namespace Admin\Model;
use Think\Model;
/**
 * Description of SystemModel
 *
 * @author Administrator
 */
class SystemModel extends Model {
    
    /**
     * addInfo 保存系统设置信息 
     * @param array     $data   需要保存的数据信息，数组形式
     * @return boolean  $result 返回保存的结果，布尔型
     */
    public function saveSysInfo($id,$data) {
        if (is_array($id)){
            $sid = 'sid in('.implode(',',$id).')';
        }
        $result = M('system')->where($sid)->setField($data);
        return $result;
    }

}
