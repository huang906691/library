<?php
namespace Admin\Controller;
use Think\Controller;
/****图书馆信息*****/
class LibraryController extends Controller{
	public function library(){
		//接收表单提交信息
		if(!empty($_POST)){
		//实例化数据库
		$li=D("library");
		//判读是否有提交数据
		if(!empty($_POST)){
			$info=$li->create();
			if($info){
				$library_info=$li->add($info);
				if($library_info){
					echo "<font color='red'>保存成功！</font>";
				}else{
					echo "<font color='red'>保存失败！</font>";
				}
			}
		
	}
		}else{
			$this->display("library_modify");
		}
		
	}
} 