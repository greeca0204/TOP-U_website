<?php /* Smarty version 2.6.18, created on 2016-02-11 04:25:26
         compiled from showMessage.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
        	<td colspan="5" class="head">留言信息管理</td>
        </tr>
		<tr>
			<td width="10%" class="head_2">姓名</td>
            <td width="20%" class="head_2">联系电话</td>
			<td width="20%" class="head_2">其他联系方式</td>
			<td width="50%" class="head_2">留言</td>
		</tr>
		<?php $_from = $this->_tpl_vars['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['message'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['message']):
        $this->_foreach['message']['iteration']++;
?>
		<tr>
			<td width="10%" class="b"><?php echo $this->_tpl_vars['message']['username']; ?>
</td>
            <td width="20%" class="b"><?php echo $this->_tpl_vars['message']['tel']; ?>
</td>
			<td width="20%" class="b"><?php echo $this->_tpl_vars['message']['other']; ?>
</td>
			<td width="50%" class="b"><?php echo $this->_tpl_vars['message']['message']; ?>
</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td class="b" colspan="4"><?php echo $this->_tpl_vars['paggingbar']; ?>
</td>
		</tr>  
	</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>