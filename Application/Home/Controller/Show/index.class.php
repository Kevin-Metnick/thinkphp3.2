<?php
namespace Home\Controller\Show;
use Think\Controller;

/**
 * 页面展示
 * 输出前段页面
 */
class Index extends Controller
{
	public function run()
	{
              header("Content-Type:text/html;charset=utf8");
              //获取 show  的方法
                $info = A("index","Show");
                    // 执行configAll方法  获取页面地址
                $res = $info->configAll();
                    // 拼接地址
                $show = "mstp_85_empire/".$res[0];
                            // 获取目录
                $menu = $info->menuAll();
                $content   = $info->content();

               


                if ($res[0]=='post') {
                
                     $content['content']['article'] = preg_replace_callback("/\{\>(.*)\<\}/", function($data){
                        return "<br/><span class=\"language-php\">".$data[1]."</span><br/>";
                    }, $content['content']['article']);

                    $this ->assign(array("content"=>$content));

                      $content['content']['article'] = $this->fetch("Public/color"); 
                 }

   $this->assign(array(
                        "menu"=>$menu['menu'],//目录
                        "self"=>$res[0].".html", //当前页面
                        "url"=>$res[1], //当前页面
                        "content"=>$content, //当前页面
                        ));
               
                    // 数据输出
                    
                            // 输出页面 
                    $this->display($show);
	}


}

