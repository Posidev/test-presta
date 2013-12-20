<?php /*%%SmartyHeaderCode:1408852a990f950fee2-98971575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7998bad861429ed5bdf50f92ceefaa62bb6a57f0' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\themes\\default\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1408852a990f950fee2-98971575',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a990f966b747_65940248',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a990f966b747_65940248')) {function content_52a990f966b747_65940248($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://localhost/presta1_5_6_1/index.php?controller=supplier" title="Fournisseurs">Fournisseurs</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://localhost/presta1_5_6_1/index.php?id_supplier=1&amp;controller=supplier" title="En savoir plus sur AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://localhost/presta1_5_6_1/index.php?id_supplier=2&amp;controller=supplier" title="En savoir plus sur Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/presta1_5_6_1/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Tous les fournisseurs</option>
									<option value="http://localhost/presta1_5_6_1/index.php?id_supplier=1&amp;controller=supplier">AppleStore</option>
									<option value="http://localhost/presta1_5_6_1/index.php?id_supplier=2&amp;controller=supplier">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>