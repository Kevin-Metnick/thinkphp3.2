<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>友情链接页面</title>
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
        <div class="layui-field-box">
            <div id="articleIndexTop">
                <form class="layui-form layui-form-pane" action="">
                    <div class="layui-form-item" style="margin:0;margin-top:15px;">
                        <div class="layui-inline">
                            <div class="layui-input-inline" style="width:auto">
                                <a id="addArticle" class="layui-btn layui-btn-normal" data-toggle="modal"  data-target=".bs-example-modal-lg">添加友情链接</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </fieldset>
    <fieldset id="dataList" class="layui-elem-field layui-field-title sys-list-field">
        <legend style="text-align:center;">友情链接列表</legend>
        <div class="layui-field-box">
            <div id="dataContent" class="">
                <!--内容区域 ajax获取-->
                <table style="" class="layui-table" lay-even="">
                    <colgroup>
                        <col width="180">
                        <col>
                        <col width="150">
                        <col width="180">
                        <col width="90">
                        <col width="90">
                        <col width="50">
                        <col width="50">
                    </colgroup>
                    <thead>
                        <tr>
                             <?php if(is_array($content['tr'])): $i = 0; $__LIST__ = $content['tr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tr): $mod = ($i % 2 );++$i;?><th> <?php echo ($tr); ?></th> </th><?php endforeach; endif; else: echo "" ;endif; ?>
                            <th colspan="<?php echo count($content['button']);?>">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

<?php if(is_array($content['content'])): $i = 0; $__LIST__ = $content['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?><tr> 
    <!-- 输出信息 -->
        <?php if(is_array($con)): $i = 0; $__LIST__ = $con;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><td><?php echo ($value); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>

    <!-- 输出按钮 -->
                            <td>
                                <button type="button" class="btn btn-primary">已通过</button>
                            </td>
             <?php $bn = [1=>'layui-btn-normal',2=>'layui-btn-danger'];?>
            <?php if(is_array($content['button'])): $i = 0; $__LIST__ = $content['button'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$button): $mod = ($i % 2 );++$i;?><td>
              <a href="<?php echo ($button[1]); ?>0/<?php echo ($url); ?>/1/<?php echo ($button[0]); ?>/id/<?php echo ($con["id"]); ?>"><button class="layui-btn layui-btn-small <?php echo ($bn[$i]); ?>"><?php echo ($button[0]); ?></button></a>
            </td><?php endforeach; endif; else: echo "" ;endif; ?>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                         <!--    <td>百度</td>
                            <td>百度搜索</td>
                            <td>http://www.baidu.com</td>
                            <td>50667@163.com</td>
                            <td>
                                <button type="button" class="btn btn-primary">已通过</button>
                            </td>
                            <td>
                                <button class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;</i></button>
                            </td>
                            <td>
                                <button class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></button>
                            </td>
                        </tr> -->
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
                </div>  <form>
                <div class="modal-body">
                  
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">网站名称</label>
                        <input type="text" name='friendname' class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">链接</label>
                        <textarea class="form-control" name="link" id="message-text"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">图片</label>
                        <input type="text" class="form-control" name="img" id="recipient-name">
                      </div>
                       <input type="hidden" class="form-control" name="url" value="<?php echo ($url); ?>"  id="recipient-name">
                      <!-- <div class="form-group">
                        <label for="recipient-name" class="control-label">网站简介</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div> -->
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="submit btn btn-primary">提交</button>
                </div>  
             </form>
            </div>
          </div>
        </div>




    </fieldset>
    <!-- layui.js -->
    <script src="/Public/Admin/plugin/layui/layui.js"></script>
    <!-- layui规范化用法 -->
    <script type="text/javascript">
       $('form').submit(function() {
          // alert($(this).serialize());
          index = $(this).serializeArray();
          // console.log(index);

          $.post("/Admin/Request/add",{index},function(data){
                // console.log(data)
            if (data.Msg){
                alert("添加成功");
                window.location.href="";
            }else{
                alert("添加失败");
            }
          })
          // alert(index);
          return false;
        });
    </script>
</body>
</html>