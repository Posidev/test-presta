<?php /* Smarty version Smarty-3.1.14, created on 2013-12-12 07:39:08
         compiled from "F:\wamp\www\presta1_5_6_1\themes\default\mobile\addresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2181652a9681c958144-30487518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ca092719f8e4085e64ad4934495f4dcd8f590e9' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\themes\\default\\mobile\\addresses.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2181652a9681c958144-30487518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'multipleAddresses' => 0,
    'addresses_style' => 0,
    'address' => 0,
    'pattern' => 0,
    'addressKey' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a9681ca3ac75_71069145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a9681ca3ac75_71069145')) {function content_52a9681ca3ac75_71069145($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'F:\\wamp\\www\\presta1_5_6_1\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_escape')) include 'F:\\wamp\\www\\presta1_5_6_1\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div data-role="content" id="content">
	<a data-role="button" data-icon="arrow-l" data-theme="a" data-mini="true" data-inline="true" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a>
	<p><?php echo smartyTranslate(array('s'=>'Please configure your default billing and delivery addresses when placing an order. You may also add additional addresses, which can be useful for sending gifts or receiving an order at your office.'),$_smarty_tpl);?>
</p>
	<div>
		<?php if (isset($_smarty_tpl->tpl_vars['multipleAddresses']->value)&&$_smarty_tpl->tpl_vars['multipleAddresses']->value){?>
		<h3><?php echo smartyTranslate(array('s'=>'Your addresses are listed below.'),$_smarty_tpl);?>
</h3>
		<p><?php echo smartyTranslate(array('s'=>'Be sure to update your personal information if it has changed.'),$_smarty_tpl);?>
</p>
		<?php $_smarty_tpl->tpl_vars["adrs_style"] = new Smarty_variable($_smarty_tpl->tpl_vars['addresses_style']->value, null, 0);?>
		<form action="opc.html" method="post">
			<ul data-role="listview" data-theme="g">
				<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['multipleAddresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
				<li>
					<a href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,null,"id_address=".$_tmp1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
" data-ajax="false">
						<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
</p>
						<?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address']->value['ordered']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value){
$_smarty_tpl->tpl_vars['pattern']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['addressKey'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['pattern']->value), null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addressKey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
$_smarty_tpl->tpl_vars['key']->_loop = true;
?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address']->value['formated'][smarty_modifier_replace($_smarty_tpl->tpl_vars['key']->value,',','')], 'htmlall', 'UTF-8');?>

							<?php } ?>
							<br />
						<?php } ?>
					</a>
				</li>
				<?php } ?>
			</ul>
		</form>
		<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No addresses are available.'),$_smarty_tpl);?>
</p>
	<?php }?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" data-role="button" data-theme="a" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Add a new address'),$_smarty_tpl);?>
</a>
	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><!-- /content -->
<?php }} ?>