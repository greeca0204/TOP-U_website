<?php /* Smarty version 2.6.18, created on 2016-01-01 14:39:04
         compiled from showCourseDetail.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
  <tr>
    <td class="head" colspan="2"><b>操作菜单</b></td>
  </tr>
  <tr>
    <td class="b_title">
		<a href="course.php" target="_self">TOP课程</a>&nbsp; 
    	<a href="courseDetail.php?action=new" target="_self">添加TOP课程介绍</a>&nbsp;
    	<a href="courseDetail.php" target="_self">TOP课程介绍</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" action="courseDetail.php?action=delete" method="post">
    <table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
        	<td colspan="4" class="head">教师信息管理</td>
        </tr>
        <tr>
			<td width="10%" class="head_2">项目编号</td>
			<td width="60%" class="head_2">项目名称</td>         	
	  	  	<td width="10%" class="head_2">管理</td>
			<td width="20%" class="head_2">删除</td>
		</tr>
		<?php $_from = $this->_tpl_vars['courseDetail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['courseDetail'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['courseDetail']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['courseDetail']):
        $this->_foreach['courseDetail']['iteration']++;
?>
		<tr>
			<td width="10%" class="b"><?php echo $this->_tpl_vars['courseDetail']['cid']; ?>
</td>   
			<td width="60%" class="b"><?php echo $this->_tpl_vars['courseDetail']['title']; ?>
</td>			
   			<td width="10%" class="b">
            	<a href='courseDetail.php?action=new&cid=<?php echo $this->_tpl_vars['courseDetail']['cid']; ?>
'>修改</a>
		  	</td>
			<td width="20%" class="b">
				<input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $this->_tpl_vars['courseDetail']['cid']; ?>
" />
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="3" class="b">
				<input type="submit" name="Submit" value="删除" />
			</td>
			<td width="20%" class="b">
				全选/全不选<input type="checkbox" name="chk2" id="chk2" />
			</td>
		</tr>
		<tr>
			<td colspan="4" class="b"><?php echo $this->_tpl_vars['paggingbar']; ?>
</td>
		</tr>  
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>