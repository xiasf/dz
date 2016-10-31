<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
0
|| checktplrefresh('data/diy/./template/comiis_meizhou//portal/index.htm', './template/comiis_meizhou/common/header.htm', 1477894717, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/comiis_meizhou/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_meizhou//portal/index.htm', './template/comiis_meizhou/common/footer.htm', 1477894717, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/comiis_meizhou/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_meizhou//portal/index.htm', './template/default/common/header_common.htm', 1477894717, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/comiis_meizhou/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_meizhou//portal/index.htm', './template/comiis_meizhou/common/comiis_user.htm', 1477894717, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/comiis_meizhou/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_meizhou//portal/index.htm', './template/default/common/header_qmenu.htm', 1477894717, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/comiis_meizhou/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_meizhou//portal/index.htm', './template/comiis_meizhou/common/comiis_navss.htm', 1477894717, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/comiis_meizhou/', 'portal/index')
|| checktplrefresh('data/diy/./template/comiis_meizhou//portal/index.htm', './template/default/common/pubsearchform.htm', 1477894717, 'diy', './data/template/2_diy_portal_index.tpl.php', 'data/diy/./template/comiis_meizhou/', 'portal/index')
;
block_get('371,372,373,148,388,381,389,374,390,391,392,393,395,394,396,387,397,382,398,399,384,377,400,401,383,402,403,404,438,439,440,441,442,386,405,406,376,407,408,409,410,385,375,411,412,413,414,417,415,418,420,416,419,421,378,437,422,423,424,426,425,427,428,429,430,431,379,432,380,436,433,434,435');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_portal_index.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } require_once("./template/comiis_meizhou/comiis_config.php");?><meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>' />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } if(!$_G['uid']) { ?><style>.fwin .m_c {background:#fff url(<?php echo $_G['style']['styleimgdir'];?>/comiis_loginbg.gif) no-repeat right bottom;}</style><?php } $comiis_ff=1;?><?php if($comiis_window_width==2) { ?>
<script>
if(screen.width>1210){
HTMLNODE.className += ' comiis_wide';
}
</script>
<?php } ?>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } if($comiis_window_width==1) { ?> comiis_wide<?php } ?> viab" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { include template('common/header_diynav'); } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut">
<span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span>
您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！
<a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a>
</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<?php } if($comiis_header==1 || $comiis_header==2 || $comiis_header==3) { ?>
<div id="toptb" class="cl comiis_toptb<?php if(($comiis_header==1 && $_G['basescript']=='portal') || $comiis_header==3) { ?> comiis_toptbmh<?php } ?>">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">			
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="<?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?>" class="switchwidth"><?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">切换风格</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
<a id="switchblind" href="javascript:;" onclick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>
</div>
<div class="y kmy"><?php if($_G['uid']) { if(!($_G['setting']['connect']['allow'] && $_G['member']['conisbind'])) { ?><div class="comiis_ttx"><img src="<?php echo $_G['style']['styleimgdir'];?>/comiis_txico.gif"></div><?php } ?>
<strong<?php if($_G['setting']['connect']['allow'] && $_G['member']['conisbind']) { ?> class="qq"<?php } ?>><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间" id="myuser" class="showmenu xi2" onmouseover="showMenu({'ctrlid':'myuser'});"><?php echo $_G['member']['username'];?></a></strong>
<?php if($_G['group']['allowinvisible']) { ?>
<span id="loginstatus">
<a id="loginstatusid" href="member.php?mod=switchstatus" title="切换在线状态" onclick="ajaxget(this.href, 'loginstatus');return false;"></a>
</span>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
<span class="pipe">|</span><a href="home.php?mod=spacecp" id="myshezhi" class="showmenu" onmouseover="showMenu({'ctrlid':'myshezhi'});">设置</a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=notice" id="myprompt" class="a showmenu<?php if($_G['member']['newprompt']) { ?> new<?php } ?>" onmouseover="showMenu({'ctrlid':'myprompt'});">提醒<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if(empty($_G['cookie']['ignore_notice']) && ($_G['member']['newpm'] || $_G['member']['newprompt_num']['follower'] || $_G['member']['newprompt_num']['follow'] || $_G['member']['newprompt'])) { ?><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra2'])) echo $_G['setting']['pluginhooks']['global_usernav_extra2'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
<?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<a href="javascript:;" id="myguanli" class="showmenu" onmouseover="showMenu({'ctrlid':'myguanli'});">管理</a>
<?php } ?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<strong><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">激活</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
<?php } elseif(!$_G['connectguest']) { if(($comiis_header==1 && $_G['basescript']=='portal') || $comiis_header==3) { ?><span class="kmtwzx"><span>欢迎您，请&nbsp;<a onclick="showWindow('login', this.href);return false;" href="member.php?mod=logging&amp;action=login">登录</a>&nbsp;或&nbsp;<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>"><?php echo $_G['setting']['reglinkname'];?></a></span></span><?php } else { include template('member/comiis_login'); } } else { ?>
<strong class="vwmy qq"><?php echo $_G['member']['username'];?></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
<a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">积分: 0</a>
<span class="pipe">|</span>用户组: <?php echo $_G['group']['grouptitle'];?>
<?php } ?>
</div>
</div>
</div>	
<?php } else { ?>
<div id="toptb" class="cl comiis_toptbmh">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<div class="wp">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div>
<div class="y">
<a id="switchblind" href="javascript:;" onclick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } if(empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']) { ?>
<a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="<?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?>" class="switchwidth"><?php if(widthauto()) { ?>切换到窄版<?php } else { ?>切换到宽版<?php } ?></a>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">切换风格</a><?php } if(check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } ?>
</div>
</div>
</div>
<?php } if(!IS_ROBOT) { if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat;background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>消息</a></li>
<li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>新听众<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>
<?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
<li><a href="home.php?mod=follow"><em class="prompt_concern"></em>我关注的(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
<?php } if($_G['member']['newprompt']) { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?><li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
<?php } } if(empty($_G['cookie']['ignore_notice'])) { ?>
<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="暂不提醒"><em class="ignore_notice"></em></a></li>
<?php } ?>
</ul>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="默认"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } if($_G['uid']) { ?>
<ul id="myitem_menu" class="p_pop" style="display: none;">
<li><a href="forum.php?mod=guide&amp;view=my">帖子</a></li>
<li><a href="home.php?mod=space&amp;do=favorite&amp;view=me">收藏</a></li>
<li><a href="home.php?mod=space&amp;do=friend">好友</a></li>
<?php if(!empty($_G['setting']['pluginhooks']['global_myitem_extra'])) echo $_G['setting']['pluginhooks']['global_myitem_extra'];?>
</ul>
<?php } ?><div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_top'])) echo $_G['setting']['pluginhooks']['global_qmenu_top'];?>
<?php if($_G['uid']) { ?>
<ul class="cl nav"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div><?php } ?><?php echo adshow("headerbanner/wp a_h");?><div id="hd">
<div class="wp">
<div class="hdc cl"><?php $mnid = getcurrentnav();?><h2><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h2>
<?php if($comiis_header==1 || $comiis_header==2 || $comiis_header==3) { if($comiis_tianqi==1 && $comiis_window_width!=0 ) { ?>
<!--------天气代码-------->
<div id="comiis_kmtq" class="comiis_tianqi"><iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&amp;id=84" width="130" height="80" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="true"></iframe><a href="http://weather.news.qq.com/" target=_blank class="gotianqi"></a></div>				
<!------天气代码END------>
<script>if(screen.width>1210){$('comiis_kmtq').className += ' showtq';}</script>
<?php } if($comiis_logo_ad==1) { ?>
<!------- 头部广告代码 -------->
<div class="comiis_bananer">
<a href="#" target=_blank><img src="template/comiis_meizhou/ads/topad.jpg"></a>		
</div>
<!------- 头部广告代码End -------->
<?php } ?>		
<div id="sckm" class="y cl"><?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('comiis_twtsc_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="comiis_twtsc_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />			
<style>
#comiis_twtsc { overflow: visible; position: relative; }
#comiis_sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.comiis_scbar_narrow #comiis_sg { width: 316px; }
#comiis_sg li { padding:0 8px; line-height:30px; font-size:14px; }
#comiis_sg li span { color:#999; }
.comiis_sml { background:#FFF; cursor:default; }
.comiis_smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="comiis_sg">
                <div id="comiis_twtsc_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<div id="comiis_twtsc" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>comiis_scbar_narrow <?php } ?> z cl">
<table cellspacing="0" cellpadding="0">
<tr>
<td class="comiis_twtsc_txt"><input type="text" name="srchtxt" id="comiis_twtsc_txt" onblur="if (value ==''){value='请输入搜索内容'}" onfocus="if (value =='请输入搜索内容'){value =''}" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></td>		
<td class="comiis_twtsc_type"><a href="javascript:;" id="comiis_twtsc_type" class="showmenu xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
</tr>
</table>
</div>
<button type="submit" name="searchsubmit" id="comiis_twtsc_btn" class="z" sc="1" value="true">搜索</button>
</form>
<?php } ?>
</div>
<div id="scbar_hot" class="y">
<?php if($_G['setting']['srchhotkeywords']) { ?>
<strong class="xw1">热搜: </strong><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
<?php } else { include template('common/header_userstatus'); } ?>
</div>
<div class="kxlb" style="clear:both;"></div>
</div>
<?php if(!($comiis_header==1 && $_G['basescript']=='portal') && $comiis_header!=3) { ?>
<div class="comiis_nvdiv">
<div id="comiis_nv">
<div class="wp comiis_nvbox cl">
<?php if($comiis_qmenu==1) { ?><a href="javascript:;" id="qmenu" onmouseover="delayShow(this, function () {showMenu({'ctrlid':'qmenu','pos':'34!','ctrlclass':'a','duration':2});showForummenu(<?php echo $_G['fid'];?>);})">快捷导航</a><?php } ?>
<ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
</div>
</div>
</div>
<?php } ?>
<div class="wp">
<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div>
<?php if($comiis_nav==1) { ?>
<div class="comiis_xnav<?php if(($comiis_header==1 && $_G['basescript']=='portal') || $comiis_header==3) { ?> comiis_xnavmh<?php } ?>">
<div class="n1_cs n0">
<dl>
<dt><a href="#" target="_blank">城事</a></dt>
<dd>
<ul>
<li><a href="#" target="_blank">新闻</a></li>
<li><a href="#" target="_blank">爆料</a></li>
<li><a href="#" target="_blank">公益<span></span></a></li>
<li><a href="#" target="_blank">汽车</a></li>							
<li><a href="#" target="_blank">美食</a></li>
<li><a href="#" target="_blank">旅游</a></li>
<li><a href="#" target="_blank">婚嫁</a></li>
<li><a href="#" target="_blank">亲子</a></li>
</ul>
</dd>
</dl>
</div>
<div class="n2_sq n0">
<dl>
<dt><a href="#" target="_blank">社区</a></dt>
<dd>
<ul>
<li><a href="forum.php">论坛</a></li>
<li><a href="home.php">博客</a></li>
<li><a href="#" target="_blank">活动</a></li>
<li><a href="#" target="_blank">美女</a></li>
<li><a href="#" target="_blank">摄影<span></span></a></li>
<li><a href="#" target="_blank">情感</a></li>
<li><a href="#" target="_blank">理财</a></li>
<li><a href="#" target="_blank">健身</a></li>
<li><a href="#" target="_blank">房产</a></li>
<li><a href="#" target="_blank">影音</a></li>
</ul>
</dd>
</dl>
</div>
<div class="n3_xf n0">
<dl>
<dt><a href="#" target="_blank">消费</a></dt>
<dd>
<ul>
<li><a href="#" target="_blank">积分兑换</a></li>
<li><a href="#" target="_blank">寻好东西<span></span></a></li>
<li><a href="#" target="_blank">商家联盟</a></li>					
<li><a href="#" target="_blank">优惠打折</a></li>
</ul>
</dd>
</dl>
</div>
<div class="n4_fl n0">
<dl>
<dt><a href="#" target="_blank">分类</a></dt>
<dd>
<ul>
<li><a href="#" target="_blank">企业招聘</a></li>
<li><a href="#" target="_blank">个人求职</a></li>
<li><a href="#" target="_blank">二手车辆<span></span></a></li>
<li><a href="#" target="_blank">跳蚤市场</a></li>
<li><a href="#" target="_blank">房屋租售</a></li>
<li><a href="#" target="_blank">便民信息</a></li>
</ul>
</dd>
</dl>
</div>
</div>
<?php } ?><?php echo adshow("subnavbanner/a_mu");?><?php if($comiis_header==0) { if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="<?php if($_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5) { ?>scbar_narrow <?php } ?>cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_icon_td"></td>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2">搜索</strong></button></td>
<td class="scbar_hot_td">
<div id="scbar_hot">
<?php if($_G['setting']['srchhotkeywords']) { ?>
<strong class="xw1">热搜: </strong><?php if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" class="xi2" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
</td>
</tr>
</table>
</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } } ?>
</div>
</div>
<?php if($comiis_header==1 || $comiis_header==2 || $comiis_header==3) { if($_G['setting']['search'] && $slist) { ?>
<ul id="comiis_twtsc_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('comiis_twtsc', '<?php echo $searchparams['url'];?>');
</script>
<?php } if($_G['uid']) { ?>
<ul id="myuser_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1" style="color:#db0000">积分: <?php echo $_G['member']['credits'];?></a></li>
<li><a href="home.php?mod=spacecp&amp;ac=usergroup" style="color:#db0000">用户组: <?php echo $_G['group']['grouptitle'];?></a></li>
<li><a href="forum.php?mod=guide&amp;view=my">我的帖子</a></li>
<li><a href="home.php?mod=space&amp;do=favorite&amp;view=me">我的收藏</a></li>
<li><a href="home.php?mod=space&amp;do=friend">我的好友</a></li>				
<?php if(!empty($_G['setting']['pluginhooks']['global_myitem_extra'])) echo $_G['setting']['pluginhooks']['global_myitem_extra'];?>
</ul>
<ul id="myshezhi_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=spacecp&amp;ac=avatar">修改头像</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=profile">修改资料</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=privacy">隐私设置</a></li>
<li><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密码安全</a></li>
</ul>
<ul id="myguanli_menu" class="p_pop" style="display: none;">
<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a></li>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></li>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<li><a href="admin.php" target="_blank">管理中心</a></li>
<?php } ?>
</ul>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } if($comiis_nv==1) { if(!($comiis_header==1 && $_G['basescript']=='portal') && $comiis_header!=3) { ?>
<script src="<?php echo $_G['style']['styleimgdir'];?>/comiis_nv.js" type="text/javascript" type="text/javascript"></script>
<?php } } ?>
<div id="wp" class="wp">
<style id="diy_style" type="text/css">#portal_block_371 { margin-top:10px !important;margin-right:0px !important;margin-bottom:0px !important;margin-left:0px !important;}#portal_block_372 { margin-top:10px !important;margin-right:0px !important;margin-bottom:0px !important;margin-left:0px !important;}#portal_block_375 { margin-top:0px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:0px !important;}#portal_block_379 { margin-top:0px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:0px !important;}#portal_block_378 { margin-top:0px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:0px !important;}#portal_block_380 { margin-top:0px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:0px !important;}#portal_block_383 { margin-top:0px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:0px !important;}#portal_block_374 { margin-top:2px !important;margin-right:0px !important;margin-bottom:10px !important;margin-left:10px !important;}#portal_block_377 { margin-top:10px !important;margin-right:0px !important;margin-bottom:4px !important;margin-left:10px !important;}#frameMiq5II { margin-top:10px !important;margin-right:0px !important;margin-bottom:5px !important;margin-left:10px !important;}</style>
<!--[diy=comiis_meizhou01]--><div id="comiis_meizhou01" class="area"><div id="frameXjG00E" class="cl_frame_bm frame move-span cl frame-1"><div id="frameXjG00E_left" class="column frame-1-c"><div id="frameXjG00E_left_temp" class="move-span temp"></div><?php block_display('371');?><?php block_display('372');?><?php block_display('373');?></div></div><div id="framerv2k7x" class="frame move-span cl frame-1"><div class="title frame-title"><span class="titletext">1框架</span></div><div id="framerv2k7x_left" class="column frame-1-c"><div id="framerv2k7x_left_temp" class="move-span temp"></div><?php block_display('148');?></div></div></div><!--[/diy]-->
<div class="comiis_h10"></div>
<div class="comiis_main cl">
<div class="comiis_mtz">
<!--[diy=comiis_meizhou02]--><div id="comiis_meizhou02" class="area"><div id="frameJ53MGD" class="cl_frame_bm frame move-span cl frame-1"><div id="frameJ53MGD_left" class="column frame-1-c"><div id="frameJ53MGD_left_temp" class="move-span temp"></div><?php block_display('388');?></div></div></div><!--[/diy]-->		
<div class="comiis_ibox">
<h2 class="cl">
<div class="comiis_ibox_rad"><!--[diy=comiis_meizhou_mad01]--><div id="comiis_meizhou_mad01" class="area"><div id="framenzm0Ga" class="cl_frame_bm frame move-span cl frame-1"><div id="framenzm0Ga_left" class="column frame-1-c"><div id="framenzm0Ga_left_temp" class="move-span temp"></div><?php block_display('381');?></div></div></div><!--[/diy]--></div>
<a href="#" target="_blank">一周热帖</a>
</h2>
<div class="comiis_yzrt cl">
<!--[diy=comiis_meizhou03]--><div id="comiis_meizhou03" class="area"><div id="frameWDPMaD" class="cl_frame_bm frame move-span cl frame-1"><div id="frameWDPMaD_left" class="column frame-1-c"><div id="frameWDPMaD_left_temp" class="move-span temp"></div><?php block_display('389');?></div></div></div><!--[/diy]-->
</div>
<!--[diy=comiis_meizhou_ad01]--><div id="comiis_meizhou_ad01" class="area"><div id="frameUgA50A" class="cl_frame_bm frame move-span cl frame-1"><div id="frameUgA50A_left" class="column frame-1-c"><div id="frameUgA50A_left_temp" class="move-span temp"></div><?php block_display('374');?></div></div></div><!--[/diy]-->
</div>		
<div class="comiis_ibox">
<h2 class="cl">	
<div class="comiis_ibox_rad"><!--[diy=comiis_meizhou_mad04]--><div id="comiis_meizhou_mad04" class="area"></div><!--[/diy]--></div>	
<a href="#" target="_blank">生活快讯</a>
</h2>
<div class="comiis_shkx cl">
<!--[diy=comiis_meizhou04]--><div id="comiis_meizhou04" class="area"><div id="frameatP0wd" class="cl_frame_bm frame move-span cl frame-1"><div id="frameatP0wd_left" class="column frame-1-c"><div id="frameatP0wd_left_temp" class="move-span temp"></div><?php block_display('390');?></div></div></div><!--[/diy]-->
</div>
</div>		
</div>
<div id="comiis_zjhot" class="comiis_mtc">
<div class="comiis_ictop cl">
<span><script type="text/javascript">var d = new Date();document.write(d.getFullYear()+'年'+(d.getMonth()+1)+'月'+d.getDate()+'日'+' 星期'+'日一二三四五六'.charAt(new Date().getDay()));</script></span>
<h2>今日聚焦</h2>
</div>
<div class="comiis_hotlist cl">
<!--[diy=comiis_meizhou05]--><div id="comiis_meizhou05" class="area"><div id="framen0VEW3" class="cl_frame_bm frame move-span cl frame-1"><div id="framen0VEW3_left" class="column frame-1-c"><div id="framen0VEW3_left_temp" class="move-span temp"></div><?php block_display('391');?><?php block_display('392');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_x cl"></div>
<div class="comiis_hotlist cl">
<!--[diy=comiis_meizhou06]--><div id="comiis_meizhou06" class="area"><div id="frameFKKZT3" class="cl_frame_bm frame move-span cl frame-1"><div id="frameFKKZT3_left" class="column frame-1-c"><div id="frameFKKZT3_left_temp" class="move-span temp"></div><?php block_display('393');?><?php block_display('395');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_x cl"></div>
<div class="comiis_hotlist cl">
<!--[diy=comiis_meizhou07]--><div id="comiis_meizhou07" class="area"><div id="framewwc4gM" class="cl_frame_bm frame move-span cl frame-1"><div id="framewwc4gM_left" class="column frame-1-c"><div id="framewwc4gM_left_temp" class="move-span temp"></div><?php block_display('394');?><?php block_display('396');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_zjad cl">
<!--[diy=comiis_meizhou_mad05]--><div id="comiis_meizhou_mad05" class="area"><div id="frameN4t3EK" class="cl_frame_bm frame move-span cl frame-1"><div id="frameN4t3EK_left" class="column frame-1-c"><div id="frameN4t3EK_left_temp" class="move-span temp"></div><?php block_display('387');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_hotlist comiis_chotlist cl">
<!--[diy=comiis_meizhou08]--><div id="comiis_meizhou08" class="area"><div id="frameoe0tp9" class="cl_frame_bm frame move-span cl frame-1"><div id="frameoe0tp9_left" class="column frame-1-c"><div id="frameoe0tp9_left_temp" class="move-span temp"></div><?php block_display('397');?></div></div></div><!--[/diy]-->
</div>		
</div>
<?php if($comiis_window_width!=0 ) { ?><script>if(screen.width>1210){$('comiis_zjhot').className += ' showem';}</script><?php } ?>
<div class="comiis_mtr">
<div class="comiis_ibox">
<h2 class="cl">
<div class="comiis_ibox_rad"><!--[diy=comiis_meizhou_mad02]--><div id="comiis_meizhou_mad02" class="area"><div id="frameI4VGcV" class="cl_frame_bm frame move-span cl frame-1"><div id="frameI4VGcV_left" class="column frame-1-c"><div id="frameI4VGcV_left_temp" class="move-span temp"></div><?php block_display('382');?></div></div></div><!--[/diy]--></div>
<a href="#" target="_blank">便民生活</a>
</h2>
<div class="comiis_bmsh cl">
<!--[diy=comiis_meizhou09]--><div id="comiis_meizhou09" class="area"><div id="framevC9Edv" class="cl_frame_bm frame move-span cl frame-1"><div id="framevC9Edv_left" class="column frame-1-c"><div id="framevC9Edv_left_temp" class="move-span temp"></div><?php block_display('398');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_x1 cl"></div>
<div class="comiis_igg cl">
<!--[diy=comiis_meizhou10]--><div id="comiis_meizhou10" class="area"><div id="frameqVC95v" class="cl_frame_bm frame move-span cl frame-1"><div id="frameqVC95v_left" class="column frame-1-c"><div id="frameqVC95v_left_temp" class="move-span temp"></div><?php block_display('399');?></div></div></div><!--[/diy]-->
</div>
</div>		
<div class="comiis_ibox">
<h2 class="cl">
<div class="comiis_ibox_rad"><!--[diy=comiis_meizhou_mad03]--><div id="comiis_meizhou_mad03" class="area"><div id="framekSpc3v" class="cl_frame_bm frame move-span cl frame-1"><div id="framekSpc3v_left" class="column frame-1-c"><div id="framekSpc3v_left_temp" class="move-span temp"></div><?php block_display('384');?></div></div></div><!--[/diy]--></div>
<a href="#" target="_blank">城市资讯</a>
</h2>
<!--[diy=comiis_meizhou_ad03]--><div id="comiis_meizhou_ad03" class="area"><div id="frameX0vAcd" class="cl_frame_bm frame move-span cl frame-1"><div id="frameX0vAcd_left" class="column frame-1-c"><div id="frameX0vAcd_left_temp" class="move-span temp"></div><?php block_display('377');?></div></div></div><!--[/diy]-->
<div class="comiis_twrd cl">			
<div class="comiis_yzrt cl">
<div class="comiis_bluetit cl">
<div class="ulkey" id="comiis_twrd_imgkey"></div>
<a href="#" target="_blank" class="z">图文热点</a>
</div>
<!--[diy=comiis_meizhou11]--><div id="comiis_meizhou11" class="area"><div id="framen3cD4G" class="cl_frame_bm frame move-span cl frame-1"><div id="framen3cD4G_left" class="column frame-1-c"><div id="framen3cD4G_left_temp" class="move-span temp"></div><?php block_display('400');?><?php block_display('401');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>		
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad04]--><div id="comiis_meizhou_ad04" class="area"><div id="framec944g9" class="cl_frame_bm frame move-span cl frame-1"><div id="framec944g9_left" class="column frame-1-c"><div id="framec944g9_left_temp" class="move-span temp"></div><?php block_display('383');?></div></div></div><!--[/diy]-->
<div class="comiis_ibox2 cl">
<div class="comiis_ibox w593 z">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">美食</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_ibox2img">
<!--[diy=comiis_meizhou12]--><div id="comiis_meizhou12" class="area"><div id="framevA0Ws4" class="cl_frame_bm frame move-span cl frame-1"><div id="framevA0Ws4_left" class="column frame-1-c"><div id="framevA0Ws4_left_temp" class="move-span temp"></div><?php block_display('402');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou13]--><div id="comiis_meizhou13" class="area"><div id="frameSgvS4J" class="cl_frame_bm frame move-span cl frame-1"><div id="frameSgvS4J_left" class="column frame-1-c"><div id="frameSgvS4J_left_temp" class="move-span temp"></div><?php block_display('403');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
<div class="comiis_xzms cl">
<div class="comiis_bluetit cl">
<div class="ulkey" id="comiis_msimgkey"></div>
<a href="#" target="_blank" class="z">寻好东西</a>
<img src="<?php echo $_G['style']['styleimgdir'];?>/comiis_hotico.gif" class="comiis_hotico">
</div>
<!--[diy=comiis_meizhou14]--><div id="comiis_meizhou14" class="area"><div id="frameP0eaV4" class="cl_frame_bm frame move-span cl frame-1"><div id="frameP0eaV4_left" class="column frame-1-c"><div id="frameP0eaV4_left_temp" class="move-span temp"></div><?php block_display('404');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>
<div class="comiis_ibox comiis_info w593 y">
<div class="comiis_h2jiao"></div>
<h2 class="cl">
<div class="comiis_info_titli">
<a target="_blank" href="#"><em class="kmzgz"></em>找工作</a>
<a target="_blank" href="#"><em class="kmprc"></em>聘人才</a>
</div>
<a href="#" target="_blank">信息</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_bluetab cl">
<ul>
<li id="tab1_1" onmouseover="switchTab('tab1', 1, 5, 'on');" class="on"><a target="_blank" href="#">房屋出租</a></li>
<li id="tab1_2" onmouseover="switchTab('tab1', 2, 5, 'on');"><a target="_blank" href="#">房屋出售</a></li>
<li id="tab1_3" onmouseover="switchTab('tab1', 3, 5, 'on');"><a target="_blank" href="#">企业招聘</a></li>
<li id="tab1_4" onmouseover="switchTab('tab1', 4, 5, 'on');"><a target="_blank" href="#">个人求职</a></li>
<li id="tab1_5" onmouseover="switchTab('tab1', 5, 5, 'on');"><a target="_blank" href="#">二手信息</a></li>
</ul>
</div>
<div class="comiis_ibox2list cl" id="tab1_c_1">
<!--[diy=comiis_meizhou_info01]--><div id="comiis_meizhou_info01" class="area"><div id="framesv395G" class="cl_frame_bm frame move-span cl frame-1"><div id="framesv395G_left" class="column frame-1-c"><div id="framesv395G_left_temp" class="move-span temp"></div><?php block_display('438');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list cl" id="tab1_c_2" style="display:none;">
<!--[diy=comiis_meizhou_info02]--><div id="comiis_meizhou_info02" class="area"><div id="frameOs4Vdg" class="cl_frame_bm frame move-span cl frame-1"><div id="frameOs4Vdg_left" class="column frame-1-c"><div id="frameOs4Vdg_left_temp" class="move-span temp"></div><?php block_display('439');?></div></div><div id="framep5DnE4" class="frame move-span cl frame-1"><div class="title frame-title"><span class="titletext">1框架</span></div><div id="framep5DnE4_left" class="column frame-1-c"><div id="framep5DnE4_left_temp" class="move-span temp"></div></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list cl" id="tab1_c_3" style="display:none;">
<!--[diy=comiis_meizhou_info03]--><div id="comiis_meizhou_info03" class="area"><div id="frameogPGS5" class="cl_frame_bm frame move-span cl frame-1"><div id="frameogPGS5_left" class="column frame-1-c"><div id="frameogPGS5_left_temp" class="move-span temp"></div><?php block_display('440');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list cl" id="tab1_c_4" style="display:none;">
<!--[diy=comiis_meizhou_info04]--><div id="comiis_meizhou_info04" class="area"><div id="framewM5VV3" class="cl_frame_bm frame move-span cl frame-1"><div id="framewM5VV3_left" class="column frame-1-c"><div id="framewM5VV3_left_temp" class="move-span temp"></div><?php block_display('441');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list cl" id="tab1_c_5" style="display:none;">
<!--[diy=comiis_meizhou_info05]--><div id="comiis_meizhou_info05" class="area"><div id="framee55G0S" class="cl_frame_bm frame move-span cl frame-1"><div id="framee55G0S_left" class="column frame-1-c"><div id="framee55G0S_left_temp" class="move-span temp"></div><?php block_display('442');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
<div class="comiis_ibox2_bad cl">
<!--[diy=comiis_meizhou_ad05]--><div id="comiis_meizhou_ad05" class="area"><div id="frameiDK6In" class="cl_frame_bm frame move-span cl frame-1"><div id="frameiDK6In_left" class="column frame-1-c"><div id="frameiDK6In_left_temp" class="move-span temp"></div><?php block_display('386');?></div></div></div><!--[/diy]-->
</div>
</div>		
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad06]--><div id="comiis_meizhou_ad06" class="area"></div><!--[/diy]-->
<div class="comiis_ibox2 cl">
<div class="comiis_ibox w593 z">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">汽车</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_ibox2img">
<!--[diy=comiis_meizhou15]--><div id="comiis_meizhou15" class="area"><div id="framec66FeI" class="cl_frame_bm frame move-span cl frame-1"><div id="framec66FeI_left" class="column frame-1-c"><div id="framec66FeI_left_temp" class="move-span temp"></div><?php block_display('405');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou16]--><div id="comiis_meizhou16" class="area"><div id="frameC6QjFs" class="cl_frame_bm frame move-span cl frame-1"><div id="frameC6QjFs_left" class="column frame-1-c"><div id="frameC6QjFs_left_temp" class="move-span temp"></div><?php block_display('406');?></div></div></div><!--[/diy]-->
</div>
</div>
<div class="comiis_qiche cl">
<div class="comiis_qcad">
<!--[diy=comiis_meizhou_ad07]--><div id="comiis_meizhou_ad07" class="area"><div id="framehf3J6i" class="cl_frame_bm frame move-span cl frame-1"><div id="framehf3J6i_left" class="column frame-1-c"><div id="framehf3J6i_left_temp" class="move-span temp"></div><?php block_display('376');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_bluetit">
<span><a href="#" target="_blank">更多</a></span>
<a href="#" target="_blank" class="z">最新团购</a>
<img src="<?php echo $_G['style']['styleimgdir'];?>/comiis_hotico.gif" class="comiis_hotico">
</div>
<!--[diy=comiis_meizhou17]--><div id="comiis_meizhou17" class="area"><div id="framexideQf" class="cl_frame_bm frame move-span cl frame-1"><div id="framexideQf_left" class="column frame-1-c"><div id="framexideQf_left_temp" class="move-span temp"></div><?php block_display('407');?></div></div></div><!--[/diy]-->
</div>	
</div>	
<div class="comiis_ibox comiis_fangchan w593 y">
<div class="comiis_h2jiao"></div>
<h2 class="cl">
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">房产</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_tjlp">
<div class="comiis_bluetit cl">
<div class="ulkey" id="comiis_tjlp_imgkey"></div>
<a href="#" target="_blank" class="z">推荐楼盘</a>
</div>
<!--[diy=comiis_meizhou18]--><div id="comiis_meizhou18" class="area"><div id="frameeffiiK" class="cl_frame_bm frame move-span cl frame-1"><div id="frameeffiiK_left" class="column frame-1-c"><div id="frameeffiiK_left_temp" class="move-span temp"></div><?php block_display('408');?></div></div></div><!--[/diy]-->
<div class="comiis_bluetit">
<span><a href="#" target="_blank">更多</a></span>
<a href="#" target="_blank" class="z">宣传视频</a>
</div>
<!--[diy=comiis_meizhou19]--><div id="comiis_meizhou19" class="area"><div id="frameZwFze4" class="cl_frame_bm frame move-span cl frame-1"><div id="frameZwFze4_left" class="column frame-1-c"><div id="frameZwFze4_left_temp" class="move-span temp"></div><?php block_display('409');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou20]--><div id="comiis_meizhou20" class="area"><div id="frameT4qs6W" class="cl_frame_bm frame move-span cl frame-1"><div id="frameT4qs6W_left" class="column frame-1-c"><div id="frameT4qs6W_left_temp" class="move-span temp"></div><?php block_display('410');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
<div class="comiis_ibox2_bad cl">
<!--[diy=comiis_meizhou_ad08]--><div id="comiis_meizhou_ad08" class="area"><div id="frameAdD4Qp" class="cl_frame_bm frame move-span cl frame-1"><div id="frameAdD4Qp_left" class="column frame-1-c"><div id="frameAdD4Qp_left_temp" class="move-span temp"></div><?php block_display('385');?></div></div></div><!--[/diy]-->
</div>
</div>		
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad09]--><div id="comiis_meizhou_ad09" class="area"><div id="framelSiK56" class="cl_frame_bm frame move-span cl frame-1"><div id="framelSiK56_left" class="column frame-1-c"><div id="framelSiK56_left_temp" class="move-span temp"></div><?php block_display('375');?></div></div></div><!--[/diy]-->
<div class="comiis_ibox cl">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">消费生活</a>
</h2>
<div class="comiis_bd">
<!--[diy=comiis_meizhou21]--><div id="comiis_meizhou21" class="area"><div id="framehEqQ6i" class="cl_frame_bm frame move-span cl frame-1"><div id="framehEqQ6i_left" class="column frame-1-c"><div id="framehEqQ6i_left_temp" class="move-span temp"></div><?php block_display('411');?></div></div></div><!--[/diy]-->
</div>
</div>
<!--[diy=comiis_meizhou_ad10]--><div id="comiis_meizhou_ad10" class="area"></div><!--[/diy]-->
<div class="comiis_ibox2 cl">
<div class="comiis_ibox w593 z">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">亲子</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_ibox2img">
<!--[diy=comiis_meizhou22]--><div id="comiis_meizhou22" class="area"><div id="framehk6i4z" class="cl_frame_bm frame move-span cl frame-1"><div id="framehk6i4z_left" class="column frame-1-c"><div id="framehk6i4z_left_temp" class="move-span temp"></div><?php block_display('412');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou23]--><div id="comiis_meizhou23" class="area"><div id="frameMjkw6i" class="cl_frame_bm frame move-span cl frame-1"><div id="frameMjkw6i_left" class="column frame-1-c"><div id="frameMjkw6i_left_temp" class="move-span temp"></div><?php block_display('413');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>

