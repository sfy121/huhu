<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<title>初见后台</title>
<meta name="keywords" content="初见">
<!-- <link rel="stylesheet" href="/Public/js/webuploader/webuploader.css" />
<link rel='stylesheet' href='/Public/cms/justifiedgallery.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='/Public/cms/swipebox.css' type='text/css' media='screen' />
<link rel='stylesheet' href='/Public/cms/colorbox.css' type='text/css' media='screen' /> 
<link rel="stylesheet" href="/Public/datepicker/css/datepicker.css" />-->
<link rel="stylesheet" href="/Public/css/emoji.css" />
<link href="/Public/js/plugins/jquery.jqplot.min.css" rel="stylesheet">
<link href="/Public/css/update/bootstrap.min.css?v=3.3.0" rel="stylesheet">
<link href="/Public/css/update/font-awesome.css?v=4.3.0" rel="stylesheet">
<link href="/Public/css/update/custom.css" rel="stylesheet">
<link href="/Public/css/update/animate.css" rel="stylesheet">
<link href="/Public/css/update/style.css?v=2.1.0" rel="stylesheet">
<link rel="stylesheet" href="/Public/css/emoji.css" />
<!-- Mainly scripts -->
<script src="/Public/js/update/jquery-2.1.1.min.js"></script>
<script src="/Public/js/update/jquery-ui-1.10.4.min.js"></script>
<script src="/Public/js/update/bootstrap.min.js"></script>
<script src="/Public/js/update/jquery.metisMenu.js"></script>
<script src="/Public/js/update/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="/Public/js/update/hplus.js"></script>
<script src="/Public/js/update/pace.min.js"></script>
<!-- iCheck -->
<script src="/Public/js/update/icheck.min.js"></script>
<!--弹出框-->
<script src="/Public/layer/layer.min.js"></script>
</head>
<body class=" pace-done">
<div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
  <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">

          <li class="nav-header">
            <div class="dropdown profile-element"> <span>
              <img alt="image" class="img-circle" src="/Public/js/update/chujian.png" width="64" height="64">
               </span>
              <a data-metisMenu="metisMenu" class="dropdown-toggle" href="javascript:void(0)">
                <span class="clear" style="margin-top:4px">
                  <span class=" m-t-xs"><strong class="font-bold"><?php echo $_SESSION['nickname']; ?></strong></span>
                  <span class="text-muted text-xs ">
                    管理员 <b class="caret"></b>
                  </span>
                </span>
              </a>
              <ul class="dropdown-menu animated fadeInRight m-t-xs">
                <li>
                  <a href="javascript:void(0)" style="display:block;overflow:hidden;float:right">
                    <i class="fa fa-power-off close-power" style="float:right;width:4px" ></i>
                  </a>
                </li>
                <li><a href="/index.php/admin_info/index" target="_blank">我的个人信息</a></li>
                <!--li><a href="/index.php/admin_task/index">我的任务</a></li-->
                <li class="divider"></li>
                <li><a href="<?php echo U('common/logout');?>">安全退出</a></li>
              </ul>
            </div>
            <div class="logo-element">H+</div>
          </li>

          <li>
            <a href="javascript:void(0)">
              <i class="fa fa-users"></i>
              <span class="nav-label">用户管理</span>
              <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse">
              <li><a class="auto-openli" href="<?php echo U('user_base/index');?>">用户列表</a></li>
            </ul>
          </li>

          <li>
            <a href="javascript:void(0)">
              <i class="fa fa-photo"></i>
              <span class="nav-label">内容管理</span>
              <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse">
              <li><a class="auto-openli" href="<?php echo U('user_base/avatar_list?audited=0&filter=unscored');?>">照片审核</a></li>
              <li><a class="auto-openli" href="<?php echo U('scoring/index');?>">用户评级</a></li>
            </ul>
          </li>

          <li>
            <a href="javascript:void(0)">
              <i class="fa fa-bar-chart-o"></i>
              <span class="nav-label">数据报表</span>
              <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse">
              <li><a class="auto-openli" href="<?php echo U('analy/score_quality');?>">用户质量</a></li>
              </ul>


          <li>
            <a href="javascript:void(0)"><i class="fa fa-desktop"></i>
              <span class="nav-label">系统工具</span>
              <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse">
              <li>
                <a href="javascript:void(0)">后台管理<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level collapse">
                  <li><a class="auto-openli" href="<?php echo U('admin/index');?>">管理员列表</a></li>
                  <li><a class="auto-openli" href="<?php echo U('admin/auth_rule');?>">管理员权限</a></li>
                </ul>
              </li>
            </ul>
          </li>



      </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" data-href="<?php echo U('common/index');?>"><i class="fa fa-bars"></i> </a>
            <div class="navbar-form-custom"   >
              <div class="form-group">
                <input type="text" placeholder="输入手机号查看验证码！" onPaste="var e=this; setTimeout(function(){ sayHi(e.value); }, 4);" value="" class="form-control"   id="top-search">
              </div>
            </div>
            <script>
              function sayHi(ev){
                $.post("<?php echo U('search/phonecode');?>",{phone:ev}, function (data) {
                  $('#top-search').val('');
                  $('#top-search').val(data);
                });
              }
              $("#top-search").keyup(function(){
                var leng = $("#top-search").val().length;
                var p = $(this).val();
                if(leng== 11){
                  $.post("<?php echo U('search/phonecode');?>",{phone:p}, function (data) {
                    $('#top-search').val('');
                    $('#top-search').val(data);
                  });
                }
              });
            </script>
          </div>
          <ul class="nav navbar-top-links navbar-right">
            <li>
              <span class="m-r-sm text-muted welcome-message"><a href="javascript:void(0)" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用初见后台</span>
            </li>
            
            <li class="dropdown" style="display:none;">
              <a class="dropdown-toggle count-info" data-toggle="dropdown" href="javascript:void(0)">
                <i class="fa fa-bell"></i>
                <?php $mnum = $mycount['certificate_car_count']+$mycount['certificate_video_count']+$mycount['accusation_count']+$mycount['tag']; ?>
                <?php if($mnum > 0): ?><span class="label label-primary"><?php echo ($mnum); ?></span><?php endif; ?>
              </a>
              <ul class="dropdown-menu dropdown-alerts">
                <li>
                  <a href="<?php echo U('certificate_car/index',array('menu'=>'admin_task','type'=>'unprocessed'));?>">
                    <div>
                      <i class="fa fa-car fa-fw"></i> <?php echo ($mycount["certificate_car_count"]); ?>条未读消息
                      <span class="pull-right text-muted small">查看</span>
                    </div>
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="<?php echo U('certificate_video/index',array('menu'=>'admin_task','type'=>'unprocessed'));?>">
                    <div>
                      <i class="fa fa-video-camera fa-fw"></i> <?php echo ($mycount["certificate_video_count"]); ?>条未读消息
                      <span class="pull-right text-muted small">查看</span>
                    </div>
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="<?php echo U('accusation/index',array('menu'=>'admin_task','type'=>'unprocessed'));?>">
                    <div>
                      <i class="fa fa-exclamation-triangle fa-fw"></i> <?php echo ($mycount["accusation_count"]); ?>条未读消息
                      <span class="pull-right text-muted small">查看</span>
                    </div>
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="<?php echo U('search/mytag',array('menu'=>'admin_task'));?>">
                    <div>
                      <i class="fa fa-tag fa-fw"></i> <?php echo ($mycount["tag"]); ?>条未读消息
                      <span class="pull-right text-muted small">查看</span>
                    </div>
                  </a>
                </li>
                 
              </ul>
            </li>

            <li>
              <a href="<?php echo U('common/logout');?>"><i class="fa fa-sign-out"></i> 退出</a>
            </li>
          </ul>

        </nav>
      </div>


      <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
          <h2>导航栏</h2>
          <ol class="breadcrumb">
            <?php if(is_array($nav_path)): $i = 0; $__LIST__ = $nav_path;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ol>
        </div>
      </div>



      <div class="wrapper wrapper-content animated fadeInRight">
      <link rel="stylesheet" href="/Public/css/app.comm.css">
