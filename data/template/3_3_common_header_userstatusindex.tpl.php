<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

<style type="text/css">

.deanuserinfo{ width:270px; height:110px; background:url(./template/dean_delight/deancss/gplaypattern.png) center repeat; padding:5px; }
.deanavator{ width:65px; height:65px; float:left;}
.deanwelcome{ width:195px; float:right;}
.deanwelcomeone{ font-size:14px; color:#999; line-height:30px;}
.deanwelcometwo{ width:195px; height:25px; line-height:25px; text-align:center; border:1px solid #3598DB; color:#3598DB; font-size:14px;}
.deanuserinfobottom{ margin-top:10px;}
.deanuserinfobottom a{ display:block;}
.deanuserinfobottom a.deanlogin{ width:90px;  height:30px; line-height:30px; color:#fff; font-size:14px; font-weight:700; padding-left:40px; background:#3598DB url(./template/dean_delight/deancss/user.png) 10px center no-repeat; float:left; border-radius:6px;}
.deanuserinfobottom a.deanregister{ width:90px;  height:30px; line-height:30px; color:#fff; font-size:14px; font-weight:700; padding-left:40px; background:#f60 ; float:right; border-radius:6px;}

.deanvwmy1{ float:left; width:65px; height:65px; margin:0;}
.deanvwmy1 img{width:65px; height:65px; border-radius:45px;}
.deanadmin1{ color:#3598DB;}
.deantuichu{ display:block; height:18px; line-height:18px; float:right; padding:0 15px; color:#fff; background:#f60; border-radius:6px; font-size:12px; margin-top:4px;}
.deancenter{}
.deancenter a{ display:block; padding:0 25px; height:30px; line-height:30px; color:#fff; background:#3598DB; font-size:12px; font-weight:700; width:200px; border-radius:6px; margin:0 auto; text-align:center;}
</style>
<div>                 
        <?php if($_G['uid']) { ?>
        <div class="allmember">
        	<div class="deanuserinfotop">
            <div class="deanavator"><a class="deanvwmy1" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo avatar($_G[uid],small);?></a></div>
            <div class="deanwelcome">
                <p class="deanwelcomeone">Hello!&nbsp;<a class="deanadmin1" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo $_G['member']['username'];?></a><a class="deantuichu" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a><div class="clear"></div></p>
                <p class="deanwelcometwo"><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">积分: <?php echo $_G['member']['credits'];?></a>&nbsp;&nbsp;用户组：<?php echo $_G['group']['grouptitle'];?></p>
                
            </div>
            <div class="clear"></div>
        </div>
        <div class="deanuserinfobottom">
            <div class="deancenter"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间">进入我的空间</a></div>
        </div>
            
           
        </div>
   <ul>
     <?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
        <li><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></li>
        <li><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a></li>
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
    <?php } elseif(!$_G['connectguest']) { ?>
    <style tpye="text/css">
    	
    </style>
    	 <div class="deanuserinfotop">
            <div class="deanavator"><img src="<?php echo $_G['style']['styleimgdir'];?>/man.png" /></div>
            <div class="deanwelcome">
                <p class="deanwelcomeone">Hello!朋友你好</p>
                <p class="deanwelcometwo">欢迎加入迪恩精致城市社区</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="deanuserinfobottom">
                        	<a class="deanlogin" href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">用户登录</a>
                            <a class="deanregister" href="member.php?mod=<?php echo $_G['setting']['regname'];?>">账号注册</a>
                        </div>
                    
     <?php } else { ?>
        <div id="um">
        	<dl>
                <dd class="vwmy qq"><?php echo $_G['member']['username'];?></dd>
                <dd><?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?></dd>
                <dd><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></dd>
                <dd><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">积分: 0</a></dd>
                <dd>用户组: <?php echo $_G['group']['grouptitle'];?></li>
            </dl>
        </div>
        <?php } ?>
    </ul>
</div>
