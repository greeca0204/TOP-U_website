<?php /* Smarty version 2.6.18, created on 2016-01-01 14:39:45
         compiled from editTeacher.html */ ?>
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
    	<a href="teacher.php?action=new" target="_self">添加教师信息</a>&nbsp;
    	<a href="teacher.php" target="_self">教师信息管理</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" method="post" action="teacher.php?action=save" enctype="multipart/form-data">
    <input type="hidden" id="tid" name="tid" value="<?php echo $this->_tpl_vars['teacher']['tid']; ?>
" />
	<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
    	<tr>
			<td colspan="2" class="head">教师信息管理</td>
        </tr>
		<tr>
			<td width="15%" class="b">姓名</td>
			<td class="b">
                <input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['teacher']['name']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">头像</td>
			<td class="b">
				<input name="image" type="file">
				<input type="hidden" name="hasimg" value="<?php echo $this->_tpl_vars['teacher']['avatar']; ?>
" />
			</td>
		</tr>
		<?php if ($this->_tpl_vars['teacher']['tid'] != 0): ?>
		<tr>
			<td width="15%" class="b">头像</td>
			<td class="b">
				<img src="../<?php echo $this->_tpl_vars['teacher']['avatar']; ?>
" />
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td width="15%" class="b">职位</td>
			<td class="b">
                <input type="text" name="job" id="job" value="<?php echo $this->_tpl_vars['teacher']['job']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">介绍</td>
			<td class="b">
                <textarea name="content1" id="content1" style="width:100%;height:350px;resize: none;"><?php echo $this->_tpl_vars['teacher']['introduce']; ?>
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