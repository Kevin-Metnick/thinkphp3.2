<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>留言查看页面</title>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- layui.css -->
    <link href="/Public/Admin/plugin/layui/css/layui.css" rel="stylesheet" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
    <style>
        .layui-btn-small {
            padding: 0 15px;
        }

        .layui-form-checkbox {
            margin: 0;
        }

        tr td:not(:nth-child(0)),
        tr th:not(:nth-child(0)) {
            text-align: center;
        }

        #dataConsole {
            text-align: center;
        }
    </style>
</head>
<body>
    <fieldset id="dataConsole" class="layui-elem-field layui-field-title">
        <legend>控制台</legend>
       
    </fieldset>
    <fieldset id="dataList" class="layui-elem-field layui-field-title sys-list-field">
        <legend style="text-align:center;">留言查看列表</legend>


        <div class="layui-field-box">
            <div id="dataContent" class="">
                <!--内容区域 ajax获取-->
                <table style="" class="layui-table" lay-even="">
                    <colgroup>
                        <col width="180">
                        <col width="180">
                        <col >
                        <col width="180">
                        <col width="180">
                        <col width="90">
                        <col width="50">
                        <col width="50">
                    </colgroup>
                    <thead>
                         <tr>
                             <?php if(is_array($content['tr'])): $i = 0; $__LIST__ = $content['tr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tr): $mod = ($i % 2 );++$i;?><th><?php echo ($tr); ?></th> </th><?php endforeach; endif; else: echo "" ;endif; ?>
                            <th colspan="<?php echo count($content['button']);?>">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php if(is_array($content['content'])): $i = 0; $__LIST__ = $content['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?><tr> 
    <!-- 输出信息 -->
        <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><td><?php echo ($value); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- 输出按钮 -->
                          
             <?php $bn = [1=>'layui-btn-normal',2=>'layui-btn-danger'];?>
            <?php if(is_array($content['button'])): $i = 0; $__LIST__ = $content['button'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;?><td>
              <a href="<?php echo ($button[1]); ?>0/<?php echo ($url); ?>/1/<?php echo ($button[0]); ?>/id/<?php echo ($con["id"]); ?>"><button class="layui-btn layui-btn-small <?php echo ($bn[$i]); ?>"><?php echo ($button[0]); ?></button></a>
            </td><?php endforeach; endif; else: echo "" ;endif; ?>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <div id="pageNav"></div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">添加新的友情链接</h4>
                </div>
                <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">网站名称</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">联系方式</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">网站地址</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">网站简介</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary">提交</button>
                </div>
            </div>
          </div>
        </div>
    </fieldset>
    <!-- layui.js -->
    <script src="/Public/Admin/plugin/layui/layui.js"></script>
    <!-- layui规范化用法 -->
    <!-- <script type="text/javascript">
        layui.config({
            base: './js/'
        }).use('datalist');
    </script> -->
</body>
</html>