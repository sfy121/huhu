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
.animated { z-index:inherit; }
.gradeX td,.gradeX th { text-align:center; }
.col-score { display:none !important; }
.hover-show-img { position:relative; }
.hover-show-img img { display:none; position:absolute; left:0; top:100%; }
.hover-show-img:hover img { display:block; }
.scoring-sex { font-size:1.5em; }
.scoring-stop-assign.active { opacity:.6; }
</style>
<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="clearfix">
        <div class="pull-left">
          <a class="btn btn-primary hover-show-img">打分标准<img src="/Public/img/scoring-dfbz.png"></a>
          <a class="btn btn-primary hover-show-img">违规示例<img src="/Public/img/scoring-wgsl.jpg"></a>
          <a class="btn btn-primary hover-show-img">5分示例<img src="/Public/img/scoring-score5.png"></a>
          <a class="btn btn-primary hover-show-img">6分示例<img src="/Public/img/scoring-score6.jpg"></a>
          <a class="btn btn-primary hover-show-img">7分示例<img src="/Public/img/scoring-score7.jpg"></a>
          <a class="btn btn-primary hover-show-img">8分示例<img src="/Public/img/scoring-score8.jpg"></a>
          <a class="btn btn-primary hover-show-img">9分示例<img src="/Public/img/scoring-score9.jpg"></a>
        </div>
        <div class="pull-right form-inline">
          <a href="<?php echo U('stop_assign');?>" target="_blank"
             class="btn btn-success scoring-stop-assign<?php echo ($assign_stop ? ' active' : ''); ?>"
             data-toggle="button"
             aria-pressed="<?php echo ($assign_stop ? 'true' : 'false'); ?>">继续打分</a>
          <select name="sex" class="form-control" data-ajax="<?php echo U('sex_assign');?>">
            <option value="">所有</option>
            <option value="1"<?php echo $_SESSION['scoring_assign_sex'] == '1' ? ' selected' : ''; ?>>女生</option>
            <option value="0"<?php echo $_SESSION['scoring_assign_sex'] == '0' ? ' selected' : ''; ?>>男生</option>
          </select>
          <span class="btn btn-success">剩余队列：<!--<b class="scoring-count">-</b> / --><b class="scoring-total">-</b></span>
          <a href="<?php echo U('logs');?>" target="_blank" class="btn btn-success">打分团记录</a>
          <a href="<?php echo U('over');?>" class="btn btn-danger">结束打分</a>
<?php if($is_open && 0): ?><a href="<?php echo U('common/logout');?>" class="btn btn-white">登出</a><?php endif; ?>
        </div>
      </div>
      <hr>
      <div class="table-responsive-">
        <table id="scoring-box" class="table table-bordered">
          <thead>
            <tr class="gradeX">
              <th>用户ID</th>
              <th>照片内容</th>
              <th>创建时间</th>
              <th>响应时间</th>
              <th class="col-score">照片分值</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody class="list-scoring">
  <tr class="gradeX scoring-demo" data-id="">
    <td>0</td>
    <td><img src="http://feed.chujianapp.com/20151029/def35484404e32e1abca5abfd3663a84.logo" class="zoom"></td>
    <td>演示数据</td>
    <td><b class="scoring-timeout label label-default" data-time="<?php echo time();?>" data-timeout="1"></b></td>
    <td class="col-score">
      <input type="number" name="score-no" step="1" min="0" max="10" class="form-control input-sm">
    </td>
    <td>
      <a class="act-scoring-no btn btn-primary btn-mini">打分</a>
    </td>
  </tr>
          </tbody>
        </table>
        <div style="min-height:200px;">&nbsp;</div>
      </div>

    </div>
  </div>
</div>

