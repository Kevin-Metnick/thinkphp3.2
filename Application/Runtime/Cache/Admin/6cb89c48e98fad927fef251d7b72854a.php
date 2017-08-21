<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>博主信息</title>
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
                    <label class="control-label" for="inputWarning1">博主姓名</label>
                    <input type="text" name="name" class="form-control" value="<?php echo ($content['content']['name']); ?>" id="inputWarning1">
                </div>
               <!--  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">博主兴趣</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div> -->
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">博主QQ</label>
                    <input type="text" name="qq" class="form-control" value="<?php echo ($content['content']['qq']); ?>" id="inputWarning1">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">博主邮箱</label>
                    <input type="text" name="email" class="form-control"  value="<?php echo ($content['content']['email']); ?>" id="inputWarning1">
                    <input type="hidden" name="url" class="form-control"  value="<?php echo ($url); ?>" id="inputWarning1">
                </div>
               
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">博主Github</label>
                    <input type="text"  name="gethub"  class="form-control"  value="<?php echo ($content['content']['gethub']); ?>" id="inputWarning1">
                </div>
              <!--   <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">格言语录</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div> -->
                <!-- <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">技术方向</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div> -->
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">博主简介</label>
                    <textarea name="self" class="form-control" rows="10" ><?php echo ($content['content']['self']); ?></textarea>
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block">更新</button>
            </div>
            </form>
        </div>
    </div>
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
</body>
</html>