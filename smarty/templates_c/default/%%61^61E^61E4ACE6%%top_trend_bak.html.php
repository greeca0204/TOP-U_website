<?php /* Smarty version 2.6.18, created on 2016-02-10 15:17:57
         compiled from top_trend_bak.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'top_trend_bak.html', 85, false),)), $this); ?>
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
	.warp .content_top{ width: 1024px;}
	.warp .content_top li{ width: 506px; height: 260px; float: left; margin: 3px;}
	.warp .content_title{ width: 1024px; text-align: center; margin:50px 0px 15px;}
	.warp .content_title p{ font-size: 32px; color:#fdab00; }

	.warp .content_middle{ width: 1002px; margin: 0px auto 0px;}
	.warp .content_middle li{ float: left; width: 310px; height: 165px; margin: 12px;}
	.warp .content_bottom{ width: 940px; margin:0px auto 40px;}
	.warp .content_bottom li{ float: left; width:450px; margin:0px 10px; }
	.warp .content_bottom .trendlist{ text-align:left; display: block; width:300px; overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
	.warp .content_bottom .time{width:150px; text-align:right;}
	.warp .content_bottom a{ color: #000;}
	.warp .content_bottom a:hover{ color: #f00;}
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
	
	
	
	<div class="warp">
		<div class="pic_slide">		
			<iframe src="qiehuan.php" width="1024" height="345" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
		</div>
		<div class="content_title">
			<p>往期活动</p>
		</div>
		<div class="content_middle">
			<ul>
				<?php $_from = ($this->_tpl_vars['trend2']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trend2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trend2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trend2']):
        $this->_foreach['trend2']['iteration']++;
?>
				<li>
					<a href="article.php?nid=<?php echo $this->_tpl_vars['trend2']['nid']; ?>
">
						<img src="<?php echo $this->_tpl_vars['trend2']['pic']; ?>
" alt="" width="310" height="165" />
					</a>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				<div class="cl"></div>
			</ul>
			
		</div>
		<div class="content_bottom">
			<ul>
				<?php $_from = ($this->_tpl_vars['trend3']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trend3'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trend3']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trend3']):
        $this->_foreach['trend3']['iteration']++;
?>
				<li>
					<span style="float:left;" class="trendlist">
						<a href="article.php?nid=<?php echo $this->_tpl_vars['trend3']['nid']; ?>
"><?php echo $this->_tpl_vars['trend3']['name']; ?>
</a>
					</span>
					<span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['trend3']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				<div class="cl"></div>
			</ul>
			<p style="text-align:right;"><a href="">更多</a></p>
		</div>
		<div class="content_title">
			<p>即将举行</p>
		</div>
		<div class="content_bottom">
			<ul>
				<?php $_from = ($this->_tpl_vars['trend1']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['trend1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['trend1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['trend1']):
        $this->_foreach['trend1']['iteration']++;
?>
				<li>
					<span style="float:left;" class="trendlist">
						<a href="article.php?nid=<?php echo $this->_tpl_vars['trend1']['nid']; ?>
"><?php echo $this->_tpl_vars['trend1']['name']; ?>
</a>
					</span>
					<span class="time"><?php echo ((is_array($_tmp=$this->_tpl_vars['trend1']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
				</li>
				<?php endforeach; endif; unset($_from); ?>
				<div class="cl"></div>
			</ul>
			<p style="text-align:right;"><a href="">更多</a></p>
		</div>
	</div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
</body>
</html>