<?php
namespace Admin\Controller;
use Think\Controller;

class PublishingController extends Controller{
	public function index(){
		//实例化数据表
		$info=D("press");
		if(!empty($_POST)){
			$add=$info->create($_POST);
			if($add){
				$press=$info->add($add);
				if($press){
					echo "<font style='color:red'>添加成功！</font>";
				}else{
					echo "<font style='color:red'>添加失败！</font>";
				}
			}
		}else{
			//分页效果
			$total=$info->count();
			$per=8;
			$pages=new \Tools\page($total,$per);
			$limit = str_replace(" ","", $pages->limit);
			//查询数据表
			$press_info=$info->limit(substr($limit, 5))->select();

			$pagelist=$pages->fpage(array(3,4,5,6,7,8));
			//载入smarty模板
			$this->assign("press_info",$press_info);
			$this->assign("pagelist",$pagelist);
			//载入视图
			$this->display("publishing");
		}	
	}
	/****删除出版社信息****/
	public function delPress($pr_id){
		//实例化数据表
		$info=D("press");
		if($info->delete($pr_id)){
			$this->redirect("index");
		}else{
			echo "删除失败！";
		}

	}
	/*****编辑书架信息******/
	public function pressEdit($pr_id){
		//实例化数据表
		$info=D("press");
		if(!empty($_POST)){
			$press_name=$info->create($_POST);
			if($press_name){
				$edit=$info->save($press_name);
				if($edit){
					echo "<font style='color:red'>修改成功！</font>";
				}else{
					echo "<font style='color:red'>修改失败！</font>";
				}
			}
			
		}else{
			//根据传递的ID查找对应的数据
			$type=$info->find($pr_id);
			//载入smarty模板
			$this->assign("press_name",$type);
			//载入视图
			$this->display("publishing_edit");
		}
		
	}
}