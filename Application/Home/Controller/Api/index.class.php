<?php
namespace Home\Controller\Api;
use Think\Controller;
class Index extends Controller{

    public function run()
    {
        $User = A('index',"Api"); 
        $User->index();  
    }

}

