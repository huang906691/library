<?php
namespace Admin\Controller;
use Think\Controller;
/*****修改个人口令******/
class ModifyController extends Controller{
	public function modify(){
		$this->display("pwd_Modify");
	}
}