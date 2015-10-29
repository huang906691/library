<?php
namespace Admin\Controller;
use Think\Controller;

class ReaderController extends Controller{
	/****读者类型*****/
	public function readerType(){
		//实例化数据表
		$info=D('readertype');
		//添加读者类型，接收表单传递数据
		if(!empty($_POST)){
			$add=$info->create($_POST);//使用表单过滤功能
			if($add){
				$type_name=$info->add($add);
				if($type_name){
					echo "<font style='color:red'>添加成功！</font>";
				}else{
					echo "<font style='color:red'>添加失败！</font>";
				}
			}
		}else{
			//获取数据库信息
			$name=$info->select();
			//载入smarty模板
			$this->assign("name",$name);
			//载入视图
			$this->display();
		}
	}
	/******修改读者类型信息*****/
	public function readerTypeEdit($rt_id){
		//实例化数据表
		$info=D('readertype');
		if(!empty($_POST)){
			$edit=$info->create($_POST);
			if($edit){
				$type_name=$info->save($edit);
				if($type_name){
					echo "<font style='color:red'>修改成功！</font>";
				}else{
					echo "<font style='color:red'>修改失败！</font>";
				}
			}
		}else{
			//根据ID查询对应的数据信息
			$name=$info->find($rt_id);
			//载入smarty模板
			$this->assign("name",$name);
			//载入视图
			$this->display("readerType_edit");
		}
	}
	/******删除读者类型信息*******/
	public function delReaderType($rt_id){
		//实例化数据表
		$info=D('readertype');
		//根据ID查找数据表并删除信息
		if($info->delete($rt_id)){
			$this->redirect("readerType");
		}else{
			echo "删除失败！";
		}
	}
	/*****读者管理****/
	public function reader(){
		//获取读者信息
		$reader=new \Model\ReaderModel();
		//分页效果
		$total=$reader->count();
		$per=3;
		$pages=new \Tools\page($total,$per);

		$read_info=$reader->query("select a.re_id,a.re_name,a.re_code,b.rt_name,c.pa_type,a.re_number,a.re_tel,a.re_email,a.re_num from li_reader as a left join li_readertype as b on a.re_typeid=b.rt_id left join li_papers as c on a.re_paperid=c.pa_id $pages->limit");
		$pagelist=$pages->fpage(array(3,4,5,6,7,8));
		//载入smarty模板
		$this->assign("read_info",$read_info);
		$this->assign("pagelist",$pagelist);
		$this->display();
	}
	/******添加读者信息******/
	public function readerAdd(){
		//实例化读者数据表
		$reader=D("reader");
		if(!empty($_POST)){
			//把接收到的表单密码加密
			$post=$_POST;
			$post["re_pwd"]=md5($post["re_pwd"]);
			
			//把接收到的数据筛选一遍
			$reader_info=$reader->create($post);
			if($reader_info){
				//添加进数据表
				$add=$reader->add();
				if($add){
					echo "<font style='color:red'>添加成功！</font>";
				}else{
					echo "<font style='color:red'>添加失败！</font>";
				}
			}

		}else{
		//实例化读者类型数据表
		$info=D("readertype");
		//实例化证件类型表
		$paper=D("papers");
		$papers=$paper->field("pa_id,pa_type")->select();
		//获取读者类型
		$type=$info->field("rt_name,rt_id")->select();
		//载入smarty模板
		$this->assign("type",$type);
		$this->assign("papers",$papers);
		//载入视图
		$this->display("reader_add");	
		}
	}
	/*******读者信息********/
	public function readerInfo($re_id){
		//实例化Model
		$info=new \Model\ReaderModel();
		$reader_info=$info->query("select a.re_id,a.re_name,a.re_code,a.re_sex,b.rt_name,c.pa_type,a.re_work,a.re_birthday,a.re_number,a.re_tel,a.re_email,a.re_remark from li_reader as a left join li_readertype as b on a.re_typeid=b.rt_id left join li_papers as c on a.re_paperid=c.pa_id where re_id=$re_id");
		//载入smarty模板
		$this->assign("info",$reader_info);
		//载入视图
		$this->display("reader_info");
	}
	/******读者信息修改*******/
	public function readerModify($re_id){
		//实例化读者数据表
		$reader=D("reader");
		if(!empty($_POST)){
			//接收表单提交数据，并将密码加密
			$post=$_POST;
			$post["re_pwd"]=md5($post["re_pwd"]);
			
			//把接收到的数据筛选一遍
			$reader_info=$reader->create($post);
			if($reader_info){
				$save=$reader->save();
				if($save){
					echo "<font style='color:red'>修改成功！</font>";
				}else{
					echo "<font style='color:red'>修改失败！</font>";
				}
			}
		}else{
			//获取读者类型
			$type=D("readertype");
			$type_info=$type->select();
			//获取证件类型
			$paper=D("papers");
			$papers=$paper->select();
			//获取数据表信息
			$info=D("reader");
			$re_info=$info->find($re_id);

			//载入smarty模板
			$this->assign("type",$type_info);
			$this->assign("papers",$papers);
			$this->assign("info",$re_info);
			//载入视图
			$this->display("reader_modify");
		}
	}
	/******读者信息删除*******/
	public function readerDel($re_id){
		//实例化读者数据表
		$reader=D("reader");
		$del=$reader->delete($re_id);
		if($del){
			$this->redirect("reader");
		}else{
			echo "删除失败！";
		}
	}
}