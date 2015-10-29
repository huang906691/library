<?php
namespace Admin\Controller;
use Think\Controller;
/****图书信息*****/
class BookController extends Controller{
	public function book(){
		//实例化数据表
		$book=new \Model\BookModel();
		//分页效果
		$total=$book->count();
		$per=10;
		$pages=new \Tools\page($total,$per);
		$book_info=$book->query("SELECT a.bo_id,a.bo_code,a.bo_name,a.bo_stock,b.by_name,c.pr_name,d.ca_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_press as c on a.bo_pressid=c.pr_id left join li_bookcase as d on a.bo_bookcaseid=d.ca_id $pages->limit ");

		$pagelist=$pages->fpage(array(3,4,5,6,7,8));
		//载入smarty模板
		$this->assign("info",$book_info);
		$this->assign("pagelist",$pagelist);
		$this->display();
	}
	/******添加图书信息*******/
	public function bookAdd(){
		//实例化图书数据表
		$book=D("book");
		if(!empty($_POST)){
			if($_FILES["bo_photo"]['error']==0){
				$cfg=array(
					'rootPath' => './Uploads/',
				);
				//实例化上传类
				$up=new \Think\Upload($cfg);
				//uploadOne会返回上传附件保存在服务器的名字和路径
				$a=$up->uploadOne($_FILES["bo_photo"]);
				//拼装文件的路径名称
				$fileName=$up->rootPath.$a["savepath"].$a["savename"];
				$_POST["bo_photo"]=$fileName;
			}
			//接收表单数据
			$book_info=$book->create($_POST);
			if($book_info){
				//添加数据
				$add=$book->add();
				if($add){
					echo "<font style='color:red'>添加成功！</font>";
				}else{
					echo "<font style='color:red'>添加失败！</font>";
				}
			}
		}else{
			//读取图书类型
			$booktype=D("booktype");
			$type_info=$booktype->select();
			//读取书架信息
			$bookcase=D("bookcase");
			$case_info=$bookcase->select();
			//读取出版社信息
			$press=D("press");
			$pr_info=$press->select();
			//载入smarty模板
			$this->assign("type_info",$type_info);
			$this->assign("case_info",$case_info);
			$this->assign("pr_info",$pr_info);
			//载入视图
			$this->display("book_add");
		}
}
	/******图书详细信息*******/
	public function bookInfo($bo_id){
		$book=new \Model\BookModel();
		$info=$book->query("SELECT a.*,b.by_name,c.pr_name,d.ca_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_press as c on a.bo_pressid=c.pr_id left join li_bookcase as d on a.bo_bookcaseid=d.ca_id where bo_id=$bo_id");
		//载入smarty模板
		$this->assign("info",$info);
		//载入视图
		$this->display("book_look");
	}
	/******图书信息修改*******/
	public function bookEdit($bo_id){
		//实例化图书数据表
		$book=D("book");
		if(!empty($_POST)){
			if($_FILES["bo_photo"]['error']==0){
				$cfg=array(
					'rootPath' => './Uploads/',
				);
				//实例化上传类
				$up=new \Think\Upload($cfg);
				//uploadOne会返回上传附件保存在服务器的名字和路径
				$a=$up->uploadOne($_FILES["bo_photo"]);

				//拼装文件的路径名称
				$fileName=$up->rootPath.$a["savepath"].$a["savename"];
				$_POST["bo_photo"]=$fileName;
			}
			//接收表单数据
			$book_info=$book->create($_POST);
			if($book_info){
				//添加数据
				$add=$book->save($bo_info);
				if($add){
					echo "<font style='color:red'>修改成功！</font>";
				}else{
					echo "<font style='color:red'>修改失败！</font>";
				}
			}
		}else{
			//读取图书类型
			$booktype=D("booktype");
			$type_info=$booktype->select();
			//读取书架信息
			$bookcase=D("bookcase");
			$case_info=$bookcase->select();
			//读取出版社信息
			$press=D("press");
			$pr_info=$press->select();
			//获取要修改的数据信息
			$book=new \Model\BookModel();
			$info=$book->query("SELECT a.*,b.by_name,c.pr_id,c.pr_name,d.ca_id,d.ca_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_press as c on a.bo_pressid=c.pr_id left join li_bookcase as d on a.bo_bookcaseid=d.ca_id where bo_id=$bo_id");
			//载入smarty模板
			$this->assign("type_info",$type_info);
			$this->assign("case_info",$case_info);
			$this->assign("pr_info",$pr_info);
			$this->assign("info",$info);
			//载入视图
			$this->display("book_edit");
		}
		
	}
	/******删除图书信息******/
	public function booDel($bo_id){
		//实例化数据表
		$book=D("book");
		if($book->delete($bo_id)){
			$this->redirect("book");
		}else{
			echo "删除失败！";
		}

	}
}