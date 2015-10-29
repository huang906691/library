<?php
namespace Admin\Controller;
use Think\Controller;

class BookCaseController extends controller{
	function index(){
		//实例化数据表
		$info=D("bookcase");
		if(!empty($_POST)){	
			$add=$info->create($_POST);
			if($add){
				$case=$info->add($add);
				if($case){
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

			//查询数据表的数据
			$limit = str_replace(" ","", $pages->limit);
			$case_name=$info->field("ca_name,ca_id")->limit(substr($limit, 5))->select();
			
			$pagelist=$pages->fpage(array(3,4,5,6,7,8));
			//载入smarty模板
			$this->assign("case_name",$case_name);
			$this->assign("pagelist",$pagelist);
			//载入视图
			$this->display("bookcase");
		}
		
	}
	/****删除图书类型****/
	public function delcase($ca_id){
		//实例化数据表
		$info=D("bookcase");
		if($info->delete($ca_id)){
			$this->redirect("index");
		}else{
			echo "删除失败！";
		}

	}
	/*****编辑书架信息******/
	public function bookCaseEdit($ca_id){
		//实例化数据表
		$info=D("bookcase");
		if(!empty($_POST)){
			$case_name=$info->create($_POST);
			if($case_name){
				$edit=$info->save($case_name);
				if($edit){
					echo "<font style='color:red'>修改成功！</font>";
				}else{
					echo "<font style='color:red'>修改失败！</font>";
				}
			}
			
		}else{
			//根据传递的ID查找对应的数据
			$type=$info->find($ca_id);
			//载入smarty模板
			$this->assign("case_name",$type);
			//载入视图
			$this->display("bookcase_edit");
		}
		
	}
}