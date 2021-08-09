<?php


namespace app\index\controller;


use think\Controller;

class Test extends Controller {

    public function test(){
         $name =  input('name');
         $this->assign('name',$name);
//         return  $this->fetch();
        return view();
    }
}