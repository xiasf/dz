<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_news');?><?php include template('common/header'); ?><!--[name][delight频道列表页][/name]--><?php $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> <em>&rsaquo;</em><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a><em>&rsaquo;</em><?php } ?>
<?php echo $cat['catname'];?>
</div>
</div>
<div class="clear"></div><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="ct" class="ct2 wp cl">
<div class="mn">
    	<div class="deanp_onertitle1">
            <h4>网站&nbsp;&middot;<span><?php echo $cat['catname'];?></span></h4>
            <div class="deannstr1">
                <?php echo adshow("articlelist/mbm hm/1");?><?php echo adshow("articlelist/mbm hm/2");?>                <!--[diy=listcontenttop]--><div id="listcontenttop" class="area"></div><!--[/diy]-->
                <?php if($_G['setting']['rssstatus'] && !$_GET['archiveid']) { ?><a href="portal.php?mod=rss&amp;catid=<?php echo $cat['catid'];?>" class="deanrssartice" target="_blank" title="RSS"></a><?php } ?>
                    <?php if(($_G['group']['allowpostarticle'] || $_G['group']['allowmanagearticle'] || $categoryperm[$catid]['allowmanage'] || $categoryperm[$catid]['allowpublish']) && empty($cat['disallowpublish'])) { ?>
                    <a href="portal.php?mod=portalcp&amp;ac=article&amp;catid=<?php echo $cat['catid'];?>" class="deanaddnew" title="发布文章"></a>
                    <?php } ?>
        	</div>
        </div>
        <!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]-->
        <div class="clear"></div>
        <div class="deanartice">
        	<ul>
            <?php if(is_array($list['list'])) foreach($list['list'] as $value) { $highlight = article_title_style($value);?><?php $article_url = fetch_article_url($value);?>        		<li class="top10 bgfff deanradius4">
                    <div class="deanarticec">
                        <div class="deanarticel">
                            <?php if($value['pic']) { ?><div class="atc"><a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" width="215" height="145"/></a></div><?php } else { ?><div class="atc"><a href="<?php echo $article_url;?>" target="_blank"><img src="<?php echo $_G['style']['styleimgdir'];?>/nopic.jpg" width="215" height="145" /></a></div><?php } ?>
                        </div>
                        <div class="deanarticer">
                            <div class="deanarticername"><a href="<?php echo $article_url;?>" target="_blank" class="xi2" <?php echo $highlight;?>><?php echo $value['title'];?></a> <?php if($value['status'] == 1) { ?>(待审核)<?php } ?></div>
                            <div class="clear"></div>
                            <div class="deanarticersummary"><?php echo $value['summary'];?>&hellip;&hellip;</div>
                            <div class="deanarticertag"><div class="deanarticerforum"><?php if($value['catname'] && $cat['subs']) { ?>分类: <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" class="xi2"><?php echo $value['catname'];?></a>&nbsp;&nbsp;<?php } ?></div> <div class="deanarticerauthor"><span> <?php echo $value['dateline'];?></span></div><div class="clear"></div></div>
                        </div>
                        <div class="clear"></div>
                        <!--<div class="deanarticecomment"><a href="<?php echo url;?>" target="_blank"><?php echo $value['view'];?></a></div>-->
                    </div>
</li>	
                <?php } ?>
        	</ul>
        </div>
<div class="clear"></div><?php echo adshow("articlelist/mbm hm/3");?><?php echo adshow("articlelist/mbm hm/4");?><?php if($list['multi']) { ?><div class="pgs cl" id="deanpage"><?php echo $list['multi'];?></div><?php } ?>

<!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]-->

</div>
<div class="sd pph">
<?php if($cat['subs']) { ?>
        <div class="deannextnav">
        	<div class="deanp_onertitle1">
            	<h4>网站&nbsp;&middot;<span>下级分类</span></h4>
            </div>
            <ul>
            <?php $i = 1;?>            <?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?>            <?php if($i != 1) { } ?><li><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>" ><?php echo $value['catname'];?></a></li><?php $i--;?>            <?php } ?>
            <div class="clear"></div>
            </ul>
        </div>
        <?php } ?>
        <div class="clear"></div>
<script type="text/javascript">
        	jq(".deannextnav ul li:odd").css({"margin-right":"10"});
        </script>
<div class="deantj top10 bgfff">
            	<div class="deanp_onertitle1">
                    <h4>精华&nbsp;&middot;<span>推荐</span></h4>
                    <div class="deannstr"><a href="http://www.adminbuy.cn" target="_blank" title="更多">More</a></div>
                </div>
                <ul>
                	<!--[diy=diycontentbottomclear]--><div id="diycontentbottomclear" class="area"></div><!--[/diy]-->
                </ul>
                <div class="clear"></div>
            </div>
            <div class="deantj top10 bgfff">
            	<div class="deanp_onertitle1">
                    <h4>热门&nbsp;&middot;<span>焦点</span></h4>
                    <div class="deannstr"><a href="http://www.adminbuy.cn" target="_blank" title="更多">More</a></div>
                </div>
                <ul class="deanremen">
                	<!--[diy=deanremen]--><div id="deanremen" class="area"></div><!--[/diy]-->
                	
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="deantab top15 bgfff">
            	<div class="deanp_onertitle1">
                    <h4>热点&nbsp;&middot;<span>排行</span></h4>
                </div>
            	<div class="deantitles">
                	<ul>
                    	<li class="cur"><span class="yahei">月排行</span></li>
                        <li><span class="yahei">周排行</span></li>
                        <li><span class="yahei">日排行</span></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="clear"></div>
            	<div class="deantabc">
                	<ul>
                    	<li style="display:block;"><dl><!--[diy=diydeanrank1]--><div id="diydeanrank1" class="area"></div><!--[/diy]--></dl></li>
                        <li><dl><!--[diy=diydeanrank2]--><div id="diydeanrank2" class="area"></div><!--[/diy]--></dl></li>
                        <li><dl><!--[diy=diydeanrank3]--><div id="diydeanrank3" class="area"></div><!--[/diy]--></dl></li>
                    </ul>
                </div>
<script type="text/javascript">
                    jq(".deantitles li").each(function(f){
                        jq(this).click(function(){
                            jq(this).addClass("cur").siblings().removeClass("cur");
                            jq(".deantabc li").eq(f).show().siblings().hide();
                            })
                        })
                </script>
            </div>
            <div class="clear"></div>
            <div class="deanad h20" style="margin-top:20px;">
                <div class="deanp_onertitle1">
                    <h4>广告&nbsp;&middot;<span>推广</span></h4>
                </div>
                <div class="deanadc top20"><!--[diy=dss]--><div id="dss" class="area"></div><!--[/diy]--></div>
            </div>
            <div class="clear"></div>

</div>
</div>
<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div><?php include template('common/footer'); ?>