<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="zh-cn" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script charset="utf-8" src="js/jquery.js"></script>
<script charset="utf-8" src="js/menu.js"></script>
</head>
<body>
<?php 
    if($_SESSION['username'] == null)
    	echo "<script>alert('请先登录！');location.href='index.php';</script>";
?>
        <div id="menu">
            <center>
                <?php
                $say = "您好！";
				date_default_timezone_set('PRC');
				//echo date('H:i:s');
                $time = intval(date('Hi'));				
                if ($time >= 1900 || $time < 300)
                    $say = "晚上好！";
                else if ($time <= 600)
                    $say = "凌晨好！";
                else if ($time >= 600 && $time < 1130)
                    $say = "早上好！";
                else if ($time >= 1130 && $time < 1230)
                    $say = "中午好！";
                else if ($time >= 1230 && $time < 1800)
                    $say = "下午好！";
                else
                    $say = "傍晚好！";
                echo $_SESSION['username'] . '，' . $say;
                ?>
            </center>
            <ul>               
                <li class="main">
                    <a class="parent" href="webInfo.php" style="background:#069;" target="mainFrame">网站信息管理</a>
                </li>
				<li class="main">
                    <a class="parent" href="company.php" style="background:#069;" target="mainFrame">公司简介</a>
                </li>
                <li class="main">
                    <a class="parent" href="service.php" style="background:#069;" target="mainFrame">服务流程</a>
                </li>   
                
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">常见问题</a>
                    <ul>
                        <li><a href="question.php?action=new" target="mainFrame">添加常见问题</a></li>
                        <li><a href="question.php" target="mainFrame">常见问题管理</a></li>            
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">学子寄语</a>
                    <ul>
                        <li><a href="student.php?action=new" target="mainFrame">添加学子寄语</a></li>
                        <li><a href="student.php" target="mainFrame">学子寄语管理</a></li>                 
                    </ul>
                </li> 
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">留学资讯</a>
                    <ul>
                        <li><a href="news.php?action=new&type=1" target="mainFrame">添加留学资讯</a></li>
                        <li><a href="news.php?type=1" target="mainFrame">留学资讯管理</a></li> 
                        <li><a href="hotNews.php?action=new" target="mainFrame">添加留学资讯推荐</a></li>
                        <li><a href="hotNews.php" target="mainFrame">留学资讯推荐管理</a></li>   
                        <li><a href="adNews.php?action=new" target="mainFrame">添加广告推荐</a></li>
                        <li><a href="adNews.php" target="mainFrame">广告推荐管理</a></li>             
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">与我们合作</a>
                    <ul>
                        <li><a href="project.php?action=new" target="mainFrame">添加项目信息</a></li>
                        <li><a href="project.php" target="mainFrame">项目信息管理</a></li>  
                                                
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">TOP动态</a>
                    <ul>
                        <li><a href="news.php?action=new&type=2" target="mainFrame">添加TOP动态</a></li>
                        <li><a href="news.php?type=2" target="mainFrame">TOP动态管理</a></li> 
                        <li><a href="adTrend.php" target="mainFrame">动态推荐管理</a></li>                
                    </ul>
                </li>
				
				<li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">TOP服务</a>
                    <ul>
                        <li><a href="course_index.php" target="mainFrame">TOP UP课程</a></li>
						<li><a href="project_index.php" target="mainFrame">研究生项目</a></li>	
                    </ul>
                </li>
                
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">TOP师资</a>
                    <ul>
                        <li><a href="teacher.php?action=new" target="mainFrame">添加教师信息</a></li>
                        <li><a href="teacher.php" target="mainFrame">教师信息管理</a></li>            
                    </ul>
                </li>
				<li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">TOP优势</a>
                    <ul>
                        <li><a href="advantage.php" target="mainFrame">TOP优势</a></li>
                        <li><a href="advantage_index.php" target="mainFrame">首页TOP优势</a></li>                 
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">TOP课程</a>
                    <ul>
                        <li><a href="course.php" target="mainFrame">TOP课程</a></li>
                        <li><a href="courseDetail.php" target="mainFrame">TOP课程介绍</a></li> 
                        <li><a href="courseDetail.php?action=new" target="mainFrame">添加TOP课程介绍</a></li>                
                    </ul>
                </li>
				<li class="main">
                    <a class="parent" href="message.php" style="background:#069;" target="mainFrame">留言信息管理</a>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">管理员信息管理</a>
                    <ul>
                        <li><a href="admin.php?action=new" target="mainFrame">添加管理员信息</a></li>
                        <li><a href="admin.php" target="mainFrame">管理员信息管理</a></li>                 
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">友情链接管理</a>
                    <ul>
                        <li><a href="friend.php?action=new" target="mainFrame">添加友情链接</a></li>
                        <li><a href="friend.php" target="mainFrame">友情链接管理</a></li>                 
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">数据库管理</a>
                    <ul>
                        <li><a href="bak/bak.php" target="mainFrame">数据库备份</a></li>
                        <li><a href="bak/bak.php?a_type=bakin" target="mainFrame">数据库还原</a></li>                
                    </ul>
                </li>
				<li><a id="logout" href="index.php?action=loginout" style="background:#069;">退出系统</a></li>
            </ul>
        </div>
</body>
</html>
