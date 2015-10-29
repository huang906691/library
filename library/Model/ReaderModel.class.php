<?php
//命名空间
namespace Model;
use Think\Model;

class ReaderModel extends Model{
	/***前台用户验证****/
	public function checkNamePwd($username,$pwd){
		//创建sql语句，做用户名验证
		$sql=$this->where("re_username='$username'")->find();
		// dump($this->getLastsql());
		// exit();
		if($sql){
			//用户名存在，验证密码
			if($sql['re_pwd']==md5($pwd)){
				return $sql;
			}
		}
		return null;
	}
}



