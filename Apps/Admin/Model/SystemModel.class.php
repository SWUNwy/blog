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
    public function addInfo($data) {
        $result = M('system')->save($data);
        return $result;
    }
}
