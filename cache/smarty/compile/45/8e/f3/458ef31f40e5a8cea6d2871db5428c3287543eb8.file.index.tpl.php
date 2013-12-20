<?php /* Smarty version Smarty-3.1.14, created on 2013-12-12 07:39:12
         compiled from "F:\wamp\www\presta1_5_6_1\themes\default\mobile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1155852a96820bf4ec1-92322571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '458ef31f40e5a8cea6d2871db5428c3287543eb8' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\themes\\default\\mobile\\index.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1155852a96820bf4ec1-92322571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a96820c034d8_75929610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a96820c034d8_75929610')) {function content_52a96820c034d8_75929610($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>