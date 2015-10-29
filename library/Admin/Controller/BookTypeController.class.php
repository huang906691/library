<?php
namespace Admin\Controller;
use Think\Controller;

class BookTypeController extends Controller{
	function index(){
		//实例化数据表
		$info=D("booktype");
		if(!empty($_POST)){	
			$add=$info->create($_POST);
			if($add){
				$type=$info->add($add);
				if($type){
					echo "<font style='color:red'>添加成功！</font>";
				}else{
					echo "<font style='color:red'>添加失败！</font>";
				}
			}
		}else{
			//做分页效果
			$total=$info->count();
			$per=8;	//每页显示的条数
			$pages=new \Tools\page($total,$per);
			//查询数据表的数据
			$type_name=$info->query("select by_id,by_name from li_booktype $pages->limit");
			//获得页码列表
			$pagelist=$pages->fpage(array(3,4,5,6,7,8));
			//载入smarty模板
			$this->assign("type_name",$type_name);
			$this->assign("pagelist",$pagelist);
			//载入视图
			$this->display("booktype");
		}
		
	}
	/****删除图书类型****/
	public function delType($by_id){
		//实例化数据表
		$info=D("booktype");
		if($info->delete($by_id)){
			$this->redirect("index");
		}else{
			echo "删除失败！";
		}

	}
	/*****编辑图书类型******/
	public function bookTypeEdit($by_id){
		//实例化数据表
		$info=D("booktype");
		if(!empty($_POST)){
			$type_name=$info->create($_POST);
			if($type_name){
				$edit=$info->save($type_name);
				if($edit){
					echo "<font style='color:red'>修改成功！</font>";
				}else{
					echo "<font style='color:red'>修改失败！</font>";
				}
			}
			
		}else{
			//根据传递的ID查找对应的数据
			$type=$info->find($by_id);
			//载入smarty模板
			$this->assign("type_name",$type);
			//载入视图
			$this->display("booktype_edit");
		}
		
	}
}