<?php
namespace Admin\Controller\Request;
use Think\Controller;
/**
*  请求 数据操控
*/
class index extends Controller
{

	public function run()
	{
		$get = I("get.");
		$one = $get[0];     //请求页面
	    preg_match_all("/(.*)\./", $one, $re);
	    empty($re[1])?"":$one=$re[1][0];;
		$two = $get[1];     //请求方式
		$three = $get['id'];     //请求参数
	
		if(!empty($one)&&!empty($two)&&!empty($three)){}else{goto info;}   
		
		$Operation = C("Admin.Operation");
   
        $condition = $Operation[$one][$two];

		if(empty($condition)) goto info;   
		
        foreach($condition['where'] as $k => $v) $condition['where']["$k"]=$three;
    
 
        $content = allBlue($condition);

        if($content)  
        	echo "<script>alert(\"操作成功\");window.location.href='/a/".$one."'</script>";
   	     else 
   	      info:
          	echo "<script>alert(\"操作失败\");window.location.href='/a/".$one."'</script>";
   	}
}