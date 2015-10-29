<?php
namespace Home\Controller;
use Think\Controller;

class BookController extends Controller{
	/****图书查询****/
	public function bookQuery(){
        //获取图书馆信息
        $library=$this->library();

        //$this->assign("session",session());
        
        // 实例化数据表
        $book=D("book");
        $code=$_GET['code']; //条形码
        $bookname=$_GET['bookname']; //书名
        $name=$_GET['name']; //综合
        // var_dump($bookname);
        //die();
        //分页效果
        $total=$book->count();
        $per=8;
        $pages=new \Tools\page($total,$per);

        if(!empty($code)){
            $info=$book->query("SELECT a.bo_id,a.bo_code,a.bo_name,a.bo_stock,b.by_name,c.ca_name,d.pr_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_bookcase as c on a.bo_bookcaseid=c.ca_id left join li_press as d on a.bo_pressid=d.pr_id WHERE  bo_code like '%$code%'");
            //载入smarty模板
            $this->assign("info",$info);
            
        }
        
        if(!empty($bookname)){
            $info=$book->query("SELECT a.bo_id,a.bo_code,a.bo_name,a.bo_stock,b.by_name,c.ca_name,d.pr_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_bookcase as c on a.bo_bookcaseid=c.ca_id left join li_press as d on a.bo_pressid=d.pr_id WHERE  bo_name like '%$bookname%'");
                //载入smarty模板
                $this->assign("info",$info);
        }
        
        // var_dump($book->getLastsql());
        // die();

        if(!empty($name)){
            $info=$book->query("SELECT a.bo_id,a.bo_code,a.bo_name,a.bo_stock,b.by_name,c.ca_name,d.pr_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_bookcase as c on a.bo_bookcaseid=c.ca_id left join li_press as d on a.bo_pressid=d.pr_id WHERE  bo_name like '%$name%' or bo_code like '%$name%' $pages->limit");
            
            $sum=count($info);
            // var_dump($sum);
            // die();
            if($sum >= $per){
                $pagelist=$pages->fpage(array(3,4,5,6,7,8));
            }
                
        
                //载入smarty模板
                $this->assign("info",$info);
                $this->assign("name",$name);
                $this->assign("pagelist",$pagelist);
        }
        //$this->assign("session",session());
        $this->assign("library",$library);
       //载入视图
        $this->display("book_Query");
	}
	/*****图书推荐******/
	public function bookTuijian(){
		//获取图书馆信息
        $library=$this->library();

    	//获取新书信息
    	$info=new \Model\BookModel();
    	//分页效果
    	$total=$info->count();
    	$per=8;
    	$pages=new \Tools\page($total,$per);

    	$newbook=$info->query("SELECT a.bo_id,a.bo_code,a.bo_name,b.by_name,c.pr_name,d.ca_name,a.bo_stock FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_press as c on a.bo_pressid=c.pr_id left join li_bookcase as d on a.bo_bookcaseid=d.ca_id where bo_recummend=1 $pages->limit ");
    	$pagelist=$pages->fpage(array(3,4,5,6,7,8));
    	// 载入smarty模板
    	$this->assign("library",$library);
    	$this->assign("newbook",$newbook);
    	$this->assign("pagelist",$pagelist);
		//载入视图
		$this->display("book_tuijian");
	}
	/****图书必读*****/
	public function bookMustread(){
		//获取图书馆信息
        $library=$this->library();

    	//获取图书必读信息
    	$info=new \Model\BookModel();
    	//分页效果
    	$total=$info->count();
    	$per=8;
    	$pages=new \Tools\page($total,$per);

    	$mustread=$info->query("SELECT a.bo_id,a.bo_code,a.bo_name,b.by_name,c.pr_name,d.ca_name,a.bo_stock FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_press as c on a.bo_pressid=c.pr_id left join li_bookcase as d on a.bo_bookcaseid=d.ca_id where bo_mustread=1 $pages->limit");
    	$pagelist=$pages->fpage(array(3,4,5,6,7,8));
    	// 载入smarty模板
    	$this->assign("library",$library);
    	$this->assign("mustread",$mustread);
    	$this->assign("pagelist",$pagelist);
		//载入视图
		$this->display("book_bidu");
	}
	/****图书详细信息****/
	public function bookInfo($bo_id){
		//获取图书馆信息
        $library=$this->library();

		//根据ID查找相应的图书信息
		$info=new \Model\BookModel();
		$book=$info->query("SELECT a.*,b.by_name,c.pr_name,d.ca_name FROM `li_book`as a left join li_booktype as b on a.bo_typeid=b.by_id left join li_press as c on a.bo_pressid=c.pr_id left join li_bookcase as d on a.bo_bookcaseid=d.ca_id where bo_id=$bo_id");
		// 载入smarty模板
    	$this->assign("library",$library);
        $this->assign("book",$book);
		$this->assign("session",session());
		//载入视图
		$this->display("book_view");
	}
    /*****图书借阅******/
    public function borrow(){
        //实例化数据表
        $book=D("book");
        $read=D("reader");
        $retype=D("readertype");
        $borrow=D("borrow");
        //获取借阅人ID和要借阅图书ID
        $bookid=$_GET['bookid'];
        $readid=$_GET['readerid'];
      
        /*判断是否登陆，如果读者ID为空，就未登陆*/
        if($readid==null){
            echo "<script type='text/javascript'>alert('请登录后提交借阅申请！');history.back();</script>";
            die();
           } 
        /*判断图书库存*/
        $stock=$book->field("bo_stock")->find($bookid);
            
            if($stock['bo_stock']=="0"){
                echo "<script type='text/javascript'>alert('哦~~ 库存不足，看看其它的吧！');history.back();</script>";
                die();
            }
        /*判断用户是否有条形码*/
         $code=$read->field("re_code")->find($readid);
            if($code['re_code']==""){
                echo "<script type='text/javascript'>alert('暂无借阅权限，请联系管理员！');history.back();</script>";
                die();
            }
        /*判断用户借阅数量是否还能借阅*/
        //已借数量
        $re_num=$read->field("re_num")->find($readid);
        //查找用户的类型id
        $re_typeid=$read->field("re_typeid")->find($readid);
        //根据类型id查找用户能借的数量
        $rtnum=$retype->field("rt_number")->find($re_typeid['re_typeid']);
        /*判断：如已借数量等于能借数量，则不能再借*/
        if($re_num['re_num']>=$rtnum['rt_number']){
            echo "<script type='text/javascript'>alert('借阅数量已满，请归还后再借阅！');history.back();</script>";
                die();
        }
        /*判断图书是否已借过*/
        //已借阅用户ID
        $borrowReaderID=$borrow->field("readerid")->where("readerid='$readid'")->find();
        $re_id=$borrowReaderID["readerid"];//取出ID
        //根据已借阅用户ID查找已借阅的图书ID
        $borrowBookID=$borrow->field("bookid")->where("readerid='$re_id'")->select();
        //$borrowBookID是二维数组，遍历判断
        foreach ($borrowBookID as $key => $value) {
            //判断：如果用户ID相等并且图书ID相等，则已借阅
            if($readid==$re_id && in_array($bookid, $value)){
             echo "<script type='text/javascript'>alert('您已借阅此图书，不能再借阅！');history.back();</script>";
                die();
        }
        }
        
        /*添加借阅的信息*/
        if(!empty($_GET)){
            //添加用户借阅的当前时间
            $_GET['borrowtime']=time();
            //默认归还时间"7"天，可通过变量代替
            $_GET['reverttime']=strtotime("7 days");
            $info=$borrow->create($_GET);
            if($info){
                 $add=$borrow->add($info);
                 if($add){
            //添加成功，把对应的库存减一并把图书的借阅次数加一
                    $st=$stock["bo_stock"]-1;
                    $sql="update li_book set bo_stock='$st',bo_borrowtimes=bo_borrowtimes+1 where bo_id='$bookid'";
                    $book_one=$book->execute($sql);
                }else{
                    die();
                }
                    //把对应的借阅人借阅数量加一
                    $read_num=$re_num['re_num']+1;
                    $sql2="update li_reader set re_num='$read_num' where re_id='$readid'";
                    $read_one=$read->execute($sql2);
                   if($read_one){
                       $this->redirect("Borrow/userBorrow");
                   }else{
                        echo "<script type='text/javascript'>alert('借阅失败！');history.back();</script>";
                            die();
                   }
            }
           
        }

    }
    /****获取公告*****/
    private function library(){
        //获取图书馆信息
        $lib=D("library");
        $library=$lib->field("id,bbs")->find("1");
        $library=explode("。",$library["bbs"]);

        return $library;
    }
}