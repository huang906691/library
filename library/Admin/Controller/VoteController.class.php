<?php
namespace Admin\Controller;
use Think\Controller;

class VoteController extends Controller{
	public function index(){
		$this->display("votelist");
	}
	/*****添加新调查******/
	public function voteAdd(){
		//载入视图
		$this->display();
	}
}