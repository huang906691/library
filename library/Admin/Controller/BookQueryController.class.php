<?php
namespace Admin\Controller;
use Think\Controller;
/*****图书查询******/
class BookQueryController extends Controller{
	//图书档案查询
	public function bookQuery(){
		$this->display();
	}
	//图书借阅查询
	public function borrowQuery(){
		$this->display();
	}
	//借阅到期查询
	public function bremind(){
		$this->display();
	}
}