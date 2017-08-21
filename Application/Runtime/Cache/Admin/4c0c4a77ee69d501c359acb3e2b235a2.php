<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>CSS Tables</title> 
<!-- <link href="styles.css" rel="stylesheet" type="text/css" />  -->
</head> 
<style type="text/css"> 
/* CSS Document */ 

body { 
    font: normal 11px auto "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
    color: #4f6b72; 
    /*background: #E6EAE9; */
} 

a { 
    color: #c75f3e; 
} 

#mytable { 
    width: 100%; 
    padding: 0; 
    margin: 0; 
} 

caption { 
    padding: 0 0 5px 0; 
    width: 700px;      
    font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
    text-align: right; 
} 

th { 
    font: bold 15px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
    color: #4f6b72; 
    border-right: 1px solid #C1DAD7; 
    border-bottom: 1px solid #C1DAD7; 
    border-top: 1px solid #C1DAD7; 
    letter-spacing: 1px; 
    text-transform: uppercase; 
    text-align: left; 
    padding: 20px 20px 20px 24px; 
    background: #CAE8EA url(images/bg_header.jpg) no-repeat; 
} 

th.nobg { 
    border-top: 0; 
    border-left: 0; 
    border-right: 1px solid #C1DAD7; 
    /*background: none; */
} 

td { 
    border-right: 1px solid #C1DAD7; 
    border-bottom: 1px solid #C1DAD7; 
    background: #fff; 
    font-size:11px; 
    padding: 6px 6px 6px 12px; 
    color: #4f6b72; 
} 


td.alt { 
    background: #F5FAFA; 
    color: #797268; 
} 

th.spec { 
    border-left: 1px solid #C1DAD7; 
    border-top: 0; 
    background: #fff url(images/bullet1.gif) no-repeat; 
    font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
} 

th.specalt { 
    border-left: 1px solid #C1DAD7; 
    border-top: 0; 
    background: #f5fafa url(images/bullet2.gif) no-repeat; 
    font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; 
    color: #797268; 
} 
.ms{
    text-decoration:none;
}
.ms:hover{
    color:#C1DAD7;
}
/*---------for IE 5.x bug*/ 
html>body td{ font-size:11px;} 
</style> 
<body> 
<a class='ms' href="" style=" float:right;">页面刷新</a>
<table id="mytable" cellspacing="0" summary="The technical specifications of the Apple PowerMac G5 series"> 
<caption> </caption> 

  <tr> 
      <?php if(is_array($content['tr'])): $i = 0; $__LIST__ = $content['tr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tr): $mod = ($i % 2 );++$i;?><th scope="col" abbr="Configurations"><?php echo ($tr); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- <th scope="col" abbr="Dual 1.8">标题</th> 
        <th scope="col" abbr="Dual 2">文章</th> 
        <th scope="col" abbr="Dual 2.5">图片</th> 
        <th scope="col" abbr="Dual 2.5">发布时间</th> 
        <th scope="col" abbr="Dual 2.5">操作</th>  -->
      
  </tr> 

<?php if(is_array($content['content'])): $i = 0; $__LIST__ = $content['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?><tr> 
    <!-- 输出信息 -->
        <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><th scope="row" abbr="Model" class="spec"><?php echo ($value); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- 输出按钮 -->
        <th scope="row" abbr="Model" class="spec">
            <?php if(is_array($content['button'])): $i = 0; $__LIST__ = $content['button'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;?><a class='ms' href="<?php echo ($button[1]); ?>0/<?php echo ($url); ?>/1/<?php echo ($button[0]); ?>/id/<?php echo ($con["id"]); ?>" style="" ><?php echo ($button[0]); ?></a>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
        </th>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<!--   <tr> 
    <th scope="row" abbr="G5 Processor" class="specalt">mapabc</th> 
    <td class="alt">Dual 1.8GHz PowerPC G5</td> 
    <td class="alt">Dual 2GHz PowerPC G5</td> 

    <td class="alt">Dual 2.5GHz PowerPC G5</td> 
  </tr> 
  <tr> 
    <th scope="row" abbr="Frontside bus" class="spec">地图名片</th> 
    <td>900MHz per processor</td> 
    <td>1GHz per processor</td> 
    <td>1.25GHz per processor</td> 

  </tr> 
  <tr> 
    <th scope="row" abbr="L2 Cache" class="specalt">图秀卡</th> 
    <td class="alt">512K per processor</td> 
    <td class="alt">512K per processor</td> 
    <td class="alt">512K per processor</td> 
  </tr>  -->
<script type="text/javascript">
// window.location.href='';
</script>
</table> 
</body> 
</html>