<div class="comiis_ibox w593 y">
<div class="comiis_h2jiao"></div>
<h2 class="cl">
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">兴趣</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_ibox2img">
<!--[diy=comiis_meizhou24]--><div id="comiis_meizhou24" class="area"><div id="frameTf54ik" class="cl_frame_bm frame move-span cl frame-1"><div id="frameTf54ik_left" class="column frame-1-c"><div id="frameTf54ik_left_temp" class="move-span temp"></div><?php block_display('414');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou25]--><div id="comiis_meizhou25" class="area"><div id="frameu444dE" class="cl_frame_bm frame move-span cl frame-1"><div id="frameu444dE_left" class="column frame-1-c"><div id="frameu444dE_left_temp" class="move-span temp"></div><?php block_display('417');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad11]--><div id="comiis_meizhou_ad11" class="area"></div><!--[/diy]-->
<div class="comiis_ibox2 cl">
<div class="comiis_ibox w593 z">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">旅游</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_ibox2img">
<!--[diy=comiis_meizhou26]--><div id="comiis_meizhou26" class="area"><div id="frametNdDiq" class="cl_frame_bm frame move-span cl frame-1"><div id="frametNdDiq_left" class="column frame-1-c"><div id="frametNdDiq_left_temp" class="move-span temp"></div><?php block_display('415');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou27]--><div id="comiis_meizhou27" class="area"><div id="framez436iZ" class="cl_frame_bm frame move-span cl frame-1"><div id="framez436iZ_left" class="column frame-1-c"><div id="framez436iZ_left_temp" class="move-span temp"></div><?php block_display('418');?></div></div></div><!--[/diy]-->
</div>
</div>
<!--[diy=comiis_meizhou28]--><div id="comiis_meizhou28" class="area"><div id="frameufnKJI" class="cl_frame_bm frame move-span cl frame-1"><div id="frameufnKJI_left" class="column frame-1-c"><div id="frameufnKJI_left_temp" class="move-span temp"></div><?php block_display('420');?></div></div></div><!--[/diy]-->
</div>	
<div class="comiis_ibox w593 y">
<div class="comiis_h2jiao"></div>
<h2 class="cl">
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">婚恋</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_ibox2img">
<!--[diy=comiis_meizhou29]--><div id="comiis_meizhou29" class="area"><div id="frameFif6d6" class="cl_frame_bm frame move-span cl frame-1"><div id="frameFif6d6_left" class="column frame-1-c"><div id="frameFif6d6_left_temp" class="move-span temp"></div><?php block_display('416');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou30]--><div id="comiis_meizhou30" class="area"><div id="frameU4iz6i" class="cl_frame_bm frame move-span cl frame-1"><div id="frameU4iz6i_left" class="column frame-1-c"><div id="frameU4iz6i_left_temp" class="move-span temp"></div><?php block_display('419');?></div></div></div><!--[/diy]-->
</div>
</div>
<!--[diy=comiis_meizhou31]--><div id="comiis_meizhou31" class="area"><div id="frameGf4JII" class="cl_frame_bm frame move-span cl frame-1"><div id="frameGf4JII_left" class="column frame-1-c"><div id="frameGf4JII_left_temp" class="move-span temp"></div><?php block_display('421');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad12]--><div id="comiis_meizhou_ad12" class="area"><div id="frameHFI6Ie" class="cl_frame_bm frame move-span cl frame-1"><div id="frameHFI6Ie_left" class="column frame-1-c"><div id="frameHFI6Ie_left_temp" class="move-span temp"></div><?php block_display('378');?></div></div></div><!--[/diy]-->
<div class="comiis_ibox2 comiis_yybox cl">
<div class="comiis_ibox w593 z">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">影音</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_yyswf">
<!--[diy=comiis_meizhou32]--><div id="comiis_meizhou32" class="area"><div id="framei4f6Ij" class="cl_frame_bm frame move-span cl frame-1"><div id="framei4f6Ij_left" class="column frame-1-c"><div id="framei4f6Ij_left_temp" class="move-span temp"></div><?php block_display('437');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_ibox2list">
<!--[diy=comiis_meizhou33]--><div id="comiis_meizhou33" class="area"><div id="frameFSsE5e" class="cl_frame_bm frame move-span cl frame-1"><div id="frameFSsE5e_left" class="column frame-1-c"><div id="frameFSsE5e_left_temp" class="move-span temp"></div><?php block_display('422');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
<div class="comiis_xzms cl">
<div class="comiis_bluetit cl">
<div class="ulkey" id="comiis_yyimgkey"></div>
<a href="#" target="_blank" class="z">视频展示</a>
</div>
<!--[diy=comiis_meizhou34]--><div id="comiis_meizhou34" class="area"><div id="frameCFKFF4" class="cl_frame_bm frame move-span cl frame-1"><div id="frameCFKFF4_left" class="column frame-1-c"><div id="frameCFKFF4_left_temp" class="move-span temp"></div><?php block_display('423');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>
<div class="comiis_ibox comiis_huodong w593 y">
<div class="comiis_h2jiao"></div>
<h2 class="cl">
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">活动</a>
</h2>
<div class="comiis_bds cl">
<div class="comiis_ibox2img">
<!--[diy=comiis_meizhou35]--><div id="comiis_meizhou35" class="area"><div id="frameb4eFfi" class="cl_frame_bm frame move-span cl frame-1"><div id="frameb4eFfi_left" class="column frame-1-c"><div id="frameb4eFfi_left_temp" class="move-span temp"></div><?php block_display('424');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_hdtw">
<!--[diy=comiis_meizhou36]--><div id="comiis_meizhou36" class="area"><div id="frameWIiPs5" class="cl_frame_bm frame move-span cl frame-1"><div id="frameWIiPs5_left" class="column frame-1-c"><div id="frameWIiPs5_left_temp" class="move-span temp"></div><?php block_display('426');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
<div class="comiis_bluetit cl">
<span><a target="_blank" href="#">更多</a></span>
<a href="#" target="_blank" class="z">最新活动</a>
<img src="<?php echo $_G['style']['styleimgdir'];?>/comiis_hotico.gif" class="comiis_hotico">
</div>
<!--[diy=comiis_meizhou37]--><div id="comiis_meizhou37" class="area"><div id="frameTfQNkS" class="cl_frame_bm frame move-span cl frame-1"><div id="frameTfQNkS_left" class="column frame-1-c"><div id="frameTfQNkS_left_temp" class="move-span temp"></div><?php block_display('425');?></div></div></div><!--[/diy]-->
</div>
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad13]--><div id="comiis_meizhou_ad13" class="area"></div><!--[/diy]-->
<div class="comiis_ibox cl">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">图新鲜</a>
</h2>
<div class="comiis_iphoto cl">
<div class="comiis_kmpk cl">
<div class="kmp1">
<!--[diy=comiis_meizhou38]--><div id="comiis_meizhou38" class="area"><div id="frameGEiIiI" class="cl_frame_bm frame move-span cl frame-1"><div id="frameGEiIiI_left" class="column frame-1-c"><div id="frameGEiIiI_left_temp" class="move-span temp"></div><?php block_display('427');?></div></div></div><!--[/diy]-->
</div>
<div class="kmp2">
<!--[diy=comiis_meizhou39]--><div id="comiis_meizhou39" class="area"><div id="frameVfF6f6" class="cl_frame_bm frame move-span cl frame-1"><div id="frameVfF6f6_left" class="column frame-1-c"><div id="frameVfF6f6_left_temp" class="move-span temp"></div><?php block_display('428');?></div></div></div><!--[/diy]-->
</div>
<div class="kmp3">
<!--[diy=comiis_meizhou40]--><div id="comiis_meizhou40" class="area"><div id="frameOD4ieF" class="cl_frame_bm frame move-span cl frame-1"><div id="frameOD4ieF_left" class="column frame-1-c"><div id="frameOD4ieF_left_temp" class="move-span temp"></div><?php block_display('429');?></div></div></div><!--[/diy]-->
</div>
<div class="kmp1">
<!--[diy=comiis_meizhou41]--><div id="comiis_meizhou41" class="area"><div id="frameEF6WNf" class="cl_frame_bm frame move-span cl frame-1"><div id="frameEF6WNf_left" class="column frame-1-c"><div id="frameEF6WNf_left_temp" class="move-span temp"></div><?php block_display('430');?></div></div></div><!--[/diy]-->
</div>
<div class="kmp4">
<!--[diy=comiis_meizhou42]--><div id="comiis_meizhou42" class="area"><div id="framemd6464" class="cl_frame_bm frame move-span cl frame-1"><div id="framemd6464_left" class="column frame-1-c"><div id="framemd6464_left_temp" class="move-span temp"></div><?php block_display('431');?></div></div></div><!--[/diy]-->
</div>
</div>
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad14]--><div id="comiis_meizhou_ad14" class="area"><div id="frameipFEd6" class="cl_frame_bm frame move-span cl frame-1"><div id="frameipFEd6_left" class="column frame-1-c"><div id="frameipFEd6_left_temp" class="move-span temp"></div><?php block_display('379');?></div></div></div><!--[/diy]-->
<?php if($comiis_imap==1) { ?>
<div class="comiis_imap cl">
<?php if(!empty($_G['setting']['pluginhooks']['global_comiis_forum'])) echo $_G['setting']['pluginhooks']['global_comiis_forum'];?>
</div>
<?php } ?>
<!--[diy=comiis_meizhou_ad15]--><div id="comiis_meizhou_ad15" class="area"></div><!--[/diy]-->
<div class="comiis_ibox cl">
<div class="comiis_h2jiao"></div>
<h2 class="cl">		
<span>
<a href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>┆<a 
href="#" target="_blank">自定内容</a>
</span>
<a href="#" target="_blank">品牌联盟</a>
</h2>
<!--[diy=comiis_meizhou43]--><div id="comiis_meizhou43" class="area"><div id="framefijSNd" class="cl_frame_bm frame move-span cl frame-1"><div id="framefijSNd_left" class="column frame-1-c"><div id="framefijSNd_left_temp" class="move-span temp"></div><?php block_display('432');?></div></div></div><!--[/diy]-->
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad16]--><div id="comiis_meizhou_ad16" class="area"><div id="framef3p3f3" class="cl_frame_bm frame move-span cl frame-1"><div id="framef3p3f3_left" class="column frame-1-c"><div id="framef3p3f3_left_temp" class="move-span temp"></div><?php block_display('380');?></div></div></div><!--[/diy]-->
<div class="comiis_ibox comiis_link cl">
<div class="comiis_linktit cl">		
<span><a href="#" target="_blank" class="comiis_sqlink">申请友情链接</a></span>
<ul>
<li id="tab2_1" onmouseover="switchTab('tab2', 1, 4, 'on');" class="on"><a href="#" target="_blank">友情链接</a></li>
<li id="tab2_2" onmouseover="switchTab('tab2', 2, 4, 'on');"><a href="#" target="_blank">政府上网</a></li>
<li id="tab2_3" onmouseover="switchTab('tab2', 3, 4, 'on');"><a href="#" target="_blank">学校上网</a></li>
<li id="tab2_4" onmouseover="switchTab('tab2', 4, 4, 'on');"><a href="#" target="_blank">企业上网</a></li>
</ul>
</div>
<div class="comiis_link01 cl" id="tab2_c_1">
<!--[diy=comiis_meizhou44]--><div id="comiis_meizhou44" class="area"><div id="frameMiq5II" class="cl_frame_bm frame move-span cl frame-1"><div id="frameMiq5II_left" class="column frame-1-c"><div id="frameMiq5II_left_temp" class="move-span temp"></div><?php block_display('436');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_linknr cl" id="tab2_c_2" style="display:none;">
<!--[diy=comiis_meizhou45]--><div id="comiis_meizhou45" class="area"><div id="framehzI4FD" class="cl_frame_bm frame move-span cl frame-1"><div id="framehzI4FD_left" class="column frame-1-c"><div id="framehzI4FD_left_temp" class="move-span temp"></div><?php block_display('433');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_linknr cl" id="tab2_c_3" style="display:none;">
<!--[diy=comiis_meizhou46]--><div id="comiis_meizhou46" class="area"><div id="frameNdiIE3" class="cl_frame_bm frame move-span cl frame-1"><div id="frameNdiIE3_left" class="column frame-1-c"><div id="frameNdiIE3_left_temp" class="move-span temp"></div><?php block_display('434');?></div></div></div><!--[/diy]-->
</div>
<div class="comiis_linknr cl" id="tab2_c_4" style="display:none;">
<!--[diy=comiis_meizhou47]--><div id="comiis_meizhou47" class="area"><div id="framep4JEkF" class="cl_frame_bm frame move-span cl frame-1"><div id="framep4JEkF_left" class="column frame-1-c"><div id="framep4JEkF_left_temp" class="move-span temp"></div><?php block_display('435');?></div></div></div><!--[/diy]-->
</div>
<div class="clear"></div>
</div>
<!--[diy=comiis_meizhou_ad17]--><div id="comiis_meizhou_ad17" class="area"></div><!--[/diy]-->
<script src="<?php echo $_G['style']['styleimgdir'];?>/comiis.js" type="text/javascript" type="text/javascript"></script></div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<?php if($comiis_ff==1) { ?>
<div style="clear:both;"></div>
<div class="comiis_footer">
<div class="comiis_footertop cl">
<div id="ft" class="wp zdvg"><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||	!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))) { ?><?php echo $nav['code'];?>┆<?php } } ?>
</div>
</div>
<div class="comiis_Copyright cl">
Copyright &copy; 2014-2015
<a href="<?php echo $_G['setting']['siteurl'];?>" rel="nofollow" target="_blank"><?php echo $_G['setting']['sitename'];?></a>
版权所有 All Rights Reserved.
<br />
声明: 黄冈生活论坛是黄冈人的网上之声，需要大家文明发言共同维护。
<br />
Powered by
<a href="http://uogo8.com" target="_blank">优购网</a>
<?php echo $_G['setting']['version'];?>&nbsp;
<?php if($_G['setting']['icp']) { ?>
<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a>
<?php } if($_G['setting']['statcode']) { ?>
<?php echo $_G['setting']['statcode'];?>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['site_qq']) { ?>
<a href="http://wpa.qq.com/msgrd?V=3&amp;uin=<?php echo $_G['setting']['site_qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes&amp;from=discuz" target="_blank" title="QQ">
<img src="<?php echo IMGDIR;?>/site_qq.jpg" alt="QQ" />
</a>
<?php } ?>
</div>
<p>
  <a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/jin01.gif"></a>
  <a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/jin02.gif"></a>
  <a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/jin03.gif"></a>
  <a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/jin04.gif"></a>
  <a href="#" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/jin05.gif"></a>
