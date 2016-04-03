<?php /* Smarty version 2.6.18, created on 2016-01-01 14:39:41
         compiled from showCourseIndex.html */ ?>
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
    	<a href="course_index.php" target="_self">TOP UP课程</a>&nbsp;
    	<a href="project_index.php" target="_self">研究生项目</a>	
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" method="post" action="course_index.php?action=save" enctype="multipart/form-data">
    <table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
    	<tr>
			<td colspan="2" class="head">TOP UP 课程</td>
        </tr>
		<tr>
			<td width="15%" class="b">TOP UP 课程内容</td>
			<td class="b">
                <textarea name="content1" id="content1" style="width:100%;height:350px;resize: none;"><?php echo $this->_tpl_vars['course_index']['introduce']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" class="b">
				<input type="submit" value="提交">
				<input type="reset" value="重置">
			</td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>