<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function _initialize(){
      header("Content-type:text/html;charset=utf-8");
    }

    public function index(){
      $url=U("login");
      header("Location:$url");
    }

    function login(){
      $this->display();
    }

    function check_login(){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $user=M('User');
      $where['username']=$username;
      $where['password']=$password;
      $arr=$user->where($where)->find();
      if($arr){
        $_SESSION['username']=$username;
        $_SESSION['id']=$arr['id'];
        if ($arr['status']==1){
          if ($arr['privilege']==0) $this->success('用户登录成功',U("admin"));
          if ($arr['privilege']==1) $this->success('用户登录成功',U("proposer"));
          if ($arr['privilege']==2) $this->success('用户登录成功',U("approver"));
          if ($arr['privilege']==3) $this->success('用户登录成功',U("cleaner"));
        }
        else{
          $this->error('对不起，您的账户还没有通过审批，请耐心等待');
        }
      }else{
        $this->error('该用户不存在或密码错误');
        }
    }

    public function register()
    {
        if (IS_POST) {
            $user=D('User');
            $user1=M('User');
            $user->create();
            $where['username']=$_POST['username'];
            $arr=$user1->where($where)->find();
            if ($arr){
              $this->error('该账号已存在');
            }else{
              $result=$user->add();   
              if($result) {
                  $this->success('注册成功，请耐心等待管理员审核');
                }else{
                  $this->error('注册失败，请联系管理员');
                }
              }
        }else {
            $this->display();
        }
    }

    function check_logined(){	//检测是否已经登录
      session_start();
      $user=M('User');
      $condition['username']=$_SESSION['username'];
      $us=$user->where($condition)->find();
      if(!$us)
      {
    	  $url=U('login');
    	  $this->assign("jumpUrl",$url);
    	  $this->error("还没有登录");
      }
    }

    function addCourse()//添加工作室
    {
      $this->check_logined();
      session_start();
      $course=M("Studio");
      $user=M("User");
      
      $name=$_POST[''];
      $capacity=$_POST[''];
      $classroom=$_POST[''];
      if (empty($name))
        $this->error("工作室名称不能为空");
      if (empty($capacity))
        $this->error("工作室容量不能为空");
      if (is_numeric($capacity)==false)
        $this->error("工作室容量必须为数字");

      if (!$data=$course->create())
        $this->error("create失败");   
      /*$data['teacher']=$_SESSION['user_id'];
      $data['selectedMan']=0;
      if (!$course->add($data))
        $this->error("发布失败");
      $url=U("publishCourse");
      $this->assign("jumpUrl",$url);
      $this->success("发布成功");*/  
    }

     function deleteCourse()//删除工作室
    {
        $this->check_logined();
        $id=$_GET['id'];
        $course=M("studio");

        if (!$course->delete($id))
          $this->error("删除失败");
        
        $url=U("manageCourse");
        $this->assign("jumpUrl",$url);
        $this->success("删除成功");        
    }
}