<?php
namespace Home\Controller\Index;
use Think\Controller;
class test extends Controller{

    public function run()
    {
        // \Think\Log::record('测试日志信息');
    	// trace(array("1","2"),"测试日志信息","My");
        echo "this is  Controller  Index/test ";
    }

    
}