<style>
.animated.hover { animation-name:none; }
.animated.hover.flip:hover { animation-name:flip; }
.animated.hover.pulse:hover { animation-name:pulse; }
input.date-time { max-width:10em; }
</style>
<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="clearfix">
        <form action="<?php echo U();?>" method="GET" class="form-inline pull-left" style="margin-bottom:20px;">
          <input type="hidden" name="act" value="filter">
          <input type="hidden" name="filter2" value="<?php echo ($_REQUEST['filter2']); ?>">
          <div class="input-prepend input-group">
            <span class="input-group-addon">日期范围</span>
            <input type="text" name="stime" value="<?php echo ($_REQUEST['stime']); ?>" class="form-control date-time" data-format="YYYY-MM-DD HH:mm">
            <span class="input-group-addon">到</span>
            <input type="text" name="etime" value="<?php echo ($_REQUEST['etime']); ?>" class="form-control date-time" data-format="YYYY-MM-DD HH:mm">
          </div>
<?php if(!$is_scorer): ?><div class="form-group">
            <select name="aid" class="form-control">
              <option value="">打分人</option>
<?php if(is_array($data['scores'])): $i = 0; $__LIST__ = $data['scores'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['aid']); ?>"<?php echo $_REQUEST['aid'] == $v['aid'] ? ' selected' : ''; ?>><?php echo ($v['nickname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div><?php endif; ?>
          <div class="form-group">
            <select name="sex" class="form-control">
              <option value="">性别</option>
