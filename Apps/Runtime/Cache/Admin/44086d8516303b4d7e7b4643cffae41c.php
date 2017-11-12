<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/blog/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>基本设置</title>
</head>
<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        系统管理
        <span class="c-gray en">&gt;</span>
        邮件配置
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form class="form form-horizontal" id="form-article-add" action="<?php echo U("Email/save?id=$vo[id]");?>" method="post" >
            <input name="id[]" id="checkbox" type="hidden" value="<?php echo ($vo["id"]); ?>">
            <div id="tab-system" class="HuiTab">
                <div class="tabBar cl">
                    <span>邮件设置</span>
                </div>
                <div class="tabCon">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">邮件协议：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="protocol" name="protocol" value="<?php echo ($vo["protocol"]); ?>" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">SMTP服务器主机：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="host" name="host" value="<?php echo ($vo["host"]); ?>" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">SMTP用户：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="user" name="user" value="<?php echo ($vo["user"]); ?>" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">SMTP 端口：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="port" name="port" value="<?php echo ($vo["port"]); ?>" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">邮箱帐号：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="account" name="account" value="<?php echo ($vo["account"]); ?>" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">邮箱密码：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="password" id="pwd" name="pwd" value="<?php echo ($vo["pwd"]); ?>" class="input-text">
                        </div>
                    </div>
                </div>
                <div class="tabCon">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                </div>
            </div>
        </form><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

<script type="text/javascript" src="/blog/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/blog/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> 



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/blog/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
                                    $(function () {
                                        $('.skin-minimal input').iCheck({
                                            checkboxClass: 'icheckbox-blue',
                                            radioClass: 'iradio-blue',
                                            increaseArea: '20%'
                                        });
                                        $("#tab-system").Huitab({
                                            index: 0
                                        });
                                    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>