<?php /* Smarty version 2.6.18, created on 2016-01-01 14:39:06
         compiled from editCourseDetail.html */ ?>
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
<form name="fmEdit" id="fmEdit" method="post" action="courseDetail.php?action=save" enctype="multipart/form-data">
    <input type="hidden" id="cid" name="cid" value="<?php echo $this->_tpl_vars['courseDetail']['cid']; ?>
" />
	<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
    	<tr>
			<td colspan="2" class="head">TOP课程</td>
        </tr>
		<tr>
			<td width="15%" class="b">项目名称</td>
			<td class="b">
                <input type="text" name="title" id="title" value="<?php echo $this->_tpl_vars['courseDetail']['title']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">图片</td>
			<td class="b">
				<input name="image" type="file">
				<input type="hidden" name="hasimg" value="<?php echo $this->_tpl_vars['courseDetail']['pic']; ?>
" />
			</td>
		</tr>
		<?php if ($this->_tpl_vars['courseDetail']['cid'] != 0): ?>
		<tr>
			<td width="15%" class="b">图片</td>
			<td class="b">
				<img src="../<?php echo $this->_tpl_vars['courseDetail']['pic']; ?>
" />
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td width="15%" class="b">介绍</td>
			<td class="b">
                <textarea name="content1" id="content1" style="width:100%;height:350px;resize: none;"><?php echo $this->_tpl_vars['courseDetail']['introduce']; ?>
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