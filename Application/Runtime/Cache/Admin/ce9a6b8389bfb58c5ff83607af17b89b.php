<?php if (!defined('THINK_PATH')) exit();?>﻿<!--

 @Name：不落阁后台模板源码
 @Author：Absolutely
 @Site：http://www.lyblogs.cn

 -->


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>谷建文博客后台管理系统</title>
    <link rel="shortcut icon" href="/Public/Admin/images/Logo_40.png" type="image/x-icon">
    <!-- 音乐播放器css -->
    <link rel="stylesheet" href="/Public/Admin/css/mplayer.css">
    <!-- layui.css -->
    <link href="/Public/Admin/plugin/layui/css/layui.css" rel="stylesheet" />
    <!-- font-awesome.css -->
    <link href="/Public/Admin/plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- animate.css -->
    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet" />
    <!-- 本页样式 -->
    <link href="/Public/Admin/css/main.css" rel="stylesheet" />
</head>
<body>
    <div class="layui-layout layui-layout-admin">
        <!--顶部-->
        <div class="layui-header">
            <div class="ht-console">
                <div class="ht-user">
                    <img src="/Public/Admin/images/Logo_40.png" />
                    <a class="ht-user-name">超级管理员</a>
                </div>
            </div>
            <span class="sys-title">博客后台管理系统</span>
            <ul class="ht-nav">
                <li class="ht-nav-item">
                    <a target="_blank" href="/">前台入口</a>
                </li>
                <li class="ht-nav-item">
                    <a href="javascript:;" id="individuation"><i class="fa fa-tasks fa-fw" style="padding-right:5px;"></i>个性化</a>
                </li>
                <li class="ht-nav-item">
                    <a href="javascript:;"><i class="fa fa-power-off fa-fw"></i>注销</a>
                </li>
            </ul>
        </div>
        <!--侧边导航-->
        <div class="layui-side">
            <div class="layui-side-scroll">
                <ul class="layui-nav layui-nav-tree" lay-filter="leftnav">
                    <li class="layui-nav-item layui-this">
                        <a href="javascript:;"><i class="fa fa-home"></i>首页</a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;"><i class="fa fa-file-text"></i>内容管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" data-url="article.html" data-id="1">文章管理</a></dd>
                            <dd><a href="javascript:;" data-url="addarticle.html" data-id="2">发布文章</a></dd>
                            <dd><a href="javascript:;" data-url="type.html" data-id="3">分类管理</a></dd>
                            <!-- <dd><a href="javascript:;">笔记本管理</a></dd> -->
                            <dd><a href="javascript:;" data-url="recovery.html" data-id="4">文章回收站</a></dd>
                            <!-- <dd><a href="javascript:;">资源回收站</a></dd> -->
                        </dl>
                    </li>
                   <!--  <li class="layui-nav-item">
                        <a href="javascript:;"><i class="fa fa-user"></i>用户管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;">全部用户</a></dd>
                            <dd><a href="javascript:;">黑名单管理</a></dd>
                        </dl>
                    </li> -->
                    <li class="layui-nav-item">
                        <a href="javascript:;"><i class="fa fa-wrench"></i>扩展管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" data-url="link.html" data-id="5">友情链接</a></dd>
                            <dd><a href="javascript:;" data-url="user.html" data-id="6">关于博主</a></dd>
                            <!-- <dd><a href="javascript:;" data-url="gungao.html" data-id="8">网站公告</a></dd> -->
                            <!-- <dd><a href="javascript:;" data-url="new.html" data-id="9">每日一语</a></dd> -->
                            <dd><a href="javascript:;" data-url="leaving.html" data-id="10">留言管理</a></dd>
                            <!-- <dd><a href="javascript:;" data-url="add.html" data-id="11">广告管理</a></dd> -->
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;"><i class="fa fa-cog"></i>系统配置</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" data-url="web.html" data-id="7">网站信息</a></dd>
                            <dd><a href="javascript:;" data-url="seo.html" data-id="12">SEO配置</a></dd>
                            <dd><a href="javascript:;" data-url="webgaoji.html" data-id="13">网站高级设置</a></dd>
                            <!-- <dd><a href="javascript:;" data-url="" data-id="14">网站ip黑名单</a></dd> -->
                            <!-- <dd><a href="javascript:;">QQ互联</a></dd>
                            <dd><a href="javascript:;">数据库配置</a></dd>
                            <dd><a href="javascript:;">站点地图</a></dd> -->
                        </dl>
                    </li>
                   <!--  <li class="layui-nav-item">
                        <a href="javascript:;"><i class="fa fa-info-circle"></i>其他信息</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;">操作日志</a></dd>
                        </dl>
                    </li> -->
                </ul>
            </div>
        </div>
        <!--收起导航-->
        <div class="layui-side-hide layui-bg-cyan">
            <i class="fa fa-long-arrow-left fa-fw"></i>收起导航
        </div>
        <!--主体内容-->
        <div class="layui-body">
            <div style="margin:0;position:absolute;top:4px;bottom:0px;width:100%;" class="layui-tab layui-tab-brief" lay-filter="tab" lay-allowclose="true">
                <ul class="layui-tab-title">
                    <li lay-id="0" class="layui-this">首页</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <p style="padding: 10px 15px; margin-bottom: 20px; margin-top: 10px; border:1px solid #ddd;display:inline-block;">
                            上次登陆
                            <span style="padding-left:1em;">IP：192.168.1.101</span>
                            <span style="padding-left:1em;">地点：北京通州区</span>
                            <span style="padding-left:1em;">时间：2017-3-26 14：12</span>
                        </p>
                        <fieldset class="layui-elem-field layui-field-title">
                            <legend>统计信息</legend>
                            <div class="layui-field-box">
                                <div style="display: inline-block; width: 100%;">
                                    <div class="ht-box layui-bg-blue">
                                        <p>123</p>
                                        <p>用户总数</p>
                                    </div>
                                    <div class="ht-box layui-bg-red">
                                        <p>32</p>
                                        <p>今日注册</p>
                                    </div>
                                    <div class="ht-box layui-bg-green">
                                        <p>55</p>
                                        <p>今日登陆</p>
                                    </div>
                                    <div class="ht-box layui-bg-orange">
                                        <p>123</p>
                                        <p>文章总数</p>
                                    </div>
                                    <div class="ht-box layui-bg-cyan">
                                        <p>321</p>
                                        <p>资源总数</p>
                                    </div>
                                    <div class="ht-box layui-bg-black">
                                        <p>231</p>
                                        <p>笔记总数</p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <!--底部信息-->
        <div class="layui-footer">
            <p style="line-height:44px;text-align:center;">谷建文博客后台管理系统 - Design By LY</p>
        </div>
        <!--快捷菜单-->
        <div class="short-menu" style="display:none">
            <fieldset class="layui-elem-field layui-field-title">
                <legend style="color:#fff;padding-top:10px;padding-bottom:10px;">快捷菜单</legend>
                <div class="layui-field-box">
                    <div style="width:832px;margin:0 auto;">
                        <div class="windows-tile windows-two">
                            <i class="fa fa-file-text"></i>
                            <span data-url="datalist.html" data-id="1">文章管理</span>
                        </div>
                        <div class="windows-tile windows-one">
                            <i class="fa fa-volume-up"></i>
                            <span data-url="gungao.html" data-id="2">网站公告</span>
                        </div>
                        <div class="windows-tile windows-one">
                            <i class="fa fa-comments-o"></i>
                            <span data-url="leaving.html" data-id="3">留言管理</span>
                        </div>
                        <div class="windows-tile windows-two">
                            <i class="fa fa-handshake-o"></i>
                            <span data-url="link.html" data-id="4">友情链接</span>
                        </div>
                        <div class="windows-tile windows-one">
                            <i class="fa fa-arrow-circle-right"></i>
                            <span data-url="seo.html" data-id="5">SEO配置</span>
                        </div>
                        <div class="windows-tile windows-one">
                            <i class="fa fa-wrench"></i>
                            <span data-url="" data-id="6">网站高级设置</span>
                        </div>
                        <div class="windows-tile windows-one">
                            <i class="fa fa-tags"></i>
                            <span data-url="" data-id="7">文章分类管理</span>
                        </div>
                        <div class="windows-tile windows-one">
                            <i class="fa fa-pencil-square-o"></i>
                            <span data-url="addarticle.html" data-id="8">文章发布</span>
                        </div>
                        <div class="windows-tile windows-two">
                            <i class="fa fa-hourglass-half"></i>
                            <span data-url="" data-id="9">回收站管理</span>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </fieldset>

        </div>
        <!--个性化设置-->
        <div class="individuation animated flipOutY layui-hide">
            <ul>
                <li><i class="fa fa-cog" style="padding-right:5px"></i>个性化</li>
            </ul>
            <div class="explain">
                <small>从这里进行系统设置和主题预览</small>
            </div>
            <div class="setting-title">设置</div>
            <div class="setting-item layui-form">
                <span>侧边导航</span>
                <input type="checkbox" lay-skin="switch" lay-filter="sidenav" lay-text="ON|OFF" checked>
            </div>
            <div class="setting-item layui-form">
                <span>管家提醒</span>
                <input type="checkbox" lay-skin="switch" lay-filter="steward" lay-text="ON|OFF" checked>
            </div>
            <div class="setting-title">主题</div>
            <div class="setting-item skin skin-default" data-skin="skin-default">
                <span>低调优雅</span>
            </div>
            <div class="setting-item skin skin-deepblue" data-skin="skin-deepblue">
                <span>蓝色梦幻</span>
            </div>
            <div class="setting-item skin skin-pink" data-skin="skin-pink">
                <span>姹紫嫣红</span>
            </div>
            <div class="setting-item skin skin-green" data-skin="skin-green">
                <span>一碧千里</span>
            </div>
        </div>
    </div>
    <!-- 音乐播放器 -->
    <div class="mp" id="mp">
        <div class="mp-box">
            <img src="/Public/Admin/img/mplayer_error.png" alt="music cover" class="mp-cover">
            <div class="mp-info">
                <p class="mp-name">燕归巢</p>
                <p class="mp-singer">许嵩</p>
                <p><span class="mp-time-current">00:00</span>/<span class="mp-time-all">00:00</span></p>
            </div>
            <div class="mp-btn">
                <button class="mp-prev" title="上一首"></button>
                <button class="mp-pause" title="播放"></button>
                <button class="mp-next" title="下一首"></button>
                <button class="mp-mode" title="播放模式"></button>
                <div class="mp-vol">
                    <button class="mp-vol-img" title="静音"></button>
                    <div class="mp-vol-range" data-range_min="0" data-range_max="100" data-cur_min="80">
                        <div class="mp-vol-current"></div>
                        <div class="mp-vol-circle"></div>
                    </div>
                </div>
            </div>
            <div class="mp-pro">
                <div class="mp-pro-current"></div>
            </div>
            <div class="mp-menu">
                <button class="mp-list-toggle"></button>
                <button class="mp-lrc-toggle"></button>
            </div>
        </div>
        <button class="mp-toggle">
            <span class="mp-toggle-img"></span>
        </button>
        <div class="mp-lrc-box">
            <ul class="mp-lrc"></ul>
        </div>
        <button class="mp-lrc-close"></button>
        <div class="mp-list-box">
            <ul class="mp-list-title"></ul>
            <table class="mp-list-table">
                <thead>
                    <tr>
                        <th>歌名</th>
                        <th>歌手</th>
                        <th>时长</th>
                    </tr>
                </thead>
                <tbody class="mp-list"></tbody>
            </table>
        </div>
    </div>
    <script>
        
    </script>
    <!-- layui.js -->
    <script src="/Public/Admin/plugin/layui/layui.js"></script>
    <!-- layui规范化用法 -->
    <script type="text/javascript">
        layui.config({
            base: '/Public/Admin/js/'
        }).use('main');

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
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/Public/Admin/js/jquery.js"></script>
    <script src="/Public/Admin/js/mplayer.js"></script>
    <script src="/Public/Admin/js/mplayer-list.js"></script>
    <script src="/Public/Admin/js/mplayer-functions.js"></script>
    <script src="http://cdn.bootcss.com/jquery-nstslider/1.0.13/jquery.nstSlider.min.js"></script>
    <script>
        var modeText = ['顺序播放','单曲循环','随机播放','列表循环'];
        var player = new MPlayer({
            // 容器选择器名称
            containerSelector: '.mp',
            // 播放列表
            songList: mplayer_song,
            // 专辑图片错误时显示的图片
            defaultImg: 'img/mplayer_error.png',
            // 自动播放
            autoPlay: true,
            // 播放模式(0->顺序播放,1->单曲循环,2->随机播放,3->列表循环(默认))
            playMode:0,
            playList:0,
            playSong:0,
            // 当前歌词距离顶部的距离
            lrcTopPos: 34,
            // 列表模板，用${变量名}$插入模板变量
            listFormat: '<tr><td>${name}$</td><td>${singer}$</td><td>${time}$</td></tr>',
            // 音量滑块改变事件名称
            volSlideEventName:'change',
            // 初始音量
            defaultVolume:80
        }, function () {
            // 绑定事件
            this.on('afterInit', function () {
                // console.log('播放器初始化完成，正在准备播放');
            }).on('beforePlay', function () {
                var $this = this;
                var song = $this.getCurrentSong(true);
                var songName = song.name + ' - ' + song.singer;
                // console.log('即将播放'+songName+'，return false;可以取消播放');
            }).on('timeUpdate', function () {
                var $this = this;
                // console.log('当前歌词：' + $this.getLrc());
            }).on('end', function () {
                var $this = this;
                var song = $this.getCurrentSong(true);
                var songName = song.name + ' - ' + song.singer;
                // console.log(songName+'播放完毕，return false;可以取消播放下一曲');
            }).on('mute', function () {
                var status = this.getIsMuted() ? '已静音' : '未静音';
                // console.log('当前静音状态：' + status);
            }).on('changeMode', function () {
                var $this = this;
                var mode = modeText[$this.getPlayMode()];
                $this.dom.container.find('.mp-mode').attr('title',mode);
                // console.log('播放模式已切换为：' + mode);
            });
        });


        // $(document.body).append(player.audio); // 测试用

        setEffects(player);
        
    </script>
    
</body>
</html>