<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql',
    'DB_HOST' => '',
    'DB_NAME' => '',
    'DB_USER'    => 'root', // 用户名
    'DB_PWD'     => '', // 密码
    'DB_PORT'    => 3306, // 端口
    'DB_PREFIX'  => '', // 数据库表前缀
    'DB_CHARSET' =>  'utf8', // 数据库编码默认采用utf8
    'DB_PARAMS'  =>    array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL), //数据库查询不转换大小写
    'SHOW_PAGE_TRACE' => 'true' //开启调试模式
);