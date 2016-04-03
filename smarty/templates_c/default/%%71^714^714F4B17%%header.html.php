<?php /* Smarty version 2.6.18, created on 2016-02-10 14:04:12
         compiled from header.html */ ?>
	<script type="text/javascript">
	$(document).ready(function(){
		
		$(".side ul li").hover(function(){
			$(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"})	
		},function(){
			$(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})	
		});
		
		$("#ewmbox").hover(function(){
			$(".erweima").css('display','block');
		},function(){
			$(".erweima").css('display','none');
		});
		$("#telpic").hover(function(){
			$(".teldiv").css('display','block');
		},function(){
			$(".teldiv").css('display','none');
		});
	});

	$(window).scroll(function(){

		if(document.body.scrollTop==0)
		{
			$(".sidebox2").css('display','none');
		}
		else
		{
			$(".sidebox2").css('display','block');
		}
	});
		

	//回到顶部
	function goTop(){
		$('html,body').animate({'scrollTop':0},600);
	}
	
	function ewm(){
		$(".erweima").css('display','block');
	}
	function ewmclose(){
		$(".erweima").css('display','none');
		//alert(2);
	}
	</script>
	<div class="side">
		<ul>
			<li><a href="#"><div class="sidebox2"><img src="images/float/side_icon04.png"></div></a></li>
			<li>
				<a href="javascript:void(0);" id="ewmbox">
					<div style="width:54px;height:54px;transition:all 0.3s;background:#000;opacity:0.8;filter:Alpha(opacity=80);">
						<img src="images/float/side_icon01.png">
					</div>
				</a>
			</li>
			<li><a href="javascript:void(0);" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=1438928203&site=qq&menu=yes', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"><div class="sidebox"><img src="images/float/side_icon02.png">在线客服</div></a></li>
			<!--
			<li><a href="javascript:void(0);" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=3266750943&site=qq&menu=yes', '_blank', 'height=502, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"><div class="sidebox"><img src="images/float/side_icon02.png">在线客服</div></a></li>
			-->
			<li>
				<a href="javascript:void(0);" id="telpic">
					<div style="width:54px;height:54px;transition:all 0.3s;background:#000;opacity:0.8;filter:Alpha(opacity=80);">
						<img src="images/float/side_icon03.png">
					</div>
				</a>
			</li>
		</ul>
		<div class="erweima">                      
			<p><img src="images/float/ewm.jpg" alt=""></p>                    
		</div>
		<div class="teldiv">                      
			<p>020-38921300</p>                    
		</div>
	</div>
	<div class="header">
		<div class="headerbox">
			<div class="logo">
				<a href="index.php">
					<img src="images/head_logo.png" alt="" width="215" height="80" />
				</a>
			</div>
			<div class="nav">
				<ul>
					<li id="index" class="navli" onclick="location.href='index.php';">首页</li>
					<li id="liuxue" class="navli">
						TOP留学
						<ul style="margin-top:25px;">
							<li id="course" class="subnavli" onclick="location.href='course.php';">TOP课程</li>
							<li id="service" class="subnavli" onclick="location.href='service.php';">服务流程</li>
						</ul>
					</li>
					<li class="navli" onclick="location.href='advantage.php';">TOP优势</li>
					<li id="dongtai" class="navli">
						TOP动态
						<ul style="margin-top:25px;">
							<li id="trend" class="subnavli" onclick="location.href='trend.php';">TOP动态</li>
							<li id="news" class="subnavli" onclick="location.href='news.php';">留学资讯</li>
						</ul>
					</li>
					<li id="link" class="navli">
						联系我们
						<ul style="margin-top:25px;">
							<li id="contract_us" class="subnavli" onclick="location.href='contract_us.php';">联系我们</li>
							
							<li id="cooperation" class="subnavli" onclick="location.href='cooperation.php';">与我们合作</li>
							
						</ul>
					</li>
					<li class="navli" onclick="location.href='question.php';">Q&A</li>
					<div class="cl"></div>
				</ul>
			</div>
			<div class="cl"></div>
		</div>
	</div>
