<?php
/**
 * Created by submlime.
 * User: qjy
 * Date: 2018/11/12
 * Time: 13:41
 */

namespace app\admin\controller;
use think\Controller;
use think\Db;

class Login extends Controller {
    public function index(){

        return $this->fetch();
    }
   

    //登录方法
    public function denglu(){
        $user = input('post.');
       
        if($user){
             return $this->success('登录成功！',url('admin/index/index'));

        }
       
    }

    //退出登录
    public function loginout(){
        //清空用户名
        session('user',null);

        return $this->success('退出成功！',url('admin/login/index'));

    }

    
}

