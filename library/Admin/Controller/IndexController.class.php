<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
	public function index(){
		
		//获取图书信息
		$book=new \Model\BookModel();
		//做分页效果
		$total=$book->count();
		$per=10;	//每页显示的条数
		$pages=new \Tools\page($total,$per);

		$book_info=$book->query("SELECT a.bo_id,a.bo_code,a.bo_name,a.bo_author,a.bo_price,a.bo_borrowtimes,b.by_name,c.pr_name,d.ca_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_press as c on a.bo_pressid=c.pr_id left join li_bookcase as d on a.bo_bookcaseid=d.ca_id order by bo_borrowtimes desc $pages->limit");
		//获得页码列表
		$pagelist=$pages->fpage(array(3,4,5,6,7,8));
		// var_dump($pagelist);
		// die();
		//载入smarty模板
		$this->assign("book_info",$book_info);
		$this->assign("pagelist",$pagelist);
		$this->display();
	}
		
}