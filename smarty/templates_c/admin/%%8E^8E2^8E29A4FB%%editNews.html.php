<?php /* Smarty version 2.6.18, created on 2016-02-11 13:00:07
         compiled from editNews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'editNews.html', 63, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<form name="fmEdit" id="fmEdit" method="post" action="news.php?action=save" enctype="multipart/form-data">
	<input type="hidden" name="nid" id="nid" value="<?php echo $this->_tpl_vars['news']['nid']; ?>
" />
	<input type="hidden" name="type" id="type" value="<?php echo $this->_tpl_vars['news']['type']; ?>
" />
	<table width="100%" align="center" cellspacing="1" cellpadding="3" class="i_table">
		<tr>
			<?php if ($this->_tpl_vars['type'] == 2): ?>
				<td colspan="2" class="head">TOP动态管理</td>
			<?php endif; ?>
    		<?php if ($this->_tpl_vars['type'] == 1): ?>
    			<td colspan="2" class="head">留学资讯管理</td>
    		<?php endif; ?>
        </tr>
        <tr>
			<td width="15%" class="b">*新闻标题</td>
			<td class="b">
				<input type="text" name="name" id="name" value="<?php echo $this->_tpl_vars['news']['name']; ?>
" class="frminput" />
			</td>
	  	</tr>
		<tr>
			<td width="15%" class="b">新闻图片</td>
            <td class="b_sel">        
				<input name="image" type="file">
				<input type="hidden" name="hasimg" value="<?php echo $this->_tpl_vars['news']['pic']; ?>
" />  
		  </td>
	  	</tr>
        <?php if ($this->_tpl_vars['news']['pic'] != ''): ?>
        <tr>
			<td width="15%" class="b">新闻图片</td>
			<td class="b">
				<img src="../<?php echo $this->_tpl_vars['news']['pic']; ?>
" width="341" height="341" alt="" />
			</td>
	  	</tr>
	  	<?php endif; ?>
		<tr>
			<td width="15%" class="b">时间</td>
			<td class="b">
				<input type="text" name="addtime" id="addtime" onClick="return Calendar('addtime');"  value="<?php echo ((is_array($_tmp=$this->_tpl_vars['news']['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
"  class="frminput" />
			</td>
		</tr>
	  	<tr>
			<td width="15%" class="b">新闻概述</td>
			<td class="b">
				<textarea name="summary"  id="summary" style="width:100%;height:100px; resize:none;"><?php echo $this->_tpl_vars['news']['summary']; ?>
</textarea>
			</td>
	  	</tr>
	  	<tr>
			<td width="15%" class="b">新闻内容</td>
			<td class="b">
				<textarea name="content1"  id="content1" style="width:100%;height:350px; resize:none;"><?php echo $this->_tpl_vars['news']['content']; ?>
</textarea>
			</td>
	  	</tr>
	  	<?php if ($this->_tpl_vars['type'] == 2): ?>
	  	<tr>
			<td width="15%" class="b">推荐</td>
			<td class="b_sel">
				<select  name="recommend" id="recommend">
					<option value="1" <?php if ($this->_tpl_vars['news']['recommend'] == 1): ?>selected="selected"<?php endif; ?>>推荐</option>
					<option value="0" <?php if ($this->_tpl_vars['news']['recommend'] == 0): ?>selected="selected"<?php endif; ?>>不推荐</option>
				</select>
			</td>
	  	</tr>	  	
		<tr>
			<td width="15%" class="b">状态</td>
			<td class="b_sel">
				<select  name="status" id="status">
					<option value="1" <?php if ($this->_tpl_vars['news']['status'] == 1): ?>selected="selected"<?php endif; ?>>即将举行</option>
					<option value="2" <?php if ($this->_tpl_vars['news']['status'] == 2): ?>selected="selected"<?php endif; ?>>往期活动</option>
				</select>
			</td>
	  	</tr>
	  	<?php endif; ?>
		<tr>
			<td colspan="2" class="b">
				<input type="submit" value="提交" />
				<input type="reset" value="重置" />
				
			</td>
		</tr>
	</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>