<?php /* Smarty version 2.6.18, created on 2016-01-01 14:39:01
         compiled from showCourse.html */ ?>
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
<form name="fmEdit" id="fmEdit" method="post" action="course.php?action=save" enctype="multipart/form-data">
    <table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
    	<tr>
			<td colspan="2" class="head">TOP课程</td>
        </tr>
        <tr>
			<td width="15%" class="b">适用人群</td>
			<td class="b">
                <textarea name="syrq" id="syrq" style="width:100%;height:150px;resize: none;"><?php echo $this->_tpl_vars['course']['syrq']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">标题1</td>
			<td class="b">
                <input type="text" name="title1" id="title1" value="<?php echo $this->_tpl_vars['course']['title1']; ?>
" class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">图框1</td>
			<td class="b">
                <textarea name="picbox1"  id="picbox1" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['course']['picbox1']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">标题2</td>
			<td class="b">
                <input type="text" name="title2" id="title2" value="<?php echo $this->_tpl_vars['course']['title2']; ?>
" class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">图框2</td>
			<td class="b">
                <textarea name="picbox2"  id="picbox2" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['course']['picbox2']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">标题3</td>
			<td class="b">
                <input type="text" name="title3" id="title3" value="<?php echo $this->_tpl_vars['course']['title3']; ?>
" class="frminput" />
			</td>
		</tr>
        <tr>
			<td width="15%" class="b">图框3</td>
			<td class="b">
                <textarea name="picbox3"  id="picbox3" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['course']['picbox3']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">标题4</td>
			<td class="b">
                <input type="text" name="title4" id="title4" value="<?php echo $this->_tpl_vars['course']['title4']; ?>
" class="frminput" />
			</td>
		</tr>
        <tr>
			<td width="15%" class="b">图框4</td>
			<td class="b">
				<textarea name="picbox4"  id="picbox4" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['course']['picbox4']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">标题5</td>
			<td class="b">
                <input type="text" name="title5" id="title5" value="<?php echo $this->_tpl_vars['course']['title5']; ?>
" class="frminput" />
			</td>
		</tr>
        <tr>
			<td width="15%" class="b">图框5</td>
			<td class="b">
                <textarea name="picbox5"  id="picbox5" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['course']['picbox5']; ?>
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