<?php $sexs = C('USER_SEX_IS'); ?>
<?php if(is_array($sexs)): $i = 0; $__LIST__ = $sexs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"<?php echo (string)$key == $_REQUEST['sex'] ? ' selected' : ''; ?>><?php echo ($v); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select name="score_range" class="form-control">
              <option value="">分值</option>
              <option value="9"<?php echo $_REQUEST['score_range'] == '9' ? ' selected' : ''; ?>>9分+</option>
              <option value="8"<?php echo $_REQUEST['score_range'] == '8' ? ' selected' : ''; ?>>8分</option>
              <option value="7"<?php echo $_REQUEST['score_range'] == '7' ? ' selected' : ''; ?>>7分</option>
              <option value="6"<?php echo $_REQUEST['score_range'] == '6' ? ' selected' : ''; ?>>6分</option>
              <option value="5"<?php echo $_REQUEST['score_range'] == '5' ? ' selected' : ''; ?>>5分</option>
              <option value="0"<?php echo $_REQUEST['score_range'] == '0' ? ' selected' : ''; ?>>违规</option>
            </select>
          </div>
          <div class="form-group">
            <select name="province" class="form-control">
              <option value="">省份</option>
<?php $arr = D('LocationBase')->provinces ?: []; ?>
<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v); ?>"<?php echo $_REQUEST['province'] == (string)$v ? ' selected' : ''; ?>><?php echo ($v); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
          </div>
          <div class="form-group">
            <select name="timeout" class="form-control">
              <option value="">超时时间</option>
              <option value="0,19"<?php echo $_REQUEST['timeout'] == '0,19' ? ' selected' : ''; ?>>0-19秒</option>
              <option value="20,59"<?php echo $_REQUEST['timeout'] == '20,59' ? ' selected' : ''; ?>>20-59秒</option>
              <option value="60,119"<?php echo $_REQUEST['timeout'] == '60,119' ? ' selected' : ''; ?>>60-119秒</option>
              <option value="120,359"<?php echo $_REQUEST['timeout'] == '120,359' ? ' selected' : ''; ?>>120-359秒</option>
              <option value="360,599"<?php echo $_REQUEST['timeout'] == '360,599' ? ' selected' : ''; ?>>360-599秒</option>
              <option value="600,999999"<?php echo $_REQUEST['timeout'] == '600,999999' ? ' selected' : ''; ?>>600秒+</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="kwd" value="<?php echo ($_REQUEST['kwd']); ?>" placeholder="用户ID..." class="form-control">
          </div>
          <div class="form-group">
            <label class="checkbox"><input type="checkbox" name="filter" value="score_changed"<?php echo $_REQUEST['filter'] == 'score_changed' ? 'checked' : ''; ?>> 分数有改动</label>
          </div>
          <button type="submit" class="btn btn-primary">搜索</button>
        </form>
        <div class="pull-right">
          <a href="<?php echo U('index');?>" class="btn btn-success">返回打分</a>
          <span class="btn btn-white">记录数：<?php echo ($pager->totalRows); ?></span>
        </div>
      </div>
      <div class="row list-feed">
