<?php
/**
 * 分库分表的自定义数据库路由配置
 */

return array(
    /**
     * DB数据库服务器集群
     */
    'servers' => array(
        'db_hedaAssistant' => array(                         //服务器标记
            'host'      => 'sqld.bcehost.com:4050',             //数据库域名
            'name'      => 'pvgMlbSPmOmBwpiwwHJQ',               //数据库名字
            'user'      => 'e57f43cc0bbd4e45bda2fefd16924e40',                  //数据库用户名
            'password'  => '9c4d9f7d00da4f13bdca7e82dba6a113',	                    //数据库密码
            'port'      => '3306',                  //数据库端口
            'charset'   => 'UTF8',                  //数据库字符集
        ),
    ),

    /**
     * 自定义路由表
     */
    'tables' => array(
        //通用路由
        '__default__' => array(
            'prefix' => 'tbl_',
            'key' => 'id',
            'map' => array(
                array('db' => 'db_hedaAssistant'),
            ),
        ),

        /**
        'demo' => array(                                                //表名
            'prefix' => 'hd_',                                         //表名前缀
            'key' => 'id',                                              //表主键名
            'map' => array(                                             //表路由配置
                array('db' => 'db_hedaassitant'),                               //单表配置：array('db' => 服务器标记)
                array('start' => 0, 'end' => 2, 'db' => 'db_hedaassitant'),     //分表配置：array('start' => 开始下标, 'end' => 结束下标, 'db' => 服务器标记)
            ),
        ),
         */
    ),
);
