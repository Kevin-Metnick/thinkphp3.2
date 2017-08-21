<?php
namespace Admin\Controller\Request;
use Think\Controller;

/**
*   添加文章
*/
class addarticle extends Controller
{
	public function run()
	{
		$data = I("post.");
        $data['time']=time(); 
        $data['recent_time']=time(); 
        $data['type']=$data['article_type']; 
       
        $mod = M();
        $sql = $mod -> table(my_article_kevin)
                       -> field(['title','article','time','recent_time','image'])
                       ->create($data);
        $result = $mod->add($sql);
        
        // var_dump($result);
        if(!$result) goto bac;
         $data['article_id']=$result; 
 
    	$sql = $mod -> table(my_articletype_kevin)
		           -> field(['article_id','type'])
		           -> create($data);
	    $result = $mod->add($sql);
        if(!$result) goto bac;

	    $sql = $mod -> table(my_articlestate_kevin)
			           -> field(['article_id','state'])
			           -> create($data);
		$result = $mod->add($sql);
		if(!$result) 
			goto bac;
		else 
			die("<script>alert(\"操作成功\");window.location.href='/a/addarticle'</script>");
        
        bac:
           echo "<script>alert(\"操作失败\");window.location.href='/a/addarticle'</script>";
       
   	}


}
