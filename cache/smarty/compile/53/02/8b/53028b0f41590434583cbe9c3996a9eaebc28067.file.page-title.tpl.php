<?php /* Smarty version Smarty-3.1.14, created on 2013-12-12 07:39:17
         compiled from "F:\wamp\www\presta1_5_6_1\themes\default\mobile\page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1978052a968251b96c5-23230331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53028b0f41590434583cbe9c3996a9eaebc28067' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\themes\\default\\mobile\\page-title.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1978052a968251b96c5-23230331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a968251f97a9_41955658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a968251f97a9_41955658')) {function content_52a968251f97a9_41955658($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'F:\\wamp\\www\\presta1_5_6_1\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>