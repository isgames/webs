<?php
//定义项目名称
define('APP_NAME', 'Home');
//定义项目路径
define('APP_PATH', './Home/');
 /* 数据目录*/
 define('Egojit_DATA_PATH', './Data/');
  
  /* 配置文件目录*/
 define('CONF_PATH', Egojit_DATA_PATH . 'Config/');
  define('APP_DEBUG', true);
  //加载框架入文件
  require 'ThinkPHP/ThinkPHP.php';