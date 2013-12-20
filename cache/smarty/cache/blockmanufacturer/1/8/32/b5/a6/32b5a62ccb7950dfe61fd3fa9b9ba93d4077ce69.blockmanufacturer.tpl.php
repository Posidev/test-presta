<?php /*%%SmartyHeaderCode:1348352a990f92f7010-66513843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b5a62ccb7950dfe61fd3fa9b9ba93d4077ce69' => 
    array (
      0 => 'F:\\wamp\\www\\presta1_5_6_1\\themes\\default\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1384787396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348352a990f92f7010-66513843',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a990f949ed89_13724418',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a990f949ed89_13724418')) {function content_52a990f949ed89_13724418($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://localhost/presta1_5_6_1/index.php?controller=manufacturer" title="Fabricants">Fabricants</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://localhost/presta1_5_6_1/index.php?id_manufacturer=1&amp;controller=manufacturer" title="En savoir plus sur Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://localhost/presta1_5_6_1/index.php?id_manufacturer=2&amp;controller=manufacturer" title="En savoir plus sur Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/presta1_5_6_1/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Tous les fabricants</option>
									<option value="http://localhost/presta1_5_6_1/index.php?id_manufacturer=1&amp;controller=manufacturer">Apple Computer, Inc</option>
									<option value="http://localhost/presta1_5_6_1/index.php?id_manufacturer=2&amp;controller=manufacturer">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>