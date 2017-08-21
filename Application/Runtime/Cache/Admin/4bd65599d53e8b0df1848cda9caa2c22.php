<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>公告页面</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
    <!-- layui.css -->
    <link href="./plugin/layui/css/layui.css" rel="stylesheet" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
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
                                <a id="addArticle" class="layui-btn layui-btn-normal" data-toggle="modal"  data-target=".bs-example-modal-lg">发表新公告</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </fieldset>
    <fieldset id="dataList" class="layui-elem-field layui-field-title sys-list-field">
        <legend style="text-align:center;">公告列表</legend>
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
                            <th>发表时间</th>
                            <th>标题</th>
                            <th>作者</th>
                            <th>标签</th>
                            <th colspan="2">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2017-03-22 23:07</td>
                            <td>不落阁后台模板源码分享</td>
                            <td>Absolutely</td>
                            <td>Web前端</td>
                            <td>
                                <button class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;</i></button>
                            </td>
                            <td>
                                <button class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></button>
                            </td>
                        </tr>
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
                    <h4 class="modal-title" id="exampleModalLabel">添加新的公告</h4>
                </div>
                <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">公告标题</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">公告内容</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">公告发布时间</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">公告标签</label>
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
    <script src="./plugin/layui/layui.js"></script>
    <!-- layui规范化用法 -->
    <!-- <script type="text/javascript">
        layui.config({
            base: './js/'
        }).use('datalist');
    </script> -->
</body>
</html>