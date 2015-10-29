<?php
//命名空间
namespace Model;
use Think\Model;

class ManagerModel extends Model{
	/****后台登陆验证****/
	public function checkMessage($name,$pwd){
		//写sql语句，与数据库做对比
		$sql=$this->where("ma_name='$name'")->find();
		if($sql){
			//用户名存在,验证密码
			if($sql["ma_pwd"]==$pwd){
				return $sql;
			}
		}
		return null;
	}
}