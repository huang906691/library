<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
	public function index(){
		$this->display("admin_login");
	}
	/****验证管理员信息****/
	public function checkManagerMessage(){
		//接收管理员信息并判断
		if(!empty($_POST)){
			//实例化管理员model对象
			$manager=new \Model\ManagerModel();
			//调用方法并传递信息
			$info=$manager->checkMessage($_POST['name'],$_POST['pwd']);
			//判断，返回数组为真
			if($info){
				//登陆成功，保存session
				session("admin_id",$info['ma_id']);
				session("admin_name",$info['ma_name']);

				//跳转至后台首页面
				$this->redirect("Index/index");
			}else{
				echo "<font color='red'>用户名或密码错误！</font>";
				die();
			}
		}
	}
}