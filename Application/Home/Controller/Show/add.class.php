<?php
namespace Home\Controller\Show;
use Think\Controller;

/**
* 
*/
class add extends Controller
{
   public function run()
   {

     	$post = I("post.");


		if (in_array("index",array_keys($post))) {
		
			foreach ($post['index'] as $key => $value) {
	
				$e["{$value['name']}"]=$value['value'];
			}

			$e['time'] = time();
	
			unset($post);
			
			$post = $e;
		}

		$url = $post['url'];

		$Operation = C("Admin.add");
	   
	    $condition = $Operation["{$post['url']}"];
	 
		if(empty($condition)) goto info;   

		$condition['create'] = $post;
				
        $content = allBlue($condition);
    	
		
        if($content){  
        	$this->ajaxReturn(array("Msg"=>1,"Error"=>0));
   	     }else{
   	     	goto info; 
   	     } 

   	      info:
        	$this->ajaxReturn(false);
   }
}