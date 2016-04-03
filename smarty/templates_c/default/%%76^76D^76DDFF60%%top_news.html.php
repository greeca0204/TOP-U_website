<?php /* Smarty version 2.6.18, created on 2016-02-10 15:08:57
         compiled from top_news.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'top_news.html', 116, false),)), $this); ?>
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
	.ad_title .ad_title_li .li_away a{ color: #aeba66;}

	.slide{ width: 965px; margin: 0px auto 45px;}
	.slide_big{ width: 645px; height: 343px; float: left; margin-right: 25px;}
	.slide_small{ width: 295px; height: 160px; position: relative; float: left;}
	.slide_small_bar{ position: absolute; width: 285px; height: 30px; bottom: 0px; left: 0px; background: #000; color: #fff; padding-top: 5px;filter:alpha(opacity=70); -moz-opacity:0.7; -khtml-opacity: 0.7; opacity: 0.7;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; padding-left: 5px; padding-right: 5px;}
	
	.content{ width:965px; margin:25px auto;}
	.content .title{float:left; width:600px; text-align:left;}
	.content .time{float:right; width:350px; text-align:right;}
	.content p{ line-height:25px;}
	.content a{color:#000;}
	.content a:hover{color:#00f;}

	.hiSlider{
		overflow: hidden;
		height:313px;
		width:645px;
		background: #eee;
	}
	
	.hiSlider img{width: 645px; height: 343px;}
	
	.hiSlider-item{
		float: left;
	}
	
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
<link rel="stylesheet" href="css/jquery.hiSlider.min.css">
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
					<li class="li_over">留学资讯</li>
					<li class="li_away"><a href="trend.php">TOP动态</a></li>
					<div class="cl"></div>
				</ul>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<div class="slide">
		<div class="slide_big">
			<ul class="hiSlider hiSlider1">
				<?php $_from = $this->_tpl_vars['hotNews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['hotNews'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hotNews']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['hotNews']):
        $this->_foreach['hotNews']['iteration']++;
?>
					<li data-title="<?php echo $this->_tpl_vars['hotNews']['title']; ?>
" class="hiSlider-item">
						<a href="<?php echo $this->_tpl_vars['hotNews']['contenturl']; ?>
">
							<img src="<?php echo $this->_tpl_vars['hotNews']['imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['hotNews']['title']; ?>
">
						</a>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<script src="js/jquery.hiSlider.min.js"></script>
			<script>
				$('.hiSlider1').hiSlider();
			</script>
		</div>
		<div class="slide_small" style="margin-bottom:25px;">
			<div class="slide_small_bar"><?php echo $this->_tpl_vars['adNews']['title']; ?>
</div>
			<a href="<?php echo $this->_tpl_vars['adNews']['contenturl']; ?>
">
				<img src="<?php echo $this->_tpl_vars['adNews']['imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['adNews']['title']; ?>
" width="295" height="160" />
			</a>
		</div>
		<div class="slide_small">
			<div class="slide_small_bar"><?php echo $this->_tpl_vars['adNews2']['title']; ?>
</div>
			<a href="<?php echo $this->_tpl_vars['adNews2']['contenturl']; ?>
">
				<img src="<?php echo $this->_tpl_vars['adNews2']['imgurl']; ?>
" alt="<?php echo $this->_tpl_vars['adNews2']['title']; ?>
" width="295" height="160" />
			</a>
		</div>
		<div class="cl"></div>
	</div>
		<div class="content">
			<ul>
				<?php $_from = ($this->_tpl_vars['news']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['news']):
        $this->_foreach['news']['iteration']++;
?>
					<li>
						<p>
							<span class="title">
								<a href="article.php?nid=<?php echo $this->_tpl_vars['news']['nid']; ?>
"><?php echo $this->_tpl_vars['news']['name']; ?>
</a>
							</span>
							<span class="time">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['news']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>

							</span>
							<div class="cl"></div>
						</p>
					</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<div style="width:965px; height:50px; text-align:center;">
				<?php echo $this->_tpl_vars['paggingbar']; ?>

			</div>
			<div class="cl"></div>
		</div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
</body>
</html>