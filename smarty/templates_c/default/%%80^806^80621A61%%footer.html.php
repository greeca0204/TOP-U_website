<?php /* Smarty version 2.6.18, created on 2016-02-10 14:04:12
         compiled from footer.html */ ?>
	<div class="footer">	
		<div class="foot_box">
			<div class="foot_top">
				<ul>
					<li>友情链接</li>
					<li>联系我们</li>
					<li>&nbsp;</li>
					<li>网址导航</li>
					<div class="cl"></div>
				</ul>
			</div>
			<hr />
			<div class="foot_middle">
				<div class="foot_middle_left">
					<ul>
						 <?php $_from = $this->_tpl_vars['friend']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['friend'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['friend']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['friend']):
        $this->_foreach['friend']['iteration']++;
?>
						<li><a href="<?php echo $this->_tpl_vars['friend']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['friend']['friends']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<div class="foot_middle_middle">
					<ul>
						<li>公司地址：</li>
						<li><?php echo $this->_tpl_vars['website']['address']; ?>
</li>
						<li>电话号码：<?php echo $this->_tpl_vars['website']['tel']; ?>
</li>
						<li>电子邮箱：<?php echo $this->_tpl_vars['website']['email']; ?>
</li>
					</ul>
				</div>
				
				<div class="foot_middle_right">
					<ul>
						<li class="navli"><a href="course.php">TOP课程</a></li>
						<li class="navli"><a href="service.php">服务流程</a></li>
						<li class="navli"><a href="advantage.php">TOP优势</a></li>
						<li class="navli"><a href="trend.php">TOP动态</a></li>
						<li class="navli"><a href="news.php">留学资讯</a></li>
						<li class="navli"><a href="contract_us.php">联系我们</a></li>
						<li class="navli"><a href="cooperation.php">TOP合作</a></li>
						<li class="navli"><a href="question.php">常见问题</a></li>
						<div class="cl"></div>
					</ul>
				</div>

				<div class="cl"></div>
			</div>
		</div>
		<div class="copyright"><?php echo $this->_tpl_vars['website']['copyright']; ?>
</div>
	</div>