<?php if(is_array($data['list'])): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; $score_show = $v['score'] ?: ''; $score_css = 'default'; $score_show >= 1 && $score_css = 'primary'; $score_show >= 5 && $score_css = 'success'; $score_show >= 8 && $score_css = 'danger'; $score_timeout = $v['score_time'] ? ((int)$v['score_time'] - (int)$v['create_time']) : 0; $ava = $data['avatars'][$v['resource']]; $rnk = $data['rank_fails'][$v['score']]; ?>
        <div class="feed-item col-xxs-12 col-xs-6 col-sm-4 col-md-3 col-lg-2 col-auto-height" data-id="<?php echo ($v['id']); ?>">
          <div class="thumbnail">
            <a><img src="http://feed.chujianapp.com/<?php echo ($v['resource']); ?>"></a>
            <span class="feed-score label label-<?php echo ($score_css); ?>"><?php echo ($score_show < 5 ? '' : $score_show); ?></span>
            <div class="caption">
              <p>
                用户：
<?php if(!$v['uid']): ?><a>游客</a>
<?php elseif($is_open): ?>
                <a><?php echo ($v['uid']); ?></a>
<?php else: ?>
                <a href="<?php echo U('UserBase/view?uid='.$v['uid']);?>" target="_blank"><?php echo ($v['uid'] ?: ''); ?></a><?php endif; ?>
              </p>
              <!--p class="text-nowrap"><b>创建时间:</b><?php echo date('Y-m-d H:i:s',$ava['create_time']);?></p-->
<?php if($v['score_time']): ?><p class="text-nowrap"><b>打分时间:</b><?php echo date('Y-m-d H:i:s',$v['score_time']);?></p><?php endif; ?>
              <p class="text-nowrap"><b>打分时效:</b> <?php echo ($v['timeout']); ?> 秒</p>
<?php if($v['aid']): ?><p class="text-nowrap"><b>打 分 人:</b> <?php echo ($data['admins'][$v['aid']]['nickname'] ?: $v['aid']); ?></p><?php endif; ?>
<?php if($rnk): ?><p class="text-danger"><b>违规原因:</b> <?php echo ($rnk['reason']); ?></p><?php endif; ?>
<?php if($ava && $v['score'] != $ava['score'] && $ava['score_time']): ?><p class="text-nowrap"><b>分数改动:</b> <?php echo ($v['score']); ?> -> <?php echo ($ava['score']); ?></p><?php endif; ?>
<?php if(!$is_open): ?><p class="text-nowrap"><b>剩余队列:</b> <?php echo ($v['remain']); ?></p><?php endif; ?>
              <p class="text-center">
                <a href="http://image.baidu.com/n/pc_search?queryImageUrl=http://feed.chujianapp.com/<?php echo ($v['resource']); ?>" target="_blank" class="btn btn-sm btn-white">查询盗图</a>
              </p>
            </div>
          </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
    <div class="pagination alternate">
      <ul>
        <li style="text-align: center;color:#00f"><?php echo ($page); ?></li>
      </ul>
    </div>
  </div>
</div>

<script src="/Public/layer/layer.min.js"></script>
<script src="/Public/layer/extend/layer.ext.js"></script>
<script src="/Public/js/app.comm.js"></script>
<script>
jQuery(function($)
{

  // 图片放大
  layer.photosPage(
  {
    parent:'.list-feed',
    title:''
  });

});
</script>  
            </div>
        <div class="footer">
            <div class="pull-right">
                By：<a href="http://www.zi-han.net/" target="_blank">zihan's blog</a>
            </div>
            <div>
                <strong>Copyright</strong> H+ © 2014
            </div>
        </div>

    </div>
</div>



