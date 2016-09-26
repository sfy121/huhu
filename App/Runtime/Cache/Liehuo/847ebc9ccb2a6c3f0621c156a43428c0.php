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
<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="widget-box">
        <div style="clear:both;"></div>
        <div class="widget-content nopadding">
          <div class="clearfix">
            <form action="<?php echo U();?>" method="GET" class="filter form-inline pull-left">
              <input type="hidden" name="act" value="filter">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">时间范围 <i class="caret"></i></button>
                  <ul class="dropdown-menu date-time-ranges"></ul>
                </div>
                <input type="text" name="stime" value="<?php echo ($_REQUEST['stime']); ?>" class="form-control date-time" data-format="YYYY-MM-DD HH:mm">
                <span class="input-group-addon">到</span>
                <input type="text" name="etime" value="<?php echo ($_REQUEST['etime']); ?>" class="form-control date-time" data-format="YYYY-MM-DD HH:mm">
              </div>
              <div class="form-group">
                <select name="type" class="form-control">
                  <option value="">用户类型</option>
<?php if(is_array($data['user_types'])): $i = 0; $__LIST__ = $data['user_types'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"<?php echo $_REQUEST['type'] == (string)$key ? ' selected' : ''; ?>><?php echo ($v); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                  <option value="-1"<?php echo $_REQUEST['type'] == '-1' ? ' selected' : ''; ?>>付费用户</option>
                  <option value="has_video"<?php echo $_REQUEST['type'] == 'has_video' ? ' selected' : ''; ?>>有视频</option>
                </select>
              </div>
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
                <select name="order" class="form-control">
                  <option value="">排序</option>
                  <option value="uid"<?php echo $_REQUEST['order'] == 'uid' ? ' selected' : ''; ?>>用户ID</option>
                  <option value="score"<?php echo $_REQUEST['order'] == 'score' ? ' selected' : ''; ?>>分值评级</option>
                  <option value="expense"<?php echo $_REQUEST['order'] == 'expense' ? ' selected' : ''; ?>>消费金额</option>
                  <option value="balance"<?php echo $_REQUEST['order'] == 'balance' ? ' selected' : ''; ?>>账户余额</option>
                  <option value="login_time"<?php echo $_REQUEST['order'] == 'login_time' ? ' selected' : ''; ?>>登陆时间</option>
                </select>
              </div>
              <div class="form-group">
                <div class="btn-group">
                  <button type="button" class="btn btn-white dropdown-toggle dropdown-hover" data-toggle="dropdown">
                    资料完善度 <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a><label class="checkbox"><input type="checkbox" name="has_desc" value="1"<?php echo $_REQUEST['has_desc'] == '1' ? 'checked' : ''; ?>> 个人简介</label></a></li>
                    <li><a><label class="checkbox"><input type="checkbox" name="has_home" value="1"<?php echo $_REQUEST['has_home'] == '1' ? 'checked' : ''; ?>> 家乡城市</label></a></li>
                    <li><a><label class="checkbox"><input type="checkbox" name="has_job_haunt" value="1"<?php echo $_REQUEST['has_job_haunt'] == '1' ? 'checked' : ''; ?>> 职业/出没地</label></a></li>
                    <li><a><label class="checkbox"><input type="checkbox" name="has_interest" value="1"<?php echo $_REQUEST['has_interest'] == '1' ? 'checked' : ''; ?>> 兴趣</label></a></li>
                    <li><a><label class="checkbox"><input type="checkbox" name="has_character" value="1"<?php echo $_REQUEST['has_character'] == '1' ? 'checked' : ''; ?>> 性格</label></a></li>
                    <li><a><label class="checkbox"><input type="checkbox" name="has_any_one" value="1"<?php echo $_REQUEST['has_any_one'] == '1' ? 'checked' : ''; ?>> 任何一项</label></a></li>
                    <li><a><label class="checkbox"><input type="checkbox" name="has_all_info" value="0"<?php echo $_REQUEST['has_all_info'] == '0' ? 'checked' : ''; ?>> 没有资料</label></a></li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <select name="search_field" class="form-control">
                  <option value="">模糊搜索</option>
                  <option value="uid"<?php echo $_REQUEST['search_field'] == 'uid' ? ' selected' : ''; ?>>用户ID</option>
                  <option value="phone"<?php echo $_REQUEST['search_field'] == 'phone' || !$_REQUEST['search_field'] ? ' selected' : ''; ?>>手机号</option>
                  <!--option value="nickname"<?php echo $_REQUEST['search_field'] == 'nickname' ? ' selected' : ''; ?>>用户昵称</option-->
                  <option value="description"<?php echo $_REQUEST['search_field'] == 'description' ? ' selected' : ''; ?>>个人简介</option>
                  <option value="pkg_channel"<?php echo $_REQUEST['search_field'] == 'pkg_channel' ? ' selected' : ''; ?>>渠道号</option>
                  <option value="device"<?php echo $_REQUEST['search_field'] == 'device' ? ' selected' : ''; ?>>设备类型</option>
                  <option value="device_model"<?php echo $_REQUEST['search_field'] == 'device_model' ? ' selected' : ''; ?>>手机型号</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="kwd" value="<?php echo ($_REQUEST['kwd']); ?>" placeholder="关键词..." class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">搜索</button>
            </form>
            <div class="pull-right">
              <!--a href="<?php echo U('avatar_list?filter=scored');?>" class="btn btn-success">打分记录</a-->
<?php if($_REQUEST['type'] == '1'): ?><a href="<?php echo U('virtual_users');?>" class="btn btn-success">新增运营账号</a>
              <a href="<?php echo U('virtual_renew');?>" class="btn btn-success">更新运营账号</a><?php endif; ?>
              <a href="<?php echo U('?download=1',array_merge($_GET ?: [],['page_size' => 'export']));?>" class="btn btn-success">导出</a>
              <div class="btn-group">
                <span class="btn btn-white">日活：<?php echo ($data['cnt_active']); ?></span>
                <span class="btn btn-white">记录数：<?php echo ($pager->totalRows); ?></span>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover text-center">
              <thead>
                <tr>
                  <th>用户ID</th>
                  <th>用户昵称</th>
                  <th>电话号码</th>
                  <th>性别</th>
                  <th>用户类型</th>
                  <th>照片/视频数</th>
                  <th>分数</th>
                  <th>消费金额</th>
                  <th>最后活跃</th>
                  <th>注册时间</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
<?php if(is_array($data['list'])): $i = 0; $__LIST__ = $data['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; $sex = $v['sex']; $type_css = 'default'; $v['type'] == 1 && $type_css = 'success'; $v['type'] == 2 && $type_css = 'danger'; $v['type'] == 3 && $type_css = 'warning'; $v['type'] == 4 && $type_css = 'primary'; $alb = json_decode($v['album'],true) ?: []; ?>
                <tr class="gradeX">
                  <td>
                    <span class="popover-avatar"><?php echo ($v['uid']); ?></span>
                    <b class="label label-danger"><?php echo boolval($v['vip_level'] && $v['vip_valid_end'] >= NOW_TIME) ? 'v' : ''; echo ($v['glory_grade'] ?: ''); ?></b>
                  </td>
                  <td title="<?php echo ($v['nickname']); ?>">
                    <div class="td-content popover-hover"><?php echo ($v['nickname_html'] ?: $v['nickname']); ?></div>
                  </td>
                  <td>
<?php if($v['phone']): echo ($v['phone']); endif; ?>
<?php if($v['qq_open_id']): ?>&nbsp;<i class="fa fa-2x fa-qq" style="color:#1BE;"></i><?php endif; ?>
<?php if($v['wx_open_id']): ?>&nbsp;<i class="fa fa-2x fa-weixin" style="color:#0A0;"></i><?php endif; ?>
                  </td>
                  <td><?php echo (C("USER_SEX_IS.$sex")); ?></td>
                  <td><b class="label label-<?php echo ($type_css); ?>"><?php echo ($data['user_types'][$v['type']]); ?></b></td>
                  <td>
                    <a href="<?php echo U('view?uid='.$v['uid'].'&tab=tab-user-feed');?>" target="_blank" class="label label-default"><?php echo count($alb);?></a>
                    <a href="<?php echo U('view?uid='.$v['uid'].'&tab=tab-user-feed');?>" target="_blank" class="label label-success"><?php echo $ResourceModel->get_video_num($alb);?></a>
                  </td>
                  <td><?php echo ($v['score'] >= 0 ? (int)$v['score'] : '-'); ?></td>
                  <td><?php echo ($v['total_charge'] ?: $v['total_expense'] ?: '-'); ?></td>
                  <td><?php echo ($v['active_time'] ? date('Y-m-d H:i:s',$v['active_time']) : ($v['update_time'] ? date('Y-m-d H:i:s',$v['update_time']) : '-')); ?></td>
                  <td><?php echo ($v['reg_time'] ? date('Y-m-d H:i:s',$v['reg_time']) : '-'); ?></td>
                  <td>
                    <a href="<?php echo U('view?uid='.$v['uid']);?>" target="_blank" class="btn btn-primary btn-mini">查看资料</a>
                  </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="pagination alternate">
      <ul>
        <li style="text-align:center;color:#00f"><?php echo ($page); ?></li>
      </ul>
    </div>
  </div>
</div>
<script src="/Public/js/app.comm.js"></script>  
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