</p>
</div>
<?php } else { ?>
<div id="ft" class="wp cl zdvg">
<div id="flk" class="y">
<p>
<?php if($_G['setting']['site_qq']) { ?><a href="http://wpa.qq.com/msgrd?V=3&amp;uin=<?php echo $_G['setting']['site_qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes&amp;from=discuz" target="_blank" title="QQ"><img src="<?php echo IMGDIR;?>/site_qq.jpg" alt="QQ" /></a><span class="pipe">|</span><?php } if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))) { ?><?php echo $nav['code'];?><span class="pipe">|</span><?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a> )<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
</p>
<p class="xs0">
GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?>
<span id="debuginfo">
<?php if(debuginfo()) { ?>, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries
<?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.
<?php } ?>
</span>
</p>
</div>
<div id="frt">
<p>Powered by <strong><a href="http://uogo8.com" target="_blank">dz商业模板</a></strong> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://www.adminbuy.cn" target="_blank">Licensed</a><?php } ?></p>
<p class="xs0">Copyright &copy; 2014-2015 Design: <a href="http://uogo8.com" target="_blank" rel="nofollow" title="_blank">优购网</a></p>
</div>
</div>
<?php } updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
<span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span>
<?php } ?>
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa" href="javascript:;"><b>返回顶部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
<?php } ?>
</span>
<?php } ?>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { new_showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } ?>
<script type="text/javascript">
function new_showTopLink() {
var ft = $('ft');
if(ft){
var scrolltop = $('scrolltop');
var viewPortHeight = parseInt(document.documentElement.clientHeight);
var scrollHeight = parseInt(document.body.getBoundingClientRect().top);
var basew = parseInt(ft.clientWidth);
var sw = scrolltop.clientWidth;
if (basew < 1500) {
var left = parseInt(fetchOffset(ft)['left']);
left = left < sw ? left * 2 - sw : left;
scrolltop.style.left = ( basew + left ) + 'px';
} else {
scrolltop.style.left = 'auto';
scrolltop.style.right = 0;
}
if (BROWSER.ie && BROWSER.ie < 7) {
scrolltop.style.top = viewPortHeight - scrollHeight - 150 + 'px';
}
if (scrollHeight < -100) {
scrolltop.style.visibility = 'visible';
} else {
scrolltop.style.visibility = 'hidden';
}
}
}
</script><?php output();?></body>
</html>
