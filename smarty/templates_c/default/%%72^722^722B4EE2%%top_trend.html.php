<?php /* Smarty version 2.6.18, created on 2016-02-11 16:03:10
         compiled from top_trend.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'top_trend.html', 110, false),)), $this); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="<?php echo $this->_tpl_vars['website']['keyword']; ?>
" />
<meta name="Description" content="<?php echo $this->_tpl_vars['website']['description']; ?>
" />

<title><?php echo $this->_tpl_vars['siteTitle']; ?>
</title>
<link rel="stylesheet" href="css/base.css" />
<style>
	.ad_title_box{ width: 100%; height: 250px; background: #415868;}
	.ad_title{width: 1280px; height: 250px; background: url('images/common_01.jpg')  no-repeat; margin: 0px auto; }
	.ad_title .ad_title_logo{ width: 292px; float: left; margin:155px 5px 0px 170px;}
	.ad_title .ad_title_li{ height: 85px; float: left; margin:215px 0px 0px 0px;}
	.ad_title .ad_title_li li{ float: left; width: 110px; height: 30px; margin-right: 5px; font-weight: bold; padding-top: 5px;}
	.ad_title .ad_title_li .li_over{background: #ffffff; color: #2298d6;}
	.ad_title .ad_title_li .li_away{background: #3078a0; color: #aeba66;}
	.ad_title .ad_title_li .li_away a{color: #aeba66;}
	.bar{ width: 100%; height: 60px; background: #dcdcdc; text-align: center; padding-top: 20px; margin-bottom:60px; }
	.bar p{color:#fdab00; font-size: 32px;font-weight: bold;}
	.warp{ margin:0px auto;width: 1024px;}
	.warp .pic_slide{ width: 1024px; height: 345px;  margin: 30px 0px 45px;}
	.warp .content_top{ width: 1020px;}
	.warp .content_top .content_top_top{ width: 1020px; margin-bottom: 4px;}
	.warp .content_top .content_top_top .content_top_left{ width: 508px; height: 260px; float: left; margin-right: 4px;}
	.warp .content_top .content_top_top .content_top_middle{width: 250px; height: 260px; float: left; margin-right: 4px;}
	.warp .content_top .content_top_top .content_top_middle .content_top_middle_pic{ width: 250px; height: 128px; }
	.warp .content_top .content_top_top .content_top_right{ width: 232px; height: 220px; float: left; background: #3285e1; padding: 20px 10px; position: relative;}
	.warp .content_top .content_top_top .content_top_right p{ line-height: 25px; text-align: left;}
	.warp .content_top .content_top_top .content_top_right .more{ position: absolute; width: 60px; height: 20px;bottom: 20px; right: 20px; font-size: 14px; font-weight: bold;}
	.warp .content_top .content_top_top .content_top_right a{color:#fff200; }
	.warp .content_top li{ width: 336px; height: 170px; float: left; margin: 2px;}
	.warp .content_title{ width: 1024px; text-align: center; margin:50px 0px 15px;}
	.warp .content_title p{ font-size: 32px; color:#fdab00; }

	.content_middle{ width: 1002px; margin: 0px auto 10px;}
	.content_middle li{ float: left; width: 310px; height: 165px; margin: 12px;}
	.content_bottom{ width: 1052px; margin: 20px auto 0px;}
	.content_bottom li{ text-align: left; width: 486px; float: left; margin-left: 20px; margin-right: 20px;  height: 25px;}
	.content_bottom .trendlist{display: block; width:300px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
	.content_bottom a{ color: #000;}
	.content_bottom a:hover{ color: #f00;}

	/*分页*/
	.pagingBarNum { clear: both; color:#000; width: 965px; text-align: center; margin: 0px auto;}
	.pagingBarNum .pre_next {width: 52px;}
	.pagingBarNum .current {color: #000;font-weight: bold;}
	.pagingBarNum .gray {color:#000;}
	.pagingBarNum a.current:visited {color: #000;}
	.pagingBarNum a {text-decoration:none;padding: 3px 4px 0;margin: 4px 3px 0 0;color: #000;display: inline-table;}
	.pagingBarNum a:visited {color: #000;}
	.pagingBarNum a:hover {color: #f00;}
	.pagingBarNum .pt {text-decoration:none;margin: 4px 3px 0 0;color: #000;display: inline-table;float: left;}
</style>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/base.js"></script>
</head>

<body>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<div class="ad_title_box">	
		<div class="ad_title">
			<div class="ad_title_logo">
				<img src="images/common_02.png" alt="" />
			</div>
			<div class="ad_title_li">
				<ul>
					<li class="li_over">TOP动态</li>
					<li class="li_away"><a href="news.php">留学资讯</a></li>
					<div class="cl"></div>
				</ul>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<div class="warp">
		<div class="pic_slide">		
			<iframe src="qiehuan.php" width="1024" height="345" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
		</div>
	</div>
	<div class="bar">
		<p>即将进行</p>
	</div>
	<div class="warp">
		<div class="content_top">
			<div class="content_top_top">
				<div class="content_top_left">
					<a href="<?php echo $this->_tpl_vars['adTrend1']['contenturl']; ?>
">
						<img src="<?php echo $this->_tpl_vars['adTrend1']['imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['adTrend1']['title']; ?>
" width="508" height="260" />
					</a>
				</div>
				<div class="content_top_middle">
					<div class="content_top_middle_pic" style="margin-bottom:4px;">
						<a href="<?php echo $this->_tpl_vars['adTrend2']['contenturl']; ?>
">
							<img src="<?php echo $this->_tpl_vars['adTrend2']['imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['adTrend2']['title']; ?>
" width="250" height="128" />
						</a>
					</div>
					<div class="content_top_middle_pic">
						<a href="<?php echo $this->_tpl_vars['adTrend3']['contenturl']; ?>
">
							<img src="<?php echo $this->_tpl_vars['adTrend3']['imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['adTrend3']['title']; ?>
" width="250" height="128" />
						</a>
					</div>
				</div>
				<div class="content_top_right">
					<?php $_from = ($this->_tpl_vars['trend_future_doc']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trend_future_doc'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trend_future_doc']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trend_future_doc']):
        $this->_foreach['trend_future_doc']['iteration']++;
?>
						<p>
							<span style="font-size:14px; color:#fff200; width:140px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;text-align:left; float:left;">
								<a href="article.php?nid=<?php echo $this->_tpl_vars['trend_future_doc']['nid']; ?>
"><?php echo $this->_tpl_vars['trend_future_doc']['name']; ?>
</a>
							</span>
							<span style=" font-size:14px;  color:#fff; float:right;"><?php echo ((is_array($_tmp=$this->_tpl_vars['trend_future_doc']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
							<div class="cl"></div>
						</p>
					<?php endforeach; endif; unset($_from); ?>
					<div class="more"><a href="trendlist.php">更多>></a></div>
				</div>
				<div class="cl"></div>
			</div>
			<ul>
				<?php $_from = ($this->_tpl_vars['trend_future']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trend_future'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trend_future']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trend_future']):
        $this->_foreach['trend_future']['iteration']++;
?>
				<li>
					<a href="article.php?nid=<?php echo $this->_tpl_vars['trend_future']['nid']; ?>
">
						<img src="<?php echo $this->_tpl_vars['trend_future']['pic']; ?>
" alt="<?php echo $this->_tpl_vars['trend_future']['name']; ?>
" width="336" height="170" />
					</a>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				<div class="cl"></div>
			</ul>
		</div>
		<div class="content_title">
			<p>往期活动</p>
		</div>
		<div class="content_top">
			<ul>
				<?php $_from = ($this->_tpl_vars['trend_now_pic']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trend_now_pic'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trend_now_pic']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trend_now_pic']):
        $this->_foreach['trend_now_pic']['iteration']++;
?>
				<li>
					<a href="article.php?nid=<?php echo $this->_tpl_vars['trend_now_pic']['nid']; ?>
">
						<img src="<?php echo $this->_tpl_vars['trend_now_pic']['pic']; ?>
" alt="<?php echo $this->_tpl_vars['trend_now_pic']['name']; ?>
" width="336" height="170" />
					</a>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				<div class="cl"></div>
			</ul>
		</div>
	</div>
	
	<div class="content_bottom">
		<ul>
			<?php $_from = ($this->_tpl_vars['trend_now_doc']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trend_now_doc'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trend_now_doc']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trend_now_doc']):
        $this->_foreach['trend_now_doc']['iteration']++;
?>
			<li>
				<span style="float:left;" class="trendlist">
					<a href="article.php?nid=<?php echo $this->_tpl_vars['trend_now_doc']['nid']; ?>
"><?php echo $this->_tpl_vars['trend_now_doc']['name']; ?>
</a>
				</span>
				<span style="float:right;"><?php echo ((is_array($_tmp=$this->_tpl_vars['trend_now_doc']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
				<div class="cl"></div>
			</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<div class="cl"></div>
		<div style="width:1002px; height:50px; text-align:center;">
			<?php echo $this->_tpl_vars['paggingbar']; ?>

		</div>
	</div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
</body>
</html>