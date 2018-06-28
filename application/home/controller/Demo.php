<?php
namespace app\home\controller;

class Demo
{
  
  
    //use \traits\controller\Jump;
  
	public function hello(){
		
		var_dump("我事模块2");
		
		$Test = new \my\Test();
		$Test->sayHello();
		
		
		
		// $t2 = new \customNamespace\Test();
		 
		//$this->redirect("http://www.baidu.com");
	}
	
	
	 public function index()
    {
        $data = ['name'=>'thinkphp','url'=>'thinkphp.cn'];
		return xml(['data'=>$data,'code'=>1,'message'=>'操作完成']);
        // return json(['data'=>$data,'code'=>1,'message'=>'操作完成']);
    }
	
	
	
}