<script type="text/html" id="tpl-scoring-item">
<$
$ = _G.jQuery;
tim = (_G.parseInt(create_time) || 0) * 1000;
sex_obj = {'0':'男','1':'女'};
sex_cls = {'0':'success','1':'danger'};
$>
  <tr class="gradeX animated- fadeInRightBig" data-id="<$=uid$>" data-resource="<$=resource$>">
    <td>
      <a href="<?php echo U('User_base/view');?>?uid=<$=uid$>" target="_blank" class="label label-default"><$=uid$></a>
      <b class="label label-danger"><$=contract_name || ''$></b>
      <br><div class="td-content" style="max-width:220px;"><$=remark$></div>
    </td>
    <td>
      <i class="thumbnail"><img src="<$=img$>" class="zoom resource"><b class="label label-<$=sex_cls[sex] || 'default'$> scoring-sex"><$=sex_obj[sex] || ''$></b></i>
    </td>
    <td><$=_G.moment(tim).format('YYYY-MM-DD HH:mm:ss')$></td>
    <td><b class="scoring-timeout label label-default" data-time="<$=tim$>" data-timeout="<$=timeout$>"></b></td>
    <td class="col-score">
      <input type="number" name="score" step="1" min="0" max="10" class="form-control input-sm">
    </td>
    <td>
      <div class="btn-group tip" data-original-title="查询盗图">
        <a href="http://image.baidu.com/n/pc_search?queryImageUrl=<$=img$>" target="_blank" class="label label-default scoring-shitu-disabled">百度</a>
        <a href="http://st.so.com/stu?imgurl=<$=img$>" target="_blank" class="label label-default">360</a>
      </div>
<$
include('tpl-scoring-quick');
if(score_history)
{
$>
      <div>最近评分记录：<$=(score_history || []).join('  ')$></div>
<$
}
$>
    </td>
  </tr>
</script>

<script type="text/html" id="tpl-scoring-quick">
      <a class="act-scoring btn btn-primary btn-mini hide">打分</a>
      <div class="btn-group">
        <div class="btn-group">
          <a class="act-scoring-quick btn btn-danger btn-sm" data-score="0.01">不合格</a>
          <a class="act-scoring-quick btn btn-warning btn-sm" data-score="4.99">传失败</a>
        </div>
<$
//快捷打分
scoring_quick =
{
  '5':false,
  '6':false,
  '7':false,
  '8':false,
  '9':false
};
$.each(scoring_quick,function(k,v)
{
  var hsb = typeof v == 'object' && v,
      sco = k;
$>
        <div class="btn-group">
          <a class="act-scoring-quick btn btn-primary btn-sm" data-score="<$=sco$>"><$=sco$></a>
<$
  if(hsb)
  {
$>
          <ul class="dropdown-menu">
<$
    $.each(v,function(i2,v2)
    {
      var sco = v2;
$>
            <li><a class="act-scoring-quick" data-score="<$=sco$>"><$=sco$></a></li>
<$
    });
$>
          </ul>
<$
  }
$>
        </div>
<$
});
$>
        <div class="btn-group">
          <a class="act-scoring-quick btn btn-primary btn-sm" data-score="10">10</a>
        </div>
      </div>
</script>

<script src="/Public/layer/layer.min.js"></script>
<script src="//cdn.bootcss.com/moment.js/2.10.6/moment.min.js"></script>
<script src="/Public/js/artTemplate-v3.0.0.js"></script>
<script src="/Public/js/app.comm.js"></script>
<script>
window.Scoring =
{
  route:
  {
    query:'<?php echo U('query');?>',
    save :'<?php echo U('save');?>',
    del  :'<?php echo U('del');?>',
    shitu:'<?php echo U('shitu');?>'
  },
  option:
  {
    feed_img_root          : '<?php echo ($feed_img_root); ?>' || '//feed.chujian.im/',
    feed_timeout           : parseInt('<?php echo ($feed_timeout); ?>') || 60,
    feed_timeout_highlight : parseInt('<?php echo ($feed_timeout_highlight); ?>') || 1,
    // Ajax刷新时间
    ajax_interval          : (parseInt('<?php echo ($ajax_interval); ?>') || 3) * 1000,
    ajax_real_time         : 0
  },
  rank:
  {
    fail:<?php echo json_encode($score_rank_fail ?: array());?>
  },
  score_box9_7:<?php echo json_encode($score_box9_7 ?: array());?>,
  score_box9_8:<?php echo json_encode($score_box9_8 ?: array());?>,
  score_box9_9:<?php echo json_encode($score_box9_9 ?: array());?>
};

$(document).on('require.ready',function()
{
  require.config({urlArgs:'v=20160622'});
  require(['app-scoring']);
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