<?php /* Smarty version 2.6.18, created on 2016-02-11 13:00:06
         compiled from showNews.html */ ?>
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
    	<?php if ($this->_tpl_vars['type'] == 2): ?>
    		<a href="news.php?action=new&type=2" target="_self">添加TOP动态</a>&nbsp;
    		<a href="news.php?type=2" target="_self">TOP动态管理</a>&nbsp;
    		<a href="adTrend.php" target="_self">动态推荐管理</a>
    	<?php endif; ?>
    	<?php if ($this->_tpl_vars['type'] == 1): ?>
    		<a href="news.php?action=new&type=1" target="_self">添加留学资讯</a>&nbsp;
    		<a href="news.php?type=1" target="_self">留学资讯管理</a>&nbsp;
    		<a href="hotNews.php?action=new" target="_self">添加留学资讯推荐</a>&nbsp;
    		<a href="hotNews.php" target="_self">留学资讯推荐管理</a>&nbsp;
    		<a href="adNews.php?action=new" target="_self">添加广告推荐</a>&nbsp;
    		<a href="adNews.php" target="_self">广告推荐管理</a>
    	<?php endif; ?>
    </td>
  </tr>
</table>
<br />
<form name="fmEdit" id="fmEdit" action="news.php?action=delete" method="post">
    <table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
        	<?php if ($this->_tpl_vars['type'] == 2): ?>
				<td colspan="4" class="head">TOP动态管理</td>
			<?php endif; ?>
    		<?php if ($this->_tpl_vars['type'] == 1): ?>
    			<td colspan="4" class="head">留学资讯管理</td>
    		<?php endif; ?>
        </tr>
        <tr>
			<td width="20%" class="head_2">新闻编号</td>
			<td width="50%" class="head_2">新闻名称</td>          	
	  	  	<td width="10%" class="head_2">管理</td>
			<td width="20%" class="head_2">删除</td>
		</tr>
		<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['news']):
        $this->_foreach['news']['iteration']++;
?>
		<tr>
			<td width="20%" class="b"><?php echo $this->_tpl_vars['news']['nid']; ?>
</td>
			<td width="50%" class="b"><a href="../article.php?nid=<?php echo $this->_tpl_vars['news']['nid']; ?>
" target="_blank"><?php echo $this->_tpl_vars['news']['name']; ?>
</a></td>           
   			<td width="10%" class="b">
            	<a href='news.php?action=new&nid=<?php echo $this->_tpl_vars['news']['nid']; ?>
'>修改</a>
		  	</td>
			<td width="20%" class="b">
				<input type="checkbox" name="chk1[]" id="chk1" value="<?php echo $this->_tpl_vars['news']['nid']; ?>
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