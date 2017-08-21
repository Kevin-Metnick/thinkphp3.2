<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>网站信息</title>
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
                    <label class="control-label" for="inputWarning1">站名</label>
                    <input type="text"  name="name"  class="form-control" value="<?php echo ($content['content']['name']); ?>" id="inputWarning1">
                </div>
               <!--  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站logoUrl</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div> -->
            <!--     <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站底部信息</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div> -->
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站访问量</label>
                    <input type="text" name="show" class="form-control" value="<?php echo ($content['content']['show']); ?>" id="inputWarning1">
                </div>
               
             <!--    <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站版本</label>
                    <input type="text" class="form-control" id="inputWarning1">
                </div> -->
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站类型</label>
                    <input type="text" name="type" class="form-control" value="<?php echo ($content['content']['type']); ?>" id="inputWarning1">
                </div>
             <input type="hidden" class="form-control" name="id" value="<?php echo ($content['content']['id']); ?>"  id="recipient-name">
             <input type="hidden" class="form-control" name="url" value="<?php echo ($url); ?>"  id="recipient-name">
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">网站简介</label>
                    <textarea class="form-control" name="self" rows="3" ><?php echo ($content['content']['self']); ?></textarea>
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