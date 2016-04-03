<?php /* Smarty version 2.6.18, created on 2016-02-11 16:09:48
         compiled from question.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'question.html', 93, false),)), $this); ?>
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
<style type="text/css">
	.ad_title_box{ width: 100%; height: 250px; background: #415868;}
	.ad_title{width: 1280px; height: 250px; background: url('images/common_01.jpg')  no-repeat; margin: 0px auto 5px; }
	.ad_title .ad_title_logo{ width: 292px; float: left; margin:155px 5px 0px 170px;}
	.ad_title .ad_title_li{ height: 85px; float: left; margin:215px 0px 0px 0px;}
	.ad_title .ad_title_li li{ float: left; width: 110px; height: 30px; margin-right: 5px; font-weight: bold; padding-top: 5px;}
	.ad_title .ad_title_li .li_over{background: #ffffff; color: #2298d6;}
	.ad_title .ad_title_li .li_away{background: #3078a0; color: #aeba66;}
	.ad_title .ad_title_li .li_away a{color: #aeba66;}
	
	#warp{ width: 1024px; margin: 0px auto;}
	/*.ad_title{ width: 1024px; height: 541px; margin-bottom:15px; background: url('images/article/article_01.jpg') no-repeat;}*/
	.left_content{ width: 600px; margin:0px 110px 125px 0px; float: left; text-align: left;}
	.left_content a{color:#2298d8;}
	.left_content a:hover{color:#00f;}
	.left_content p{ line-height:32px; text-indent:2em;}
	.right_content{ width: 314px; margin:0px 0px 125px 0px; float: left;}
	.right_content .right_content_box{width: 314px;}
	.right_content .right_content_box .right_content_box_title{width: 314px; height: 48px; background: #2298d8; color: #fff; font-size: 25px; padding-top: 12px;}
	.right_content .right_content_box .right_content_box_li{width: 314px; background: #f1f1f1;}
	.right_content .right_content_box .right_content_box_li li{ height: 30px; padding-top: 20px; text-align: left; padding-left: 10px;}

	.right_content .right_content_box .right_content_box_li a{ color: #000;}	
	.right_content .right_content_box .right_content_box_li a:hover{color: #00f;}


	.right_content .right_content_box .title{
		float: left;
		display: block;
		width:230px;/*对宽度的定义,根据情况修改*/
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}
	.right_content .right_content_box .time{ margin-right: 10px; width: 40px; float: right;}
	
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
					<li class="li_over">Q&A</li>
				</ul>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<div id="warp">
		<!--<div class="ad_title"></div>-->
		<div class="left_content">
			<p style="margin:0px 0px 10px 20px;text-indent:0em;"><a href="index.php">首页</a><span style=" color:#2298d8; font-size:16px;">&nbsp;>>&nbsp;Q&A</span></p>
			<h3 style="text-align:center;">常见问题</h3>
			<br />
            <?php $_from = $this->_tpl_vars['question']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['question'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['question']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['question']):
        $this->_foreach['question']['iteration']++;
?>
			<div class="content_box">
				<p style="font-weight:bold; font-size:14px;"><?php echo $this->_tpl_vars['question']['question']; ?>
</p>
				<p style=" font-size:14px;"><?php echo $this->_tpl_vars['question']['answer']; ?>
</p>
				<br />
			</div>
            <?php endforeach; endif; unset($_from); ?>
		</div>
		<div class="right_content">
			<div class="right_content_box">
				<div class="right_content_box_title">留学资讯</div>
				<div class="right_content_box_li" style="height:280px;">
					<ul>
						<?php $_from = ($this->_tpl_vars['lxzx']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lxzx'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lxzx']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['lxzx']):
        $this->_foreach['lxzx']['iteration']++;
?>
						<li>
							<p>
								<span class="title">
								<a href="article.php?nid=<?php echo $this->_tpl_vars['lxzx']['nid']; ?>
">
									<?php echo $this->_tpl_vars['lxzx']['name']; ?>

								</a>
								</span>
								<span class="time">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lxzx']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>

								</span>
							</p>
							<p><img src="images/article/article_02.jpg" alt="" /></p>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
					<p style="text-align:right; margin:10px 5px 0px 0px; font-size:12px;"><a href="news.php">更多</a></p>
				</div>
			</div>
			<div class="right_content_box" style="margin-top:30px;">
				<div class="right_content_box_title">TOP动态</div>
				<div class="right_content_box_li" style="height:435px;">
					<ul>
						<?php $_from = ($this->_tpl_vars['dongtai']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['dongtai'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['dongtai']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['dongtai']):
        $this->_foreach['dongtai']['iteration']++;
?>
						<li>
							<p>
								<span class="title">
								<a href="article.php?nid=<?php echo $this->_tpl_vars['dongtai']['nid']; ?>
">
									<?php echo $this->_tpl_vars['dongtai']['name']; ?>

								</a>
								</span>
								<span class="time">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['dongtai']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d") : smarty_modifier_date_format($_tmp, "%m-%d")); ?>

								</span>
							</p>
							<p><img src="images/article/article_02.jpg" alt="" /></p>
						</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
					<p style="text-align:right; margin:10px 5px 0px 0px; font-size:12px;"><a href="trend.php">更多</a></p>
				</div>
			</div>
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