<?php /* Smarty version 2.6.18, created on 2016-02-10 14:06:19
         compiled from qiehuan.html */ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $this->_tpl_vars['siteTitle']; ?>
</title>
		<link href="css/imageMenu.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			#imageMenu ul li.landscapes a {
				background: url(<?php echo $this->_tpl_vars['news1']['pic']; ?>
) repeat scroll 0%;
			}

			#imageMenu ul li.people a {
				background: url(<?php echo $this->_tpl_vars['news2']['pic']; ?>
) repeat scroll 0%;
			}

			#imageMenu ul li.nature a {
				background: url(<?php echo $this->_tpl_vars['news3']['pic']; ?>
) repeat scroll 0%;
			}

			#imageMenu ul li.urban a {
				background: url(<?php echo $this->_tpl_vars['news4']['pic']; ?>
) repeat scroll 0%;
			}

			#imageMenu ul li.abstract a {
				background: url(<?php echo $this->_tpl_vars['news5']['pic']; ?>
) repeat scroll 0%;
				width: 310px;
			}
		</style>
		<script type="text/javascript" src="_common/js/mootools.js"></script>
		<script type="text/javascript" src="js/imageMenu.js"></script>
	</head>
	<body>
			<div id="example">
				<div id="imageMenu">
					<ul>
						<li class="landscapes"><a href="article.php?nid=<?php echo $this->_tpl_vars['news1']['nid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news1']['name']; ?>
</a></li>
						<li class="people"><a href="article.php?nid=<?php echo $this->_tpl_vars['news2']['nid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news2']['name']; ?>
</a></li>
						<li class="nature"><a href="article.php?nid=<?php echo $this->_tpl_vars['news3']['nid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news3']['name']; ?>
</a></li>
						<li class="urban"><a href="article.php?nid=<?php echo $this->_tpl_vars['news4']['nid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news4']['name']; ?>
</a></li>
						<li class="abstract"><a href="article.php?nid=<?php echo $this->_tpl_vars['news5']['nid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news5']['name']; ?>
</a></li>
					</ul>
				</div>
				<script type="text/javascript">					
					window.addEvent('domready', function(){
						var myMenu = new ImageMenu($$('#imageMenu a'),{openWidth:310, border:2, onOpen:function(e,i){window.open(e);}});
					});
				</script>
			</div>
	</body>
</html>