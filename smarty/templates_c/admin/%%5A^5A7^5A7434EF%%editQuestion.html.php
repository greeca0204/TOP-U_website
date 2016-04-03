<?php /* Smarty version 2.6.18, created on 2016-01-02 07:23:24
         compiled from editQuestion.html */ ?>
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
    	<a href="question.php?action=new" target="_self">添加常见问题</a>&nbsp;
    	<a href="question.php" target="_self">常见问题管理</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" method="post" action="question.php?action=save" enctype="multipart/form-data">
    <input type="hidden" id="qid" name="qid" value="<?php echo $this->_tpl_vars['question']['qid']; ?>
" />
	<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
    	<tr>
			<td colspan="2" class="head">常见问题</td>
        </tr>
		<tr>
			<td width="15%" class="b">问题</td>
			<td class="b">
                <textarea name="question" id="question" style="width:100%;height:150px;resize: none;"><?php echo $this->_tpl_vars['question']['question']; ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" class="b">答案</td>
			<td class="b">
                <textarea name="answer" id="answer" style="width:100%;height:150px;resize: none;"><?php echo $this->_tpl_vars['question']['answer']; ?>
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