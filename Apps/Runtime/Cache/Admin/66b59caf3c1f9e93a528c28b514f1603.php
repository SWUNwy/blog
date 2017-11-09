<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>首页--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/wp/Public/static/Admin/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/wp/Public/static/Admin/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="/wp/Public/static/Admin/css/main.css" media="all" />
</head>
<body class="childrenBody">
	<div class="panel_box row">
		<div class="panel col">
			<a href="javascript:;" data-url="page/message/message.html">
				<div class="panel_icon">
					<i class="layui-icon" data-icon="&#xe63a;">&#xe63a;</i>
				</div>
				<div class="panel_word newMessage">
					<span></span>
					<cite>新消息</cite>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="page/user/allUsers.html">
				<div class="panel_icon" style="background-color:#FF5722;">
					<i class="iconfont icon-dongtaifensishu" data-icon="icon-dongtaifensishu"></i>
				</div>
				<div class="panel_word userAll">
					<span></span>
					<cite>新增人数</cite>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="page/user/allUsers.html">
				<div class="panel_icon" style="background-color:#009688;">
					<i class="layui-icon" data-icon="&#xe613;">&#xe613;</i>
				</div>
				<div class="panel_word userAll">
					<span></span>
					<cite>用户总数</cite>
				</div>
			</a>
		</div>
		<div class="panel col">
			<a href="javascript:;" data-url="page/img/images.html">
				<div class="panel_icon" style="background-color:#5FB878;">
					<i class="layui-icon" data-icon="&#xe64a;">&#xe64a;</i>
				</div>
				<div class="panel_word imgAll">
					<span></span>
					<cite>图片总数</cite>
				</div>
			</a>
		</div>
		<div class="panel col max_panel">
			<a href="javascript:;" data-url="page/news/newsList.html">
				<div class="panel_icon" style="background-color:#2F4056;">
					<i class="iconfont icon-text" data-icon="icon-text"></i>
				</div>
				<div class="panel_word allNews">
					<span></span>
					<em>文章总数</em>
					<cite>文章列表</cite>
				</div>
			</a>
		</div>
	</div>

		<div class="sysNotice col">
			<blockquote class="layui-elem-quote title">系统基本参数</blockquote>
			<table class="layui-table">
				<colgroup>
					<col width="150">
					<col>
				</colgroup>
				<tbody>
                    <tr>
                        <th width="30%">服务器名称</th>
                        <td><span id="lbServerName"><?php echo $_SERVER['SERVER_NAME']; ?></span></td>
                    </tr>
                    <tr>
                        <td>服务器IP地址</td>
                        <td><?php echo strstr($_SERVER['SERVER_SOFTWARE'],'Microsoft')?$_SERVER['LOCAL_ADDR']:$_SERVER['SERVER_ADDR']; ?></td>
                    </tr>
					<tr>
						<td>服务器环境</td>
						<td class="server"><?php echo PHP_OS; ?></td>
					</tr>
					<tr>
						<td>PHP版本 </td>
                        <td><?php echo PHP_VERSION; ?></td>
					</tr>
                    <tr>
                        <td>运行状态 </td>
                        <td><?php echo C('CFG_ON')==1?"运行中":"维护中"; ?></td>
                    </tr>
                    <tr>
                        <td>服务器当前时间 </td>
                        <td><?php echo date('Y-m-d H:i:s',time()); ?></td>
                    </tr>
                    <tr>
                        <td>登录IP </td>
                        <td><?php echo get_client_ip();?></td>
                    </tr>
					<tr>
						<td>服务器域名</td>
                        <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<script type="text/javascript" src="/wp/Public/static/Admin/layui/layui.js"></script>
	<script type="text/javascript" src="/wp/Public/static/Admin/js/main.js"></script>
</body>
</html>