<?php /* Smarty version Smarty-3.1.14, created on 2013-12-12 07:39:55
         compiled from "F:\wamp\www\presta1_5_6_1\admin\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2283052a9684b7547a4-45590407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab382c1646083358169a981838f13113321c241d' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\admin\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2283052a9684b7547a4-45590407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a9684b767d48_52336107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a9684b767d48_52336107')) {function content_52a9684b767d48_52336107($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>