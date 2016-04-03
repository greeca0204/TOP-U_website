<?php /* Smarty version 2.6.18, created on 2016-02-11 03:17:29
         compiled from index.html */ ?>
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
<link href="css/base.css" type="text/css" rel="Stylesheet" />
<style type="text/css">
	.title_ad_box{width: 100%; height: 400px; background: #fff;}
	.title_ad_box .title_ad{ width: 1280px; height: 400px; margin: 0px auto; background: url('images/index/index_01.jpg') no-repeat;}
	.title_logo{ width: 487px; height: 41px; margin: 70px auto 15px;}
	.company_intro{ width: 955px; margin: 0px auto 55px; text-align: left;}
	.company_intro p{ text-indent:2em; line-height:25px; font-size: 14px; text-align: center;}
	.teacher_intro_box{ width: 100%; background: #f1f1f1; text-align: center;}
	.teacher_intro_box .teacher_intro{ width: 1024px; height: 560px; background: #f1f1f1; text-align: center; padding-top: 45px; margin:0px auto;}
	.teacher_intro_box .teacher_intro p{ font-size: 14px;}
	.service{width: 1024px; margin: 30px auto 45px;}
	.service .service_intro{ width: 490px; float: left; margin-right: 89px;}
	.service .service_intro .content{ text-align: left; font-size: 13px; line-height: 22px;}
	.service .service_intro .title{color:#4cd0ff; font-weight:bold; font-size:16px; text-align: left;line-height: 30px;}
	.service .service_intro .link a{ margin-left: 60px; font-size: 12px; color: #ffaa00; }
	.service .foreign{  width: 445px; height: 386px;float: left;}
	.vedio{ width: 1024px; height: 450px; background: #000; margin: 0px auto 80px;}
	.advantage_intro{ width: 1024px; margin: 0px auto 75px;}
	.advantage_intro li{ width: 190px; float: left; margin:0px 7px; }
	.advantage_intro li .title{ color: #34cbff; font-size: 20px; margin-top: 20px;font-weight: bold;}
	.advantage_intro li .content{ text-align: left; font-size: 14px; margin-top: 20px; line-height: 25px; text-indent: 2em;}
	.news_intro_box{ width: 100%;  background: #f1f1f1; margin-bottom: 45px;}
	.news_intro_box .news_intro{ width: 1024px; margin: 0px auto; background: #f1f1f1;}
	.news_intro_box .news_intro .bigdiv_right{ margin-right: 10px; float: left; width: 502px; margin-bottom: 10px;}
	.news_intro_box .news_intro .bigdiv_left{ margin-left: 10px; float: left; width: 502px; margin-bottom: 10px;}
	.news_intro_box .news_intro .smalldiv{ float: left; width: 327px;}
	.news_intro_box .news_intro .smalldiv_mid{ float: left; width: 327px; margin:0px 21px;}
	.news_intro_box a{ color: #fff;}
	.xzjy{ width: 1024px; margin: 0px auto 25px; }
	.xzjy .content{ width: 790px; margin: 45px auto; }
	.xzjy .content .divcontent{ height: 130px;}
	.xzjy li{ float: left; width: 204px;}
	.xzjy li img{ cursor: pointer;margin-top:10px;}
	.xzjy li img:hover{ margin-top:0px; }
	.content_title{ width: 1024px; text-align: center; margin:50px 0px 15px;}
	.content_title .title_chinese{ font-size: 30px; color: #ffaa02; font-weight: bold;}
	.content_title .title_english{ font-size: 15px; color: #ffaa02; margin-bottom:25px;}

	/*TOP动态*/
	.item1 img,.item2 img{vertical-align:top;}
	.item1 li,.item2 li{position:relative;float:left;margin-right:3px;width:502px;height:322px;overflow:hidden;cursor:pointer;}
	.item1 div,.item2 div{position:absolute;left:0;bottom:0px;width:100%;height:50px;text-align:center;background:#000;filter:alpha(opacity=70); -moz-opacity:0.7; -khtml-opacity: 0.7; opacity: 0.7;color:#FFF;overflow:hidden;}
	.item1 p,.item2 p{display:none;margin:5px auto 0;width:502px;line-height:20px;text-align:left;text-indent:2em;font-size:12px; color: #fff;}
	.item1 h3,.item2 h3{margin:11px 10px;height:25px; color: #fff; text-align: left; }

	.item3 img,.item4 img,.item5 img{vertical-align:top;}
	.item3 li,.item4 li,.item5 li{position:relative;float:left;margin-right:3px;width:327px;height:206px;overflow:hidden;cursor:pointer;}
	.item3 div,.item4 div,.item5 div{position:absolute;left:0;bottom:0px;width:100%;height:50px;text-align:center;background:#35cdff;filter:alpha(opacity=90); -moz-opacity:0.9; -khtml-opacity: 0.9; opacity: 0.9;color:#FFF;overflow:hidden;}
	.item3 p,.item4 p,.item5 p{display:none;margin:5px auto 0;width:327px;line-height:20px;text-align:left;text-indent:2em;font-size:12px; color: #fff;}
	.item3 h3,.item4 h3,.item5 h3{margin:11px 10px;height:25px; color: #fff; text-align: left; }

	/*师资团队*/
	.flexslider {
		margin: 0px auto 20px;
		position: relative;
		width: 100%;
		height: 560px;
		overflow: hidden;
		zoom: 1;
	}

	.flexslider .slides li {
		width: 100%;
		height: 100%;
	}

	.flex-direction-nav a {
		width: 70px;
		height: 70px;
		line-height: 99em;
		overflow: hidden;
		margin: -35px 0 0;
		display: block;
		background: url(images/index/ad_ctr.png) no-repeat;
		position: absolute;
		top: 20%;
		z-index: 10;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
		-webkit-transition: all .3s ease;
		border-radius: 35px;
	}

	.flex-direction-nav .flex-next {
		background-position: 0 -70px;
		right: 200px;
	}

	.flex-direction-nav .flex-prev {
		left: 200px;
	}

	.flexslider:hover .flex-next {
		opacity: 0.8;
		filter: alpha(opacity=25);
	}

	.flexslider:hover .flex-prev {
		opacity: 0.8;
		filter: alpha(opacity=25);
	}

	.flexslider:hover .flex-next:hover,
	.flexslider:hover .flex-prev:hover {
		opacity: 1;
		filter: alpha(opacity=50);
	}

	.flex-control-nav {
		width: 100%;
		position: absolute;
		bottom: 20px;
		text-align: center;
	}

	.flex-control-nav li {
		margin: 0 2px;
		display: inline-block;
		zoom: 1;
		*display: inline;
	}

	.flex-control-paging li a {
		background: url(images/index/dot.png) no-repeat 0 -16px;
		display: block;
		height: 16px;
		overflow: hidden;
		text-indent: -99em;
		width: 16px;
		cursor: pointer;
	}

	.flex-control-paging li a.flex-active,
	.flex-control-paging li.active a {
		background-position: 0 0;
	}

	.flexslider .slides a img {
		width: 100%;
		height: 482px;
		display: block;
	}
	
	
	#show{width:952px;overflow: hidden; margin:0 auto;}
	#show img{ border: 3px solid #F2F2F2;}
	#show img{ cursor: pointer;margin-top:10px;}
	#show img:hover{ margin-top:0px; }
	#demo1 a:link,#demo1 a:visited{ color:#000;text-decoration:none; font-size:12px;}
	#demo1 a:hover { color:#F99B06;text-decoration:underline;  font-size:12px; }
</style>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/base.js"></script>
<script>
	/*TOP动态*/
	$(function(){
		$(".item1 li").hover(
			function(){
				var that=this;	
				item1Timer=setTimeout(function(){
					$(that).find("div").animate({"bottom":0,"height":322},300,function(){
						$(that).find("p").fadeIn(200);
					});
				},100);
			},
			function(){
				var that=this;	
				clearTimeout(item1Timer);
				$(that).find("p").fadeOut(200);
				$(that).find("div").animate({"bottom":0,"height":50},300);
			}
		);

		$(".item2 li").hover(
			function(){
				var that=this;	
				item2Timer=setTimeout(function(){
					$(that).find("div").animate({"bottom":0,"height":322},300,function(){
						$(that).find("p").fadeIn(200);
					});
				},100);
			},
			function(){
				var that=this;	
				clearTimeout(item2Timer);
				$(that).find("p").fadeOut(200);
				$(that).find("div").animate({"bottom":0,"height":50},300);
			}
		);

		$(".item3 li").hover(
			function(){
				var that=this;	
				item3Timer=setTimeout(function(){
					$(that).find("div").animate({"bottom":0,"height":206},300,function(){
						$(that).find("p").fadeIn(200);
					});
				},100);
			},
			function(){
				var that=this;	
				clearTimeout(item3Timer);
				$(that).find("p").fadeOut(200);
				$(that).find("div").animate({"bottom":0,"height":50},300);
			}
		);

		$(".item4 li").hover(
			function(){
				var that=this;	
				item4Timer=setTimeout(function(){
					$(that).find("div").animate({"bottom":0,"height":206},300,function(){
						$(that).find("p").fadeIn(200);
					});
				},100);
			},
			function(){
				var that=this;	
				clearTimeout(item4Timer);
				$(that).find("p").fadeOut(200);
				$(that).find("div").animate({"bottom":0,"height":50},300);
			}
		);

		$(".item5 li").hover(
			function(){
				var that=this;	
				item5Timer=setTimeout(function(){
					$(that).find("div").animate({"bottom":0,"height":206},300,function(){
						$(that).find("p").fadeIn(200);
					});
				},100);
			},
			function(){
				var that=this;	
				clearTimeout(item5Timer);
				$(that).find("p").fadeOut(200);
				$(that).find("div").animate({"bottom":0,"height":50},300);
			}
		);	
	});

	// JavaScript Document
	function doslide(id)
	{			
		$(".divcontent").hide();
		$("#stu2_"+id).show();
	}
</script>
</head>

<body>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<div class="title_ad_box"><div class="title_ad"></div></div>
	<div class="title_logo">
		<img src="images/index/index_02.jpg" alt="" />
	</div>
	<div class="company_intro">
		<?php echo $this->_tpl_vars['company']['introduce']; ?>

	</div>
	<div class="teacher_intro_box">
		<div class="teacher_intro">
			<div id="banner_tabs" class="flexslider">
				<ul class="slides">
					<?php $_from = ($this->_tpl_vars['teacher']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['teacher'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['teacher']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['teacher']):
        $this->_foreach['teacher']['iteration']++;
?>
					<li>
						<div style="width:280px; height:280px; border-radius:50%; overflow:hidden; margin:0px auto;">
							<img src="<?php echo $this->_tpl_vars['teacher']['avatar']; ?>
" alt="" style="width:280px; height:280px;" />
						</div>
						<p style="font-size:25px; line-height:32px; margin-top:30px;">
							<?php echo $this->_tpl_vars['teacher']['name']; ?>

						</p>
						<p style=" line-height:25px; margin-bottom:25px;">
							<?php echo $this->_tpl_vars['teacher']['job']; ?>

						</p>
						<?php echo $this->_tpl_vars['teacher']['introduce']; ?>

					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				<ul class="flex-direction-nav">
					<li><a class="flex-prev" href="javascript:;">Previous</a></li>
					<li><a class="flex-next" href="javascript:;">Next</a></li>
				</ul>
				<ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
					<?php $_from = ($this->_tpl_vars['teacher2']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['teacher2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['teacher2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['teacher2']):
        $this->_foreach['teacher2']['iteration']++;
?>
					<li><a></a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ol>
			</div>
			
			<script src="js/slider.js"></script>
			<script type="text/javascript">
			$(function() {
				var bannerSlider = new Slider($('#banner_tabs'), {
					time: 5000,
					delay: 400,
					event: 'hover',
					auto: true,
					mode: 'fade',
					controller: $('#bannerCtrl'),
					activeControllerCls: 'active'
				});
				$('#banner_tabs .flex-prev').click(function() {
					bannerSlider.prev()
				});
				$('#banner_tabs .flex-next').click(function() {
					bannerSlider.next()
				});
			})
			</script>
			<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
		</div>
	</div>
	<div class="service">
		<div class="content_title">
			<p class="title_chinese">TOP服务</p>
			<p class="title_english">TOP SERVICE</p>
		</div>
		<div class="service_intro">
			<p class="title">（一）TOP UP 课程</p>
			<?php echo $this->_tpl_vars['course_index']['introduce']; ?>

			<p class="link"><a href="course.php">>>查看详情</a></p>
			<p>&nbsp;&nbsp;</p>
			<p class="title">（二）研究生项目</p>
			<?php echo $this->_tpl_vars['project_index']['introduce']; ?>

			<p class="link"><a href="cooperation.php">>>查看详情</a></p>
		</div>
		<div class="foreign">
			<img src="images/index/index_03.jpg" alt="" />
		</div>
		<div class="cl"></div>
	</div>
	<!--
	<div class="vedio">
		<embed src="http://player.ku6.com/refer/roXKW9QrYwLYZkKauLEeLQ../v.swf" quality="high" width="1024" height="450" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></embed>
	</div>
	-->
	<div class="advantage_intro">
		<div class="content_title">
			<p class="title_chinese">TOP优势</p>
			<p class="title_english">TOP ADVANTAGE</p>
		</div>
		<ul>
			<li>
				<p><img src="<?php echo $this->_tpl_vars['advantage_index']['pic1']; ?>
" alt="" /></p>
				<p class="title"><?php echo $this->_tpl_vars['advantage_index']['title1']; ?>
</p>
				<p class="content"><?php echo $this->_tpl_vars['advantage_index']['introduce1']; ?>
</p>
			</li>
			<li>
				<p><img src="<?php echo $this->_tpl_vars['advantage_index']['pic2']; ?>
" alt="" /></p>
				<p class="title"><?php echo $this->_tpl_vars['advantage_index']['title2']; ?>
</p>
				<p class="content"><?php echo $this->_tpl_vars['advantage_index']['introduce2']; ?>
</p>
			</li>
			<li>
				<p><img src="<?php echo $this->_tpl_vars['advantage_index']['pic3']; ?>
" alt="" /></p>
				<p class="title"><?php echo $this->_tpl_vars['advantage_index']['title3']; ?>
</p>
				<p class="content"><?php echo $this->_tpl_vars['advantage_index']['introduce3']; ?>
</p>	
			</li>
			<li>
				<p><img src="<?php echo $this->_tpl_vars['advantage_index']['pic4']; ?>
" alt="" /></p>
				<p class="title"><?php echo $this->_tpl_vars['advantage_index']['title4']; ?>
</p>
				<p class="content"><?php echo $this->_tpl_vars['advantage_index']['introduce4']; ?>
</p>
			</li>
			<li>
				<p><img src="<?php echo $this->_tpl_vars['advantage_index']['pic5']; ?>
" alt="" /></p>
				<p class="title"><?php echo $this->_tpl_vars['advantage_index']['title5']; ?>
</p>
				<p class="content"><?php echo $this->_tpl_vars['advantage_index']['introduce5']; ?>
</p>
			</li>
			<div class="cl"></div>
		</ul>
	</div>
	<div class="news_intro_box">
		<div class="news_intro">
			<div class="content_title" style="padding-top:30px;">
				<p class="title_chinese">TOP动态</p>
				<p class="title_english">TOP NEWS</p>
			</div>
			<div class="bigdiv_right">
				<ul class="item1">
	    			<li>
						<img src="<?php echo $this->_tpl_vars['news1']['pic']; ?>
" width="502" height="322" alt="" />
						<div>
		            		<h3><?php echo $this->_tpl_vars['news1']['name']; ?>
</h3>
			            	<p><?php echo $this->_tpl_vars['news1']['summary']; ?>
<a href="article.php?nid=<?php echo $this->_tpl_vars['news1']['nid']; ?>
">详情</a></p>
		            	</div>
		            </li>
	            </ul>
			</div>
			<div class="bigdiv_left">
				<ul class="item2">
	    			<li>
						<img src="<?php echo $this->_tpl_vars['news2']['pic']; ?>
" width="502" height="322" alt="" />
						<div>
		            		<h3><?php echo $this->_tpl_vars['news2']['name']; ?>
</h3>
			            	<p><?php echo $this->_tpl_vars['news2']['summary']; ?>
<a href="article.php?nid=<?php echo $this->_tpl_vars['news2']['nid']; ?>
">详情</a></p>
		            	</div>
		            </li>
	            </ul>
			</div>
			<div class="cl"></div>
			<div class="smalldiv">
				<ul class="item3">
	    			<li>
						<img src="<?php echo $this->_tpl_vars['news3']['pic']; ?>
" width="327" height="206" alt="" />
						<div>
		            		<h3><?php echo $this->_tpl_vars['news3']['name']; ?>
</h3>
			            	<p><?php echo $this->_tpl_vars['news3']['summary']; ?>
<a href="article.php?nid=<?php echo $this->_tpl_vars['news3']['nid']; ?>
">详情</a></p>
		            	</div>
		            </li>
	            </ul>
			</div>
			<div class="smalldiv_mid">
				<ul class="item4">
	    			<li>
						<img src="<?php echo $this->_tpl_vars['news4']['pic']; ?>
" width="327" height="206" alt="" />
						<div>
		            		<h3><?php echo $this->_tpl_vars['news4']['name']; ?>
</h3>
			            	<p><?php echo $this->_tpl_vars['news4']['summary']; ?>
<a href="article.php?nid=<?php echo $this->_tpl_vars['news4']['nid']; ?>
">详情</a></p>
		            	</div>
		            </li>
	            </ul>
			</div>
			<div class="smalldiv">
				<ul class="item5">
	    			<li>
						<img src="<?php echo $this->_tpl_vars['news5']['pic']; ?>
" width="327" height="206" alt="" />
						<div>
		            		<h3><?php echo $this->_tpl_vars['news5']['name']; ?>
</h3>
			            	<p><?php echo $this->_tpl_vars['news5']['summary']; ?>
<a href="article.php?nid=<?php echo $this->_tpl_vars['news5']['nid']; ?>
">详情</a></p>
		            	</div>
		            </li>
	            </ul>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<div class="xzjy">
		<div class="content_title">
			<p class="title_chinese">学子寄语</p>
			<p class="title_english">STUDENT MESSAGE</p>
		</div>
		
		
		
		
		<div id="show">
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td id="demo1" valign=top>
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                            <?php $_from = $this->_tpl_vars['student2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['student2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['student2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['student2']):
        $this->_foreach['student2']['iteration']++;
?>
                                <td>
                                    <table>
                                        <tr>
                                            <td width="177" height="65">
                                                <img id="stu_<?php echo $this->_tpl_vars['student2']['sid']; ?>
" src="<?php echo $this->_tpl_vars['student2']['pic']; ?>
" alt="" onmouseover="doslide(<?php echo $this->_tpl_vars['student2']['sid']; ?>
)" />
                                            </td>
                                        </tr>
                                    </table>        
                                </td>
                            <?php endforeach; endif; unset($_from); ?>
                            </tr>
                        </table>
                    </td>
                    <td id="demo2" valign=top>&nbsp;</td>
                </tr>
            </table>
        </div>
        <script>
			var speed=45;
			var tab=document.getElementById("show");
			var tab1=document.getElementById("demo1");
			var tab2=document.getElementById("demo2");
			tab2.innerHTML=tab1.innerHTML;
			function Marquee(){
				if(tab2.offsetWidth-tab.scrollLeft<=0)
					tab.scrollLeft-=tab1.offsetWidth;
				else{
					tab.scrollLeft++;
				}
			}
			var MyMar=setInterval(Marquee,speed);
			tab.onmouseover=function() {clearInterval(MyMar)};
			tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
		</script>
		
		
		
		<?php $_from = $this->_tpl_vars['student']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['student'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['student']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['student']):
        $this->_foreach['student']['iteration']++;
?>
		<div class="content">
			<div id="stu2_<?php echo $this->_tpl_vars['student']['sid']; ?>
" class="divcontent" <?php if ($this->_tpl_vars['student']['sid'] != 1): ?>style="display:none;"<?php endif; ?>>
			<?php echo $this->_tpl_vars['student']['content']; ?>

			<p align="right" style="margin-top:20px;">————<?php echo $this->_tpl_vars['student']['englishName']; ?>
&nbsp;<?php echo $this->_tpl_vars['student']['school']; ?>
&nbsp;<?php echo $this->_tpl_vars['student']['subject']; ?>
</p>
			</div>
		</div>
		<?php endforeach; endif; unset($_from); ?>

	</div>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
</body>
</html>