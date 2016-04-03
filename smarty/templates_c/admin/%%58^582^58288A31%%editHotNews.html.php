<?php /* Smarty version 2.6.18, created on 2016-02-10 11:09:28
         compiled from editHotNews.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
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
<form name="fmEdit" id="fmEdit" method="post" action="hotNews.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['hotNews']['id']; ?>
" />
	<table border="0" width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
			<td colspan="2" class="head">留学资讯推荐</td>
        </tr>
		<tr>
			<td width="10%" class="b">资讯名称：</td>
			<td class="b">
				<input name="title" id="title" value="<?php echo $this->_tpl_vars['hotNews']['title']; ?>
"  class="frminput" />
			</td>
		</tr>
		<tr>
			<td width="10%" class="b">资讯图片：</td>
			<td class="b_sel">
				<input name="image" type="file">
				<input type="hidden" name="hasimg" value="<?php echo $this->_tpl_vars['hotNews']['imgurl']; ?>
" />&nbsp;格式为：500*280
			</td>
		</tr>
		<?php if ($this->_tpl_vars['hotNews']['imgurl'] != ''): ?>
		<tr>
			<td width="10%" class="b">资讯图片：</td>
			<td class="b_sel"> 
    			<img src="../<?php echo $this->_tpl_vars['hotNews']['imgurl']; ?>
" alt="" />
    		</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td width="10%" class="b">资讯链接：</td>
			<td class="b">
				<input name="contenturl" id="contenturl" value="<?php echo $this->_tpl_vars['hotNews']['contenturl']; ?>
" class="frminput"/>
			</td>
		</tr>
		<tr>
			<td width="10%" class="b">是否显示：</td>
			<td class="b_sel">
				<select name="checked" id="checked">             
      				<option value="0"  <?php if ($this->_tpl_vars['hotNews']['checked'] == 0): ?>selected<?php endif; ?>>隐藏</option>
                    <option value="1"  <?php if ($this->_tpl_vars['hotNews']['checked'] == 1): ?>selected<?php endif; ?>>显示</option>
				</select>
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
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>