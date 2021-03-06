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
<title>数据字典</title>
</head>
<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        系统管理
        <span class="c-gray en">&gt;</span>
        数据字典
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <!--        <div class="cl pd-5 bg-1 bk-gray mt-20">
                    <span class="l">
                        <a class="btn btn-primary radius" onclick="" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 批量备份</a>
                    </span>
                    <span class="r">共有表：<strong><?php echo ($count); ?></strong> 条</span>
                </div>-->
        <div class="mt-20">
            <form action="{Db/backups}" method="post">
                <button type="submit" class="btn btn-success radius">批量备份</button>
                <table class="table table-border table-bordered table-bg table-hover table-sort">
                    <thead>
                        <tr class="text-c">
                            <th width="40"><input name="" type="checkbox" value=""></th>
                            <th width="40">ID</th>
                            <th width="100">表名称</th>
                            <th width="120">拥有字段数(个)</th>
                            <th width="100">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c va-m">
                            <td><input name="" type="checkbox" value=""></td>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["Tables_in_blog"]); ?></td>
                            <td><?php echo ($vo["Rows"]); ?></td>
                            <td class="td-manage">
                                <a style="text-decoration:none" class="ml-5" onClick="product_edit('备份表', 'product-add.html', '10001')" href="javascript:;" title="备份"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_del(this, '10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
<script type="text/javascript" src="/blog/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/blog/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> 



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/blog/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
        $('.table-sort').dataTable({
            "aaSorting": [[1, "desc"]], //默认第几个排序
            "bStateSave": true, //状态保存
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable": false, "aTargets": [0, 4]}// 制定列不参与排序
            ]
        });
        /*系统-栏目-添加*/
        function system_category_add(title, url, w, h) {
            layer_show(title, url, w, h);
        }
        /*系统-栏目-编辑*/
        function system_category_edit(title, url, id, w, h) {
            layer_show(title, url, w, h);
        }
        /*系统-栏目-删除*/
        function system_category_del(obj, id) {
            layer.confirm('确认要删除吗？', function (index) {
                $.ajax({
                    type: 'POST',
                    url: '',
                    dataType: 'json',
                    success: function (data) {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!', {icon: 1, time: 1000});
                    },
                    error: function (data) {
                        console.log(data.msg);
                    },
                });
            });
        }
</script>
</body>
</html>