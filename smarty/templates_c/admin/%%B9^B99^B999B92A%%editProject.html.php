<?php /* Smarty version 2.6.18, created on 2016-01-01 14:39:25
         compiled from editProject.html */ ?>
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
    	<a href="project.php?action=new" target="_self">添加项目信息</a>&nbsp;
    	<a href="project.php" target="_self">项目信息管理</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" method="post" action="project.php?action=save" enctype="multipart/form-data">
    <input type="hidden" id="pid" name="pid" value="<?php echo $this->_tpl_vars['cooperation']['pid']; ?>
" />
	<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
    	<tr>
			<td colspan="2" class="head">项目信息管理</td>
        </tr>
		<tr>
			<td width="15%" class="b">项目名</td>
			<td class="b">
                <input type="text" name="pname" id="pname" value="<?php echo $this->_tpl_vars['cooperation']['pname']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">介绍</td>
			<td class="b">
                <textarea name="introduce" id="introduce" style="width:100%;height:150px;resize: none;"><?php echo $this->_tpl_vars['cooperation']['introduce']; ?>
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