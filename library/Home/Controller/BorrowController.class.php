<?php
namespace Home\Controller;
use Think\Controller;

class BorrowController extends Controller{
	/*****图书借阅申请*****/
	public function userBorrow(){
		//获取图书馆信息
    	$lib=D("library");
    	$library=$lib->field("id,bbs")->find("1");
        $library=explode("。",$library["bbs"]);

		//实例化数据表
		$info=D("borrow");
		//分页效果
    	$total=$info->count();
    	$per=8;
    	$pages=new \Tools\page($total,$per);
    	//获取session数据
		$re_id=session("re_id");
		/*******判断未登陆*******/
		if($re_id==null){
			echo "<script type='text/javascript'>alert('请登陆后查看！');history.back();</script>";
                die();
		}
		
		$borrow=$info->query("SELECT a.id,a.borrowtime,a.status,a.reverttime,b.bo_code,b.bo_name,b.bo_id FROM `li_borrow`as a left join `li_book` as b on a.bookid=b.bo_id where readerid=$re_id $pages->limit");
		//获取分页
		$pagelist=$pages->fpage(array(3,4,5,6,7,8));
		//载入smarty模板
		$this->assign("session",session());
		$this->assign("borrow",$borrow);
		$this->assign("pagelist",$pagelist);
		$this->assign("library",$library);
		//载入视图
		$this->display("userborrowreglist");
	}
	/*****图书借阅查询*******/
	public function borrowQuery(){
		//载入视图
		$this->display("userborrowQuery");
	}
	/******借阅到期提醒*****/
	public function remind(){
		//载入视图
		$this->display();
	}
	/******个人信息*****/
	public function userinfo(){
		//实例化数据表
		 $reg=D("reader");
		 //获取当前登陆用户ID
		 $readerid=session("re_id");
        if(!empty($_POST)){
            //把接收到的密码字段加密
            $pwd=md5($_POST['re_pwd']);
            $_POST["re_pwd"]=$pwd;
            $info=$reg->create($_POST);
 
            if($info){
                $add=$reg->add($info);
                if($add){
                    $this->redirect("Index/index");
                }else{
                    $this->assign('errorinfo',$reg->getError());
                }
            }
        }else{
            //获取读者类型
            $read=D("readertype");
            $reader=$read->field("rt_id,rt_name")->select();
            //获取证件类型
            $paper=D("papers");
            $type=$paper->field("pa_id,pa_type")->select();
            /*获取读者资料*/
            //先判断：如果ID为空，则未登陆
            if($readerid==""){
            	echo "<script type='text/javascript'>alert('请登陆后修改!');history.back();</script>";
                die();
            }else{
            	$info=$reg->where("re_id=$readerid")->select();
	            //载入smarty模板
	            $this->assign("reader",$reader);
	            $this->assign("type",$type);
	            $this->assign("info",$info);
	            //载入视图
	            $this->display();
            }
        }
	}

	/*****归还图书*****/
	public function bookBack($id,$bo_id){
		//实例化数据表
		$info=D("borrow");
		$reader=D("reader");
		$book=D("book");

		//获取session数据
		$readid=session("re_id");
			/*把借阅人的借阅数量减一*/
			$read="update li_reader set re_num=re_num-1 where re_id='$readid'";
			$read_one=$reader->execute($read);
			//根据返回的句柄
			if($read_one){
				//把库存加一
				$stock="update li_book set bo_stock=bo_stock+1 where bo_id='$bo_id'";
				$stock_one=$book->execute($stock);
			
				if($stock_one){
					//删除借阅表数据
					$back=$info->delete($id);
					if($back){
						$this->redirect("Borrow/userBorrow");
						
					}else{
			 		echo "<script type='text/javascript'>alert('归还失败！');history.back();</script>";
                	die();
				}
			}
		}
	}
}