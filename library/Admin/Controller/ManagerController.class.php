<?php
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends controller{
	public function index(){
		//实例化数据表
		$info=D('manager');
		//接收表单传值
		if(!empty($_POST)){	
			$add=$info->create($_POST);	
			if($add){
				$manager=$info->add($add);
				if($manager){
					echo "<font style='color:red'>添加成功！</font>";
				}else{
					echo "<font style='color:red'>添加失败！</font>";
				}
			}
		}else{
			//获取数据库管理员信息
			$man=$info->field("ma_name,ma_id")->select();
			//把查询结果载入smarty模板
			$this->assign('name',$man);
			//载入视图
			$this->display("manager");
		}
		
	}
	/****删除管理员****/
	public function delManager($ma_id){
		//实例化数据表
		$info=D("manager");
		if($info->delete($ma_id)){
			$this->redirect("index");
		}else{
			echo "删除失败！";
		}

	}
	/*****修改管理员权限******/
	public function managerModify($ma_id){
		//载入视图
		$this->display("manager_modify");
	}
}