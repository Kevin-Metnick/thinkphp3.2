<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>SEO配置</title>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" />
    <script src="/Public/Admin/js/jquery-1.8.3.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        <form>
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站名称</label>
                    <input type="text" name="name" class="form-control" value="<?php echo ($content['content']['name']); ?>" id="inputWarning1">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站关键字</label>
                    <input type="text" name="keywords" class="form-control" value="<?php echo ($content['content']['keywords']); ?>" id="inputWarning1">
                    
                    <input type="hidden" name="id" value="<?php echo ($content['content']['id']); ?>">
                    <input type="hidden" name="url" value="<?php echo ($url); ?>">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站描述</label>
                    <textarea class="form-control" name="description" rows="3"><?php echo ($content['content']['description']); ?> </textarea>
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block">更新</button>
            </div>
        </div>
            </form>
    </div>
</body>
</html>
<script type="text/javascript">
$('form').submit(function() {
          // alert($(this).serialize());
          index = $(this).serializeArray();
          // console.log(index);

          $.post("/Admin/Request/add",{index},function(data){
                // console.log(data)
            if (data.Msg){
                alert("操作成功");
                window.location.href="";
            }else{
                alert("操作失败");
            }
          })
          // alert(index);
          return false;
        });
</script>