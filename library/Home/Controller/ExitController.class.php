<?php
//命名空间
namespace Home\Controller;
use Think\Controller;

class ExitController extends Controller{
	//退出
	function index(){
		//销毁session
		session_destroy();
		$this->redirect("Index/index");
	}
}