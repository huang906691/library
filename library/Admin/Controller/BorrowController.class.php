<?php
namespace Admin\Controller;
use Think\Controller;
/*****图书借阅******/
class BorrowController extends Controller{
	//图书借阅申请
	public function borrowlist(){
		$this->display("borrowreglist");
	}
	//图书借阅
	public function bookBorrow(){
		$this->display();
	}
	//图书续借
	public function bookRenew(){
		$this->display();
	}
	//图书归还
	public function bookBack(){
		$this->display();
	}
}