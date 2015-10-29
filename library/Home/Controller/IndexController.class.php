<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	/****首页*****/
    public function index(){
    	//获取图书馆信息
    	$lib=D("library");
    	$library=$lib->field("id,bbs")->find("1");
        $library=explode("。",$library["bbs"]);
      

    	//实例化数据表，获取信息
    	$info=D("book");
    	//必读图书
    	$mustread=$info->field("bo_id,bo_name")->where("bo_mustread=1")->limit("8")->select();
    	//推荐图书
    	$recummend=$info->field("bo_id,bo_name")->where("bo_recummend=1")->limit("8")->select();
        //借阅排行
        $borrow=$info->field("bo_id,bo_name")->order("bo_borrowtimes desc")->limit("8")->select();
       
    	//首页推荐封面
    	$first=$info->field("bo_id,bo_photo,bo_name")->select();
        //dump(session());

    	//载入smarty模板
    	$this->assign("library",$library);
    	$this->assign("mustread",$mustread);
        $this->assign("recummend",$recummend);
    	$this->assign("borrow",$borrow);
    	$this->assign("first",$first);
        $this->assign("session",session());
        $this->display();
    }
    /*****用户注册*****/
    public function userreg(){
        $reg=D("reader");
        if(!empty($_POST)){
            //把接收到的密码字段加密
            $pwd=md5($_POST['re_pwd']);
            $_POST["re_pwd"]=$pwd;
            $info=$reg->create($_POST);
            // echo "<pre>";
            // var_dump($info);
            //     die();
            /*
            插入sql语句出现问题，出生日期不填报错，未在数据库和接收值中找出问题，现做判断，如果传值为空字符串则手动添加默认日期，此问题以后解决
             */
            if($info['re_birthday']==""){
                $info['re_birthday']="19900101";
            }
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
            //载入smarty模板
            $this->assign("reader",$reader);
            $this->assign("type",$type);
            //载入视图
            $this->display();
        }
    	
    }

    /*****用户登录******/
    public function Login(){
       if(!empty($_POST)){
        // var_dump($_POST);
        // die();
        //实例化数据表
        $read=new \Model\ReaderModel();
        //调用tp框架的验证方法
        $login=$read->checkNamePwd($_POST['re_username'],$_POST['re_pwd']);
        if($login){
            //验证成功，持久化session信息
            session("re_id",$login['re_id']);
            session("re_username",$login['re_username']);
            // echo "登陆成功！";
            //跳转页面
            $this->redirect("Index/index",array(),0,"登陆成功！");
           // var_dump(session());

        }else{
           echo "<script type='text/javascript'>alert('用户名或密码不正确！');history.back();</script>";
            die();
        }
    } 
    }
}