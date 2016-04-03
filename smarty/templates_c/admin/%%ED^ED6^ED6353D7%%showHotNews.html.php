<?php /* Smarty version 2.6.18, created on 2016-02-10 11:09:29
         compiled from showHotNews.html */ ?>
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
    	<a href="news.php?action=new&type=1" target="_self">添加留学资讯</a>&nbsp;
    	<a href="news.php?type=1" target="_self">留学资讯管理</a>&nbsp;
    	<a href="hotNews.php?action=new" target="_self">添加留学资讯推荐</a>&nbsp;
    	<a href="hotNews.php" target="_self">留学资讯推荐管理</a>&nbsp;
    	<a href="adNews.php?action=new" target="_self">添加广告推荐</a>&nbsp;
    	<a href="adNews.php" target="_self">广告推荐管理</a>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" action="hotNews.php?action=delete" method="post">
	<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
        	<td colspan="4" class="head">留学资讯推荐</td>
        </tr>
		<tr>
			<td class="head_2" width="50%">资讯名称</td>
			<td class="head_2" width="20%">是否显示</td>
			<td class="head_2" width="10%">管理</td>
			<td class="head_2" width="20%">删除</td>
		</tr>
		<?php $_from = $this->_tpl_vars['hotNews']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['hotNews'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hotNews']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['hotNews']):
        $this->_foreach['hotNews']['iteration']++;
?>
		<tr>
			<td width="50%" class="b"><?php echo $this->_tpl_vars['hotNews']['title']; ?>
</td>
			<td width="20%"  class="b">
				<?php if ($this->_tpl_vars['hotNews']['checked'] == 0): ?>隐藏<?php endif; ?>
				<?php if ($this->_tpl_vars['hotNews']['checked'] == 1): ?>显示<?php endif; ?>
			</td>
   			<td width="10%"  class="b">
            	<a href='hotNews.php?action=new&id=<?php echo $this->_tpl_vars['hotNews']['id']; ?>
'>修改</a>
			</td>
			<td width="20%"  class="b">
                <input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $this->_tpl_vars['hotNews']['id']; ?>
" />
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td colspan="3" class="b">
				<input type="submit" name="Submit" value="删除" />
			</td>
			<td width="20%"  class="b">
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