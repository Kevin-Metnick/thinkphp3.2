<?php
namespace Admin\Show;
use Think\Controller;

class IndexShow extends Controller{
    public $url;
    
    public function configAll()
    {
        // 获取当前页面的url 
        $url = $_SERVER['REDIRECT_URL'];
        // 拆分url
        $url = explode("/",$url);
        //正则匹配 去除 后缀
        preg_match_all("/(.*)\./", $url[2], $res_url);
        //判断当前参数是否存在后缀
        empty($res_url[1])?"":$url[2] = $res_url[1][0];;
        // 赋予变量        
        $show = $url['2'];
        // 判断是否是公共页面
        
        $new = C("Admin.Common");
         // 记录该变量
        $this->url=$show;

        empty($new["$show"])?"":$show=$new["$show"];;
        // 返回当前参数的页面
        return [$show,$this->url];
    }
    
    /**
     * [menuAll description]
     * @return [type] 返回目录信息
     */
    public function menuAll()
    {
        // 目录
    	return array("menu"=>[
	    		['HOME','index.html'], 
	    		['BLOG','blog-1.html'], 
	    		['PORTFOLIO',"portfolio-3c.html"], 
	    		['GALLERY',"gallery.html"], 
	    		["STYLINGS","stylings-texts.html"]
    		]);
    }

    public function content()
    {
        // 获取当前请求
        $name = $this->url;
        // 获取当前请求
        $Admin = C("Admin"); 

        // 获取到 tr 头
        $tr = $Admin['tr']["$name"];
        // 获取 指定 数据
        
        if (!empty($Admin["database"][$name])) {
            // 获取数据表后缀
            $condition = $Admin['database']["$name"];

            $content = onePace($condition);
     
            // 获取 操作 按钮 
            $button = $Admin['button']["$name"];
  
            // 获取当前页数
            return  [
                      "tr" => $tr,
                      "content" => $content,
                      "button" => $button,
                    ];
        }


    }






    
}