<div class="jvectormap-label"></div><div class="theme-config">
    <div class="theme-config-box">
        <div class="spin-icon">
            <i class="fa fa-cog fa-spin"></i>
        </div>
        <div class="skin-setttings">
            <div class="title">主题设置</div>
            <div class="setings-item">
                <span>
                        收起左侧菜单
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                        <label class="onoffswitch-label" for="collapsemenu">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定侧边栏
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedsidebar" class="onoffswitch-checkbox" id="fixedsidebar">
                        <label class="onoffswitch-label" for="fixedsidebar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定顶部
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                        <label class="onoffswitch-label" for="fixednavbar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定宽度
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                        <label class="onoffswitch-label" for="boxedlayout">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        固定底部
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedfooter" class="onoffswitch-checkbox" id="fixedfooter">
                        <label class="onoffswitch-label" for="fixedfooter">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                        RTL模式
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="RTLmode" class="onoffswitch-checkbox" id="RTLmode">
                        <label class="onoffswitch-label" for="RTLmode">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div style="width:420px; height:260px; padding:20px; border:1px solid #ccc; background-color:#eee;display:none" id="new-order">
    <p>有新用户了，赶紧看看吧！</p>
</div>
<script>

    //var int=self.setInterval("clock()",2000);
    function clock()
    {
        var t =new Date();
        $('#new-order > p').html(t);
        var pageii = $.layer({
            type: 1,
            title: false,
            area: ['auto', 'auto'],
            border: [0], //去掉默认边框
            shade: [0], //去掉遮罩
            closeBtn: [0, false], //去掉默认关闭按钮
            shift: 'right-bottom',
            page: {
                dom: "#new-order",
            }
        });

    }






    // 顶部菜单固定
    $('#fixednavbar').click(function () {
        if ($('#fixednavbar').is(':checked')) {
            $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
            $("body").removeClass('boxed-layout');
            $("body").addClass('fixed-nav');
            $('#boxedlayout').prop('checked', false);
        } else {
            $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
            $("body").removeClass('fixed-nav');
        }
    });

    // 左侧菜单固定
    $('#fixedsidebar').click(function () {
        if ($('#fixedsidebar').is(':checked')) {
            $("body").addClass('fixed-sidebar');
            $('.sidebar-collapse').slimScroll({
                height: '100%',
                railOpacity: 0.9
            });
        } else {
            $('.sidebar-collapse').slimscroll({
                destroy: true
            });
            $('.sidebar-collapse').attr('style', '');
            $("body").removeClass('fixed-sidebar');
        }
    });

    // 收起左侧菜单
    $('#collapsemenu').click(function () {
        if ($('#collapsemenu').is(':checked')) {
            $("body").addClass('mini-navbar');
            SmoothlyMenu();
        } else {
            $("body").removeClass('mini-navbar');
            SmoothlyMenu();
        }
    });

    // 自适应宽度
    $('#boxedlayout').click(function () {
        if ($('#boxedlayout').is(':checked')) {
            $("body").addClass('boxed-layout');
            $('#fixednavbar').prop('checked', false);
            $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
            $("body").removeClass('fixed-nav');
            $(".footer").removeClass('fixed');
            $('#fixedfooter').prop('checked', false);
        } else {
            $("body").removeClass('boxed-layout');
        }
    });

    // 底部版权固定
    $('#fixedfooter').click(function () {
        if ($('#fixedfooter').is(':checked')) {
            $('#boxedlayout').prop('checked', false);
            $("body").removeClass('boxed-layout');
            $(".footer").addClass('fixed');
        } else {
            $(".footer").removeClass('fixed');
        }
    });

    // RTL模式
    $('#RTLmode').click(function () {
        if ($('#RTLmode').is(':checked')) {
            $('head').append('<link href="/Public/css/update/bootstrap-rtl.css" id="rtl-mode" rel="stylesheet">');
            $('body').addClass('rtls');
        } else {
            $('#rtl-mode').remove();
            $('body').removeClass('rtls');
        }
    });




</script>

<style>
    .fixed-nav .slimScrollDiv #side-menu {
        padding-bottom: 60px;
    }
</style></body></html>