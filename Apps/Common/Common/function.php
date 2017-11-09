<?php
header("Content-type:text/html;charset=utf-8");

/**
 * 
 * @abstract 公共函数
 * @author yrui <admin@cdyurui.com>
 * @version 0.1
 */
	/**
	 * 格式化输出数据
	 */
	function p($var) {
	    dump($var, true, null, 0);
	}
        
        /**
         * 日志记录
         * 注意：服务器需开通fopen配置
         * @param $word char 需要写入日志里的内容
         * @param $location 写入日志的位置
         */
        function setLog($word='',$location) {
            $fp = fopen("./Public/Log/Log.txt","a");
            flock($fp, LOCK_EX) ;
            fwrite($fp,"执行日期：".date('Y-m-d H:i:s')."\n".$word."\n");	
            flock($fp, LOCK_UN);
            fclose($fp);
        }