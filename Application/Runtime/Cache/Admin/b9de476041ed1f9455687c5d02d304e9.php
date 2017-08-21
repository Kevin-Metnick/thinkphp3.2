<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>网站高级设置页面</title>
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/Admin/css/markdown.css">
    <script src="/Public/Admin/js/jquery-1.8.3.min.js"></script>
    <script src="/Public/Admin/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">请设置网站状态</label>
                    <select class="form-control input-lg">
                        <option value="0">关闭</option>
                        <option value="1">开启</option>
                    </select>
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">请设置留言板状态</label>
                    <select class="form-control input-lg">
                        <option value="0">关闭</option>
                        <option value="1">开启</option>
                    </select>
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">请设置注册状态</label>
                    <select class="form-control input-lg">
                        <option value="0">关闭</option>
                        <option value="1">开启</option>
                    </select>
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning1">请设置友情链接申请状态</label>
                    <select class="form-control input-lg">
                        <option value="0">关闭</option>
                        <option value="1">开启</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary btn-lg btn-block">提交</button>
            </div>
        </div>
    </div>
</body>
</html>