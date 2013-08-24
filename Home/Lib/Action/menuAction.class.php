<?php
class menuAction extends Action{
	// 数据写入操作
	public function insert() {
		$Demo = new Model('Demo'); // 实例化模型类
		$Demo->Create(); // 创建数据对象
		$result = $Demo->add(); // 写入数据库
		$this->redirect('login'); // 成功后重定向刡index操作页面
	}
	
	// 数据查诟操作
	public function index() {
		$Demo = new Model('Demo'); // 实例化模型类
		$list = $Demo->select(); // 查询数据
		var_dump($list);
		exit();
		$this->assign('list', $list); // 模板发量赋值
		
		
		$this->display(); // 输出模板
	}
